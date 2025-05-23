<?php

namespace App\Http\Controllers;

use App\Models\EmailNotification;
use Illuminate\Notifications\DatabaseNotification;
use App\Mail\UserNotification;
use App\Models\MainWallet;
use Illuminate\Http\Request;
use App\Models\OrderT;
use App\Models\PhoneNumber;
use App\Models\Menus;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function Home(){
        $menu = Menus::count();
        $orders = OrderT::count();
        $user = User::count();
        return view('/admin/home', compact('menu', 'orders', 'user'));
    }
    

    public function viewNotifications()
    {
        $notifications = EmailNotification::paginate(10);
        return view('admin.notifications', compact('notifications'));
    }


    public function listOrders(Request $request)
    {
        // Retrieve the optional date filter
        $searchDate = $request->input('searchDate');

        // Build the query
        $query = OrderT::with(['menu', 'user'])->orderBy('created_at', 'desc');

        if ($searchDate) {
            $query->whereDate('created_at', $searchDate);
        }

        // Fetch and group orders by date
        $orders = $query->get()->groupBy(function ($order) {
            return Carbon::parse($order->created_at)->format('Y-m-d');
        })->map(fn($group) => $group->toArray())->toArray(); 

        return response()->json(['orders' => $orders], 200);
    }

    public function deleteNotification($id)
    {
        $notification = DatabaseNotification::findOrFail($id);
        $notification->delete();
        return redirect()->back()->with('success', 'Notification deleted successfully!');
    }

    public function VerifyPendingUser($id)
    {
        $user = User::find($id);
        $user->update(['status' => 'approve']);
        Mail::to($user->email)->send(new AccountApprove($user));
        return redirect()->back();
    }

    public function ListPendingUser()
    {
        $users = User::where('role', 'users')->get();
        return view('/admin/listPendingUser', compact('users'));
    }

    public function AddNotification()
    {
        $users = User::all();
        return view('/admin/add_notification', compact('users'));
    }

    public function sendNotification(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body_one' => 'required|string',
            'body_two' => 'required|string',
            'email' => 'required',
        ]);

        $notify = EmailNotification::create([
            'subject' => $validated['title'],
            'body_one' => $validated['body_one'],
            'body_two' => $validated['body_two'],
            'email' => $validated['email'],
        ]);

        Mail::to($validated['email'])->send(new UserNotification($notify));

        return redirect()->back()->with('success', 'Notification sent successfully!');
    }

    public function AddMenu()
    {
        return view('/admin/add_menu');
    }

    public function SendMenu(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ingredients' => 'required|string',
        ]);

        $fileupload = '';

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $fileupload = $filename;
        }

        Menus::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'file' => $fileupload,
            'ingredients' => $request->ingredients,
        ]);

        return redirect('/admin/list_menu');
    }

    public function ListMenu()
    {
        $menu = Menus::get();
        return view('/admin/list_menu', compact('menu'));
    }

    public function ViewMenu($id)
    {
        $menu = Menus::find($id);
        return view('/admin/view_menu', compact('menu'));
    }

    public function DeleteMenu(Request $request, $id)
    {
        $menu = Menus::find($id);
        $menu->delete();
        return redirect()->back();
    }

    public function ListWallet()
    {
        $wallet = Crypto::get();
        return view('/admin/listWallet', compact('wallet'));
    }

    public function EditWallet($id)
    {
        $wallet = Crypto::where('id', $id)->first();
        return view('/admin/editWallet', compact('wallet'));
    }

    public function AddWallet()
    {
        return view('/admin/addwallet');
    }

    public function ListOrder()
    {
        $orders = OrderT::with('menu')
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($order) {
                return $order->created_at->format('Y-m-d');
            });

        return view('/admin/list_order', compact('orders'));
    }

    public function ViewOrder($id)
    {
        $order = OrderT::find($id);
        return view('/admin/view_order', compact('order'));
    }

    public function AddPhone()
    {
        return view('/admin/add_phone');
    }
    public function DeletePhone($id){
      $phone=PhoneNumber::find($id);
      $phone->delete();
      return redirect()->back();
    }

    public function SendContactPhone(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|digits_between:10,15',
        ]);

        try {
            PhoneNumber::create(['phone' => $request->phone]);
            return redirect('/admin/view_phone')->with('success', 'Phone number saved successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function ViewContact()
    {
        $phone = PhoneNumber::get();
        return view('/admin/view_phone', compact('phone'));
    }

    public function ListUser()
    {
        $user = User::where('role', 'users')->get();
        return view('/admin/listUser', compact('user'));
    }

    public function ViewUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('/admin/viewUser', compact('user'));
    }

    public function ApproveInvestment($id)
    {
        $deposit = Deposit::find($id);
        if (!$deposit) {
            return redirect()->back()->with('error', 'Deposit not found.');
        }

        $userId = $deposit->user_id;
        if (!$userId) {
            return redirect()->back()->with('error', 'User ID not associated with this deposit.');
        }

        $deposit->update([
            'status' => 'approve',
            'total' => $deposit->amount,
        ]);

        $mainWallet = MainWallet::where('user_id', $userId)->first();
        if ($mainWallet) {
            $mainWallet->update([
                'total_amount' => $mainWallet->total_amount + $deposit->amount,
            ]);
        } else {
            MainWallet::create([
                'user_id' => $userId,
                'total_amount' => $deposit->amount,
                'status' => 'approve',
            ]);
        }

        $user = User::find($userId);
        if ($user) {
            Mail::to($user->email)->send(new DepositApprove($deposit));
        }

        return redirect()->back()->with('success', 'Investment approved and wallet updated.');
    }

    public function ApproveUpgrade($id)
    {
        $upgrade = Upgrade::find($id);
        $upgrade->update(['status' => 'approve']);

        $mainWallet = MainWallet::where('user_id', $upgrade->user_id)->first();
        if ($mainWallet) {
            $mainWallet->update(['total_amount' => $mainWallet->total_amount + $upgrade->amount]);
        } else {
            MainWallet::create([
                'user_id' => $upgrade->user_id,
                'total_amount' => $upgrade->amount,
                'status' => 'approve',
            ]);
        }

        $user = User::find($upgrade->user_id);
        if ($user) {
            Mail::to($user->email)->send(new UpgradeApprove($upgrade));
        }

        return redirect()->back()->with('success', 'Upgrade approved and wallet updated.');
    }
}
