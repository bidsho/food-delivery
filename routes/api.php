<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PaystackController;

// Authentication Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
// Route::post('/forgot-password', [AuthController::class, 'sendResetLink']);
// Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/forgot-password', [AuthController::class, 'sendResetLink']);

// User Routes

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/userfatchmenu', [UserController::class, 'userFetchMenu']);
    Route::get('/fooditempage', [UserController::class, 'fooditempage']);
    Route::get('/food-item/{id}', [UserController::class, 'getFoodItem']);
    Route::post('/cart/add', [UserController::class, 'addToCart']);
    Route::get('/cart', [UserController::class, 'getCart']);
    Route::delete('/cart/remove/{id}', [UserController::class, 'removeFromCart']);
    Route::post('/cart/checkout', [UserController::class, 'checkout']);
    Route::get('/cart-count', [userController::class, 'getCartCount']);
    Route::post('/contact', [UserController::class, 'sendEmail']);
    Route::post('/paystack/pay', [PaystackController::class, 'initiatePayment']);
    Route::get('/paystack/callback', [PaystackController::class, 'handleCallback']);


    Route::get('/dashboard/stats', [AdminController::class, 'getDashboardStats']);
    Route::get('/notifications', [AdminController::class, 'getNotifications']);
    Route::delete('/notifications/{id}', [AdminController::class, 'deleteNotification']);

    Route::post('/verify-user/{id}', [AdminController::class, 'verifyUser']);
    Route::get('/pending-users', [AdminController::class, 'listPendingUsers']);
    
    Route::post('/send-notification', [AdminController::class, 'sendNotification']);

    Route::post('/menus', [AdminController::class, 'addMenu']);
    Route::get('/menus', [AdminController::class, 'listMenus']);
    Route::get('/menus/{id}', [AdminController::class, 'viewMenu']);
    Route::delete('/menus/{id}', [AdminController::class, 'deleteMenu']);

    Route::get('/orders', [AdminController::class, 'listOrders']);
    Route::get('/orders/{id}', [AdminController::class, 'viewOrder']);

    Route::post('/phones', [AdminController::class, 'addPhoneNumber']);
    Route::get('/phones', [AdminController::class, 'listPhoneNumbers']);
    Route::delete('/phones/{id}', [AdminController::class, 'deletePhoneNumber']);

    Route::get('/users', [AdminController::class, 'listUsers']);
    Route::get('/users/{id}', [AdminController::class, 'viewUser']);

    Route::get('/orders', [AdminController::class, 'listOrders']);


});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
