<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePagecontroller;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FaqController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\NewsletterController;

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


Route::get('/', [homepageController::class, 'index'])->name('homepage');

Route::get('about-us', [HomePageController::class, 'about'])->name('about');

Route::get('become-vendor', [HomePageController::class, 'vendor'])->name('vendor');

	//Route to email template
	Route::get('email', [HomePageController::class,'emailTemplate']);

	//route to access shop page
	Route::get('shop', [ShopController::class, 'index'])
                ->name('shop');
//route to access shop page
Route::get('shop', [ShopController::class, 'index'])
    ->name('shop');

Route::get('/backend', function () {

    if (Auth::check()) {
        return view('dashboard');
    } else
        return view('backend/login');
})->name('backend');

//Email verification notice
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//when user click on activate my account on mail to verify his email address
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Resending Email verification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Route to display product's image
Route::get('product/displayImage{id}', [ProductController::class, 'displayImage'])
    ->name('product.displayImage');

//Route to delete product's image
Route::post('product/destroyImage{id}', [ProductController::class, 'destroyImage'])
    ->name('product.destroyImage');

Route::get('/', [HomePageController::class, 'index'])->name('homepage');

Route::get('/backend', function () {

    if (Auth::check()) {
        return view('dashboard');
    } else
        return view('backend/login');
})->name('backend');

//Email verification notice
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//when user click on activate my account on mail to verify his email address
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Resending Email verification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Route to display product's image
Route::get('product/displayImage{id}', [ProductController::class, 'displayImage'])
    ->name('product.displayImage');

//Route to delete product's image
Route::post('product/destroyImage{id}', [ProductController::class, 'destroyImage'])
    ->name('product.destroyImage');


//Route to product's details
Route::get('product/details{id}', [ProductController::class, 'details'])
    ->name('product.details');

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('store/displayImage{id}', [StoreController::class, 'displayImage'])
        ->name('store.displayImage');


    Route::get('blog/displayImage{id}', [BlogController::class, 'displayImage'])
        ->name('blog.displayImage');




    //Route to save product's images
    Route::post('product/image', [ProductController::class, 'images'])
        ->name('product.image');

    //Route test
    Route::get('test', [ProductController::class, 'test'])
        ->name('test');



    //Route to save product's images
    Route::post('product/image', [ProductController::class, 'images'])
        ->name('product.image');



    Route::resources([
        'brand' => BrandController::class,
        'store' => StoreController::class,
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'coupon' => CouponController::class,

        'review' => ReviewController::class,
        'packages' => PackageController::class,
        'user' => UserController::class,
        'town' => TownController::class,
        'blog' => BlogController::class,
        'faq' => FaqController::class,
        'orders' => OrderController::class,

        'faq'   => FaqController::class,

    ]);
});




Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('search', [SearchController::class, 'find'])->name('search.find');

// newsletter
Route::post('newsletter/store',[NewsletterController::class,'store'])->name('newsletter.store');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//cree une route parametre
Route::get('categories/{id}', [HomePageController::class, 'product'])->name('categories.product');


require __DIR__ . '/auth.php';
