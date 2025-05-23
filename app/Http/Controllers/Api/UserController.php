<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\OrderT;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdmin; // Ensure this Mailable class exists
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userFetchMenu()
    {
        $menus = Menus::select('id', 'name', 'price', 'file', 'description','ingredients')
            ->get()
            ->map(function ($menu) {
                return [
                    'id' => $menu->id,
                    'name' => $menu->name,
                    'price' => $menu->price,
                    'description' => $menu->description,
                    'ingredients'=>$menu->ingredients,
                    'file' => url($menu->file) // ✅ Ensure full URL
                ];
            });
    
        return response()->json([
            'status' => true,
            'message' => 'Food menu retrieved successfully',
            'data' => $menus,
        ]);
    }
    

    public function sendEmail(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Send the email
        Mail::to('admin@example.com')->send(new ContactAdmin($request->name, $request->email, $request->message));

        // Return JSON response
        return response()->json(['success' => 'Your message has been sent successfully!'], 200);
    } 

    public function getCartCount()
    {
        if (Auth::check()) {
            $orderCount = OrderT::where('user_id', Auth::id())->where('status', 'pending')->count();
            return response()->json(['order_count' => $orderCount]);
        }

        return response()->json(['order_count' => 0]);
    }
    public function getFoodItem($id)
    {
        $food = Menus::find($id);

        if (!$food) {
            return response()->json([
                'status' => false,
                'message' => 'Food item not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Food item retrieved successfully',
            'data' => [
                'id' => $food->id,
                'name' => $food->name ?? 'No name',  // ✅ Provide default values
                'price' => $food->price ?? 0,
                'description' => $food->description ?? 'No description available',
                'ingredients' => $food->ingredients ?? 'No ingredients listed',
                'image' => url('uploads/' . ($food->file ?? 'default.jpg')),  // Convert image path to full URL
            ]
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'food_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
           
        ]);

        $food = Menus::findOrFail($request->food_id);

        // Check if user is authenticated
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'User not authenticated',
            ], 401);
        }

        // Save the order in the database
        $order = OrderT::create([
            'user_id' => Auth::id(),
            'menu_id' => $food->id,
            'quantity' => $request->quantity,
            'total_price' => $request->quantity * $food->price,
            'status' => 'pending', // Default order status
            'phone' => $request->phone,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Item added to cart and order created successfully!',
            'data' => $order
        ]);
    }
    public function getCart()
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'User not authenticated',
            ], 401);
        }

        $orders = OrderT::where('user_id', Auth::id())
                        ->where('status', 'pending')
                        ->with('menu')
                        ->get();

        return response()->json([
            'status' => true,
            'message' => 'Cart items retrieved successfully',
            'data' => $orders
        ]);
    }

    // Remove an item from the cart
    public function removeFromCart($orderId)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'User not authenticated',
            ], 401);
        }

        $order = OrderT::where('id', $orderId)
                        ->where('user_id', Auth::id())
                        ->where('status', 'pending')
                        ->first();

        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => 'Item not found in cart',
            ], 404);
        }

        $order->delete();

        return response()->json([
            'status' => true,
            'message' => 'Item removed from cart successfully',
        ]);
    }

    public function checkout()
{
    if (!Auth::check()) {
        return response()->json([
            'status' => false,
            'message' => 'User not authenticated',
        ], 401);
    }

    $orders = OrderT::where('user_id', Auth::id())
                    ->where('status', 'pending')
                    ->with('menu')
                    ->get();

    if ($orders->isEmpty()) {
        return response()->json([
            'status' => false,
            'message' => 'No items in cart to checkout',
        ], 400);
    }

    // Calculate total price
    $totalPrice = $orders->sum('total_price');

    return response()->json([
        'status' => true,
        'message' => 'Order placed successfully!',
        'items' => $orders, // ✅ Ensure Flutter uses 'items'
        'total_price' => $totalPrice, // ✅ Ensure Flutter uses 'total_price'
    ]);
}

    
}
