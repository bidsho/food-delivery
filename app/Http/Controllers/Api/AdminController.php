<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EmailNotification;
use App\Mail\UserNotification;
use App\Models\MainWallet;
use Illuminate\Http\Request;
use App\Models\OrderT;
use App\Models\PhoneNumber;
use App\Models\Menus;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class AdminController extends Controller
{
    public function getDashboardStats()
    {
        return response()->json([
            'menu_count' => Menus::count(),
            'order_count' => OrderT::count(),
            'user_count' => User::count(),
        ]);
    }

    public function getNotifications()
    {
        $notifications = EmailNotification::paginate(10);
        return response()->json($notifications);
    }

    public function deleteNotification($id)
    {
        $notification = EmailNotification::findOrFail($id);
        $notification->delete();
        return response()->json(['message' => 'Notification deleted successfully']);
    }

    public function verifyUser($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'approve']);

        Mail::to($user->email)->send(new AccountApprove($user));

        return response()->json(['message' => 'User verified successfully']);
    }

    public function listPendingUsers()
    {
        $users = User::where('role', 'users')->where('status', 'pending')->get();
        return response()->json($users);
    }

    public function sendNotification(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body_one' => 'required|string',
            'body_two' => 'required|string',
            'email' => 'required|email',
        ]);

        $notification = EmailNotification::create([
            'subject' => $validated['title'],
            'body_one' => $validated['body_one'],
            'body_two' => $validated['body_two'],
            'email' => $validated['email'],
        ]);

        Mail::to($validated['email'])->send(new UserNotification($notification));

        return response()->json(['message' => 'Notification sent successfully']);
    }

    public function addMenu(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ingredients' => 'required|string',
        ]);

        $fileupload = null;
        if ($request->hasFile('file')) {
            $fileupload = $request->file('file')->store('uploads', 'public');
        }

        $menu = Menus::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'file' => $fileupload,
            'ingredients' => $validated['ingredients'],
        ]);

        return response()->json(['message' => 'Menu added successfully', 'menu' => $menu]);
    }

    public function listMenus()
    {
        return response()->json(Menus::all());
    }

    public function viewMenu($id)
    {
        return response()->json(Menus::findOrFail($id));
    }

    public function deleteMenu($id)
    {
        Menus::findOrFail($id)->delete();
        return response()->json(['message' => 'Menu deleted successfully']);
    }

    public function listOrders()
    {
        return response()->json(OrderT::with('menu')->latest()->get());
    }

    public function viewOrder($id)
    {
        return response()->json(OrderT::findOrFail($id));
    }

    public function addPhoneNumber(Request $request)
    {
        $validated = $request->validate(['phone' => 'required|numeric|digits_between:10,15']);

        PhoneNumber::create(['phone' => $validated['phone']]);

        return response()->json(['message' => 'Phone number saved successfully']);
    }

    public function listPhoneNumbers()
    {
        return response()->json(PhoneNumber::all());
    }

    public function deletePhoneNumber($id)
    {
        PhoneNumber::findOrFail($id)->delete();
        return response()->json(['message' => 'Phone number deleted successfully']);
    }

    public function listUsers()
    {
        return response()->json(User::where('role', 'users')->get());
    }

    public function viewUser($id)
    {
        return response()->json(User::findOrFail($id));
    }
}
