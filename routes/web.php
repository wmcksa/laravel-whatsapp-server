<?php

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
    return view('welcome');
});
Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/admin/device/scan/{name}', 'App\Http\Controllers\AdminDeviceController@scan');
Route::get('/device/scan', 'App\Http\Controllers\AdminDeviceController@scan1');

Route::get('/admin/device/disconnect/{name}', 'App\Http\Controllers\AdminDeviceController@disconnect');
Route::post('/webhook', 'App\Http\Controllers\WebhookController@handleWebhook');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
