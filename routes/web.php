<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

	Route::get('/', function () {
		return view('homepage');
	})->name('homepage');

	Route::get('/backend', function () {
		 
		if (Auth::check()) {
			return view('dashboard');
		}
		else
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

	Route::group(['middleware' => ['auth','verified']], function () {
		
		Route::get('/dashboard', [DashboardController::class, 'index'])
                ->name('dashboard');

		Route::get('store/displayImage{id}', [StoreController::class, 'displayImage'])
                ->name('store.displayImage');

		Route::get('product/displayImage{id}', [ProductController::class, 'displayImage'])
                ->name('product.displayImage');
		
		//Route to save product's images
		Route::post('product/image', [ProductController::class, 'images'])
                ->name('product.image');
		Route::resources([
			'brand' => BrandController::class,
			'store' => StoreController::class,
			'category' => CategoryController::class,
			'product' => ProductController::class,
			'coupon' => CouponController::class,
		]);
	});

	/*Route::get('/dashboard', function () {
		return view('dashboard');
	})->middleware(['auth'])->name('dashboard');*/


	Route::group(['prefix' => 'admin'], function () {
		Voyager::routes();
	});

	require __DIR__.'/auth.php';