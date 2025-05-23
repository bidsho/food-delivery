<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Livewire\ListSearchUser;
use App\Livewire\Users\FoodItemPage;
use App\Livewire\Users\CartPage;
use App\Livewire\Users\Checkout;
use App\Livewire\Users\SuccessFulPaid;
use App\Livewire\Users\UserOrder;
use App\Livewire\Users\UserContact;
use App\Livewire\Admin\ListOrder;
use App\Http\Controllers\PaystackController;

Route::post('/paystack/pay', [PaystackController::class, 'initiatePayment'])->name('paystack.pay');
Route::get('/paystack/callback', [PaystackController::class, 'handleCallback'])->name('paystack.callback');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/food-item-page/{id}', FoodItemPage::class)->middleware(['auth', 'verified']);
Route::get('/admin/list-order', ListOrder::class)->middleware(['auth', 'verified','isAdmin']);
Route::get('/users/cart-page', CartPage::class)->middleware(['auth', 'verified']);
Route::get('/users/checkout', Checkout::class)->middleware(['auth', 'verified']);
Route::get('/users/user-contact', UserContact::class)->middleware(['auth', 'verified']);
Route::get('/users/success-ful-paid/{reference?}', SuccessFulPaid::class)->middleware(['auth', 'verified']);
Route::get('/users/user-order', UserOrder::class)
    ->middleware(['auth', 'verified'])
    ->name('success.payment');
