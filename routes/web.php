<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('ping', function () {
    return 'pong';
});

Route::middleware('localization')->group(function () {

    Route::get('/home', [HomeController::class, 'homePage'])->name('home');

    Route::get('/about_old', [HomeController::class, 'about'])->name('about_old');
    Route::get('/services_old', [HomeController::class, 'services'])->name('services_old');
    Route::get('/contact_old', [HomeController::class, 'contact'])->name('contact_old');
    Route::get('/news', [HomeController::class, 'news'])->name('news');
    Route::get('/news/{slug}', [HomeController::class, 'newsDetail'])->name('news.detail');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/', function () {
        return view('guest.business_services');
    })->name('business-services');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
    Route::get('/about', function () {
        return view('guest.about2');
    })->name('about');
    Route::get('/services', [PostController::class, 'services'])->name('services');

    Route::get('/contact', function () {
        return view('guest.contact2');
    })->name('contact');

    Route::prefix('products')->group(function () {
        Route::get('/{product}/show', [ProductController::class, 'show'])->name('products.detail');
    });
    Route::get('/services/{slug}', [PostController::class, 'serviceDetail'])->name('services.detail');

});
Route::middleware(['auth', 'localization'])->group(function () {
    Route::get('/update-language/{lang}', [
        UserController::class,
        'updateLanguage',
    ])->name('update-language');

    // Admin Routes
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/report/sales', [DashboardController::class, 'sales'])->name('report.sales');

        Route::prefix('products')->group(function () {
            Route::get('/{product}/images', [ProductController::class, 'showProductImages']);
            Route::delete('/{product}/images/{imageId}', [ProductController::class, 'deleteProductImage']);
            Route::post('/{product}/images', [ProductController::class, 'storeProductImage']);
        });

        Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

        Route::resources([
            'brands' => BrandController::class,
            'categories' => CategoryController::class,
            'products' => ProductController::class,
            'roles' => RoleController::class,
            'permissions' => PermissionController::class,
            'users' => UserController::class,
            'orders' => OrderController::class,
            'ratings' => RatingController::class,
            'posts' => PostController::class,
        ]);
    });

    // Customer Routes
    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'show'])->name('cart.show');
        Route::post('/save/product/{product}', [CartController::class, 'save'])->name('cart.save');
        Route::post('/store/product/{product}', [CartController::class, 'store'])->name('cart.store');
        Route::put('/update/{id}', [CartController::class, 'update'])->name('cart.update');
        Route::get('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    });
    Route::get('/my-account', [UserController::class, 'editProfile'])->name('user.profile');
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/order-history', [OrderController::class, 'getOrderHistory'])->name('order_history');
    Route::get('/order-history/{order}', [OrderController::class, 'getOrderDetail'])->name('order_detail');
    Route::post('/orders/{order}/rate', [OrderController::class, 'rateOrder'])->name('orders.rate');
});

Route::get('paypal-success', [OrderController::class, 'paypalSuccess']);
Route::get('paypal-error', [OrderController::class, 'paypalError']);
