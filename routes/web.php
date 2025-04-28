<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShoppingcartController;
use App\Http\Controllers\Frontend\CollectionController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\AllcollectionController;
use App\Http\Controllers\Frontend\ShopwithsidebarController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\ForgotPasswordController;
use App\Http\Controllers\Frontend\SingleproductController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\VirtualAssistantController;
use App\Http\Controllers\Frontend\ChatController;

use App\Models\Frontend\ProductModel;  // Import your Product model

Route::get('/search-results', function (Request $request) {
    $query = $request->input('query');

    // Fetch matching products
    $results = ProductModel::where('name', 'LIKE', "%$query%")->get();

    return response()->json($results);
});

//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/collection', [CollectionController::class, 'collection'])->name('collection');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/shoppingcart', [ShoppingcartController::class, 'shoppingcart'])->name('shoppingcart');
Route::get('/shop-sidebar', [ShopwithsidebarController::class, 'shopwithsidebar'])->name('shopwithsidebar'); // Renamed route
Route::get('/allcollection', [AllcollectionController::class, 'allcollection'])->name('allcollection');
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist'); // Fixed duplicate '/checkout'
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/submit', [LoginController::class, 'submitMessage'])->name('login.submit');
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::post('/signup', [SignupController::class, 'submitMessage'])->name('signup.submit');
Route::get('/single-product', [SingleproductController::class, 'show'])->name('single-product');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/virtual-assistant', [VirtualAssistantController::class, 'index'])->name('virtual.assistant');
Route::post('/get-response', [ChatController::class, 'getResponse']);
Route::post('/chatbot', function (Request $request) {
    $query = strtolower($request->input('query')); // Get user input

    // Predefined responses
    $responses = [
        "hello" => "Hi there! How can I assist you today?",
        "how are you" => "I'm just a bot, but I'm here to help!",
        "what is your return policy" => "Our return policy allows returns within 30 days with a valid receipt.",
        "how can i track my order" => "You can track your order using the tracking ID provided in your email.",
        "do you offer free shipping" => "Yes! We offer free shipping on orders above $50.",
        "what payment methods do you accept" => "We accept credit/debit cards, PayPal, and Apple Pay.",
        "how do i cancel my order" => "You can cancel your order from the 'My Orders' section before it is shipped.",
        "can i change my shipping address" => "Yes, but only before the order is processed. Please update it in 'My Account'.",
        "what if i receive a damaged product" => "We're sorry! Please contact our support team for a replacement or refund.",
        "how long does delivery take" => "Standard shipping takes 5-7 business days. Express shipping takes 2-3 days.",
        "do you offer international shipping" => "Yes, we ship worldwide! Additional charges may apply for international orders.",
        "how do i apply a discount code" => "You can enter your discount code at checkout to apply the discount.",
        "can i return a product after using it" => "Products must be unused and in original packaging to qualify for a return.",
        "what happens if my order is delayed" => "We apologize for the delay. Please check your email for updates or contact support.",
        "do you have a loyalty program" => "Yes! Join our rewards program to earn points on every purchase.",
        "how can i contact customer support" => "You can reach our support team via email or live chat on our website.",
        "what is your refund policy" => "Refunds are processed within 5-10 business days after receiving the returned item.",
        "do you provide warranty on products" => "Yes, most of our products come with a 1-year manufacturer warranty.",
        "can i exchange an item instead of returning it" => "Yes, exchanges are available for eligible items within 30 days."
    ];
    

    // Find response or return default
    $reply = $responses[$query] ?? $responses["default"];

    return response()->json(["response" => $reply]);
});
// Password Reset Routes
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