Route::get('/', [HomeController::class, 'Welcome']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/list-search-user', ListSearchUser::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::get('/users/food_item_page/{id}', [HomeController::class, 'FoodItemPage']);

Route::prefix('admin')->middleware(['auth', 'verified','isAdmin'])->group(function(){
    Route::get('/home', [AdminController::class, 'Home']);
    Route::get('/add_menu', [AdminController::class, 'AddMenu']);
    Route::get('/list_menu', [AdminController::class, 'ListMenu']);
    Route::get('/view_menu/{id}', [AdminController::class, 'ViewMenu']);
    Route::post('/sendMenu', [AdminController::class, 'SendMenu']);
    Route::post('/delete_menu/{id}', [AdminController::class, 'DeleteMenu']);
    Route::get('/add_phone', [AdminController::class, 'AddPhone']);
    Route::get('/view_phone', [AdminController::class, 'ViewContact']);
    Route::post('/delete_phone/{id}', [AdminController::class, 'DeletePhone']);
    Route::post('/sendContactPhone', [AdminController::class, 'SendContactPhone']);


   
    // Agent Route 
    Route::get('/add_notification', [AdminController::class, 'AddNotification']);
    Route::get('/listPendingUser', [AdminController::class, 'ListPendingUser']);
        Route::get('/VerifyPendingUser/{id}', [AdminController::class, 'VerifyPendingUser']);
        Route::get('/add_product', [AdminController::class, 'AddProduct']);
        Route::get('/list_view_plan', [AdminController::class, 'ListViewPlan']);
        Route::get('/view_plan/{id}', [AdminController::class, 'ViewUpgradePlan']);
    
        Route::get('/addwallet', [AdminController::class, 'AddWallet']);
        Route::get('/list_order', [AdminController::class, 'ListOrder']);
        Route::get('/list_product', [AdminController::class, 'ListProduct']);
        Route::get('/delete_product/{id}', [AdminController::class, 'DeleteProduct']);
        Route::get('/view_product/{id}', [AdminController::class, 'ViewProduct']);
        Route::get('/AlertSecurity/{id}', [AdminController::class, 'AlertSecurity']);
        Route::post('/saveWallet', [AdminController::class, 'SaveWallet']);
        Route::post('/saveTesla', [AdminController::class, 'SaveTesla']);
        Route::post('/editTesla', [AdminController::class, 'EditTesla']);
    Route::get('/listAgent', [AdminController::class, 'ListAgent']);
    Route::get('/editAgent/{id}', [AdminController::class, 'EditAgent']);
     Route::get('/deposit/{id}', [AdminController::class, 'Deposit']);
    Route::get('/delete_Wallet/{id}', [AdminController::class, 'DeleteWallet']);
    Route::get('/list_kyc', [AdminController::class, 'UserKyc']);
    Route::Post('/saveAgent', [AdminController::class, 'SaveAgent']);
    Route::Post('/saveEditAgent/{id}', [AdminController::class, 'SaveEditAgent']);
    Route::Post('/sendNotification/', [AdminController::class, 'sendNotification']);
    Route::get('/notifications', [AdminController::class, 'viewNotifications'])->name('admin.notifications');
    Route::delete('/deleteKyc/{id}', [AdminController::class, 'deleteKyc'])->name('admin.deleteKyc');
    Route::delete('/deleteNotification/{id}', [AdminController::class, 'deleteNotification'])->name('admin.deleteNotification');

    // Agent Wallet
    Route::get('/listWallet', [AdminController::class, 'ListWallet']);
    Route::get('/editWallet/{id}', [AdminController::class, 'EditWallet']);
    Route::Post('/saveEditWallet/{id}', [AdminController::class, 'SaveEditWallet']);

    // User Route
    Route::get('/listUser', [AdminController::class, 'ListUser']);
    Route::get('/viewUser/{id}', [AdminController::class, 'ViewUser']);
    Route::get('/fundUser/{id}', [AdminController::class, 'FundUser']);
    Route::Post('/saveFundUser', [AdminController::class, 'SaveFundUser']);
     // KYC Route
    Route::get('/listKyc', [AdminController::class, 'ListKyc']);
     Route::post('/saveCrypto', [AdminController::class, 'SaveCrypto']);
     Route::post('/saveCashapp', [AdminController::class, 'SaveCashapp']);
     Route::post('/savePayPal', [AdminController::class, 'SavePayPal']);
    Route::get('/viewKyc/{id}', [AdminController::class, 'ViewKyc']);
     Route::get('/crypto/{id}', [AdminController::class, 'Crypto']);
     Route::get('/zelly/{id}', [AdminController::class, 'Zelly']);
      Route::get('/cashapp/{id}', [AdminController::class, 'Cashapp']);
    Route::get('/approveKyc/{id}', [AdminController::class, 'ApproveKyc']);
    Route::get('/declineKyc/{id}', [AdminController::class, 'DeclineKyc']);
    Route::get('/DeleteUser/{id}', [AdminController::class, 'DeleteUser']);
    Route::post('/saveDeposit', [AdminController::class, 'SaveDeposit']);
    //withdrawal
    Route::get('/listBankwithdrawal', [AdminController::class, 'ListBankwithdrawal']);
    Route::get('/viewBankwithdrawal/{id}', [AdminController::class, 'ViewBankwithdrawal']);
    Route::get('/reviseBankwithdrawal/{id}', [AdminController::class, 'ReviseBankwithdrawal']);
    Route::get('/list_reviseB', [AdminController::class, 'ListReviseB']);
    Route::get('/approveBankwithdrawal/{id}', [AdminController::class, 'ApproveBankwithdrawal']);
    Route::get('/view_revise_bank/{id}', [AdminController::class, 'ViewReviseBank']);
    Route::get('/declineBankwithdrawal/{id}', [AdminController::class, 'DeclineBankwithdrawal']);
    Route::get('/processingBankwithdrawal/{id}', [AdminController::class, 'ProcessingBankwithdrawal']);
    Route::get('/list_cashapp', [AdminController::class, 'ListCashApp']);
    Route::get('/view_cashapp/{id}', [AdminController::class, 'ViewCashApp']);
    Route::get('/approveCashAppWithdraw/{id}', [AdminController::class, 'ApproveCashAppWithdraw']);
    Route::get('/declineCashAppWithdraw/{id}', [AdminController::class, 'DeclineCashAppWithdraw']);
    Route::get('/processingCashAppWithdraw/{id}', [AdminController::class, 'ProcessingCashAppWithdraw']);

    Route::get('/listCryptowithdrawal', [AdminController::class, 'ListCryptowithdrawal']);
    Route::get('/list_paypal', [AdminController::class, 'ListPayPal']);
    Route::get('/view_paypal/{id}', [AdminController::class, 'ViewPayPal']);
    Route::get('/cashapp_wallet', [AdminController::class, 'WalletCashApp']);
    Route::get('/edit_cashapp/{id}', [AdminController::class, 'EditCashApp']);
    Route::get('/viewCryptowithdrawal/{id}', [AdminController::class, 'ViewCryptowithdrawal']);
    Route::get('/approveCryptoWithdraw/{id}', [AdminController::class, 'ApproveCryptoWithdraw']);
    Route::get('/approvePayPalWithdraw/{id}', [AdminController::class, 'ApprovePayPalWithdraw']);
    Route::get('/declineCryptoWithdraw/{id}', [AdminController::class, 'DeclineCryptoWithdraw']);
    Route::get('/declinePayPalWithdraw/{id}', [AdminController::class, 'DeclinePayPalWithdraw']);
    Route::get('/processingCryptoWithdraw/{id}', [AdminController::class, 'ProcessingCryptoWithdraw']);
    Route::get('/processingPayPalWithdraw/{id}', [AdminController::class, 'ProcessingPayPalWithdraw']);
     // KYC Card Route
     Route::get('/addCard', [AdminController::class, 'AddCard']);
     Route::get('/listCard', [AdminController::class, 'ListCard']);
     Route::get('/editCard/{id}', [AdminController::class, 'EditCard']);
     Route::Post('/saveCard', [AdminController::class, 'SaveCard']);
     Route::Post('/saveEditCard/{id}', [AdminController::class, 'SaveEditCard']);
     Route::get('/paypal_wallet', [AdminController::class, 'PayPalWallet']);
     Route::get('/paypal_edit/{id}', [AdminController::class, 'EditPayPalWallet']);
     Route::get('/viewDetail', [AdminController::class, 'ViewDetail']);
     Route::Post('/saveEditCompany/{id}', [AdminController::class, 'SaveEditCompany']);
     Route::Post('/SaveEditCashApp', [AdminController::class, 'SaveEditCashApp']);
     Route::Post('/SaveEditPayPal', [AdminController::class, 'SaveEditPayPal']);
     Route::get('/list_activities', [AdminController::class, 'ListActivities']);
     Route::get('/view_activities/{id}', [AdminController::class, 'ViewActivities']);
     Route::Post('/EditActivities', [AdminController::class, 'EditActivities']);
     Route::get('/ProcessingInvestment/{id}', [AdminController::class, 'ProcessingInvestment']);
     Route::get('/list_upgrade', [AdminController::class, 'ListUpgrade']);
     Route::get('/view_upgrade/{id}', [AdminController::class, 'ViewUpgrade']);
     Route::get('/ApproveUpgrade/{id}', [AdminController::class, 'ApproveUpgrade']);
     Route::get('/ProcessingUpgrade/{id}', [AdminController::class, 'ProcessingUpgrade']);
     Route::get('/DeclineUpgrade/{id}', [AdminController::class, 'DeclineUpgrade']);
     Route::get('/view_order/{id}', [AdminController::class, 'ViewOrder']);
     Route::get('/approve_order/{id}', [AdminController::class, 'ApproveOrder']);
     Route::get('/decline_order/{id}', [AdminController::class, 'DeclineOrder']);



     


     // Investment Route
     Route::get('/listInvestment', [AdminController::class, 'ListInvestment']);
     Route::get('/listFundInvestment', [AdminController::class, 'ListFundInvestment']);
     Route::get('/viewDeposit/{id}', [AdminController::class, 'ViewDeposit']);
     Route::get('/approveInvestment/{id}', [AdminController::class, 'ApproveInvestment']);
     Route::get('/declineInvestment/{id}', [AdminController::class, 'DeclineInvestment']);
     Route::get('/tradeProfit/{id}', [AdminController::class, 'TradeProfit']);
     Route::get('/currency/{id}', [AdminController::class, 'Currency']);
     Route::get('/tradeLost/{id}', [AdminController::class, 'TradeLost']);
     Route::get('/listBankDetail', [AdminController::class, 'ListBankDetail']);
     Route::get('/listCryptoDetail', [AdminController::class, 'ListCryptoDetail']);
      Route::get('/approveBankDetail/{id}', [AdminController::class, 'ApproveBankDetail']);
       Route::get('/approveCryptoDetail/{id}', [AdminController::class, 'ApproveCryptoDetail']);
            Route::get('/declineBankDetail/{id}', [AdminController::class, 'DeclineBankDetail']);
             Route::get('/declineCryptoDetail/{id}', [AdminController::class, 'DeclineCryptoDetail']);
     Route::get('/viewBankDetail/{id}', [AdminController::class, 'ViewBankDetail']);
     Route::get('/viewCryptoDetail/{id}', [AdminController::class, 'ViewCryptoDetail']);
     Route::Post('/saveAgent', [AdminController::class, 'SaveAgent']);
     Route::Post('/UserCurrency', [AdminController::class, 'UserCurrency']);
     Route::Post('/saveEditAgent/{id}', [AdminController::class, 'SaveEditAgent']);
     Route::Post('/saveTradeProfit/{id}', [AdminController::class, 'SaveTradeProfit']);
     Route::Post('/saveTradeLost/{id}', [AdminController::class, 'SaveTradeLost']);
     Route::Post('/SaveEditPlan', [AdminController::class, 'SaveEditPlan']);
     Route::get('/list_link_account', [AdminController::class, 'ListLinkAccount']);
     Route::get('/view_link_account/{id}', [AdminController::class, 'ViewLinkAccount']);
    
    

        Route::get('/ListOrder', [AdminController::class, 'ListOrder']);
        Route::get('/ViewOrder/{id}', [AdminController:: class, 'ViewOrder']);


});

require __DIR__.'/auth.php';
