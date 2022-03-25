<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CategoryController;

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

	Route::group(['middleware' => ['auth']], function () {
		
		

		Route::get('/dashboard', [DashboardController::class, 'index'])
                ->name('dashboard');
		
		Route::resources([
			'brand' => BrandController::class,
			'store' => StoreController::class,
			'category' => CategoryController::class,
			'product' => ProductController::class,
		]);
	});

	/*Route::get('/dashboard', function () {
		return view('dashboard');
	})->middleware(['auth'])->name('dashboard');*/


	Route::group(['prefix' => 'admin'], function () {
		Voyager::routes();
	});

	require __DIR__.'/auth.php';
