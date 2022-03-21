<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BrandController;

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
		
		/* All route for Brand CRUD
		Route::get('brand/create', [BrandController::class, 'create'])
                ->name('brand.create');
				
		Route::post('brand/save', [BrandController::class, 'save'])
                ->name('brand.save');
				
		//Route to show edit a brand form
		Route::get('brand/edit{brandId}', [BrandController::class, 'edit'])
				->name('brand.edit');
				
		//Route to update a brand
		Route::post('brand/update', [BrandController::class, 'update'])
				->name('brand.update');
		
		//Route to list brand
		Route::get('brand/list', [BrandController::class, 'list'])
				->name('brand.list');*/
		
		Route::resources([
			'brand' => BrandController::class,
		]);
	});

	/*Route::get('/dashboard', function () {
		return view('dashboard');
	})->middleware(['auth'])->name('dashboard');*/


	Route::group(['prefix' => 'admin'], function () {
		Voyager::routes();
	});

	require __DIR__.'/auth.php';
