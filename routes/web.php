<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

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
		
		/*Route::get('/vendor', function () {
		return view('vendor_dashboard');
		})->name('vendor_dashboard');
		
		Route::get('/customer', function () {
		return view('customer_dashboard');
		})->name('customer_dashboard');*/
	});

	/*Route::get('/dashboard', function () {
		return view('dashboard');
	})->middleware(['auth'])->name('dashboard');*/


	Route::group(['prefix' => 'admin'], function () {
		Voyager::routes();
	});

	require __DIR__.'/auth.php';
