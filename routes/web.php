<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect('/login');
});


Route::namespace('App\Http\Controllers\Auth')->group(function () {
    Route::get('admin/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'LoginController@login')->name('admin.login');
    Route::get('admin/logout', 'LoginController@logout')->name('admin.logout');
});


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Auth::routes();
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::namespace('Admin')->group(function () {
            Route::group(['middleware' => ['auth']], function () {
                Route::get('/', 'DashboardController@index')->name('dashboard');


                Route::namespace('Actions')->group(function () {
                    Route::resource('actions', 'ActionController')->middleware('Customer');
                });

                Route::namespace('Users')->group(function () {
                    Route::resource('users', 'UserController')->middleware(['Employee','Customer']);
                });

                Route::namespace('Employees')->group(function () {
                    Route::resource('employees', 'EmployeeController')->middleware(['Employee','Customer']);
                });
                Route::namespace('Customers')->group(function () {
                    Route::resource('customers', 'CustomerController')->middleware('Customer');
                });
                Route::namespace('Customer_actions')->group(function () {
                    Route::resource('customer_actions', 'Customer_actionController');
                });

                Route::get('user-profile', function () {
                    return view('admin.profile_user.list');
                });

                Route::namespace('Employee_customers')->group(function () {
                    Route::resource('employee_customers', 'Employee_customersController');
                });



            });
        });
    });
});


//\Illuminate\Support\Facades\Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
