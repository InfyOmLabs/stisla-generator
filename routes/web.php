<?php

use App\Http\Controllers\ClientController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();



Route::middleware(['auth'])->group(function () {
Route::resource('clients', ClientController::class);
Route::get('client/export/', [ClientController::class, 'export'])->name('clients.export');
Route::post('client/import/', [ClientController::class, 'import'])->name('clients.import');

Route::resource('packages', App\Http\Controllers\PackageController::class);

});

Route::resource('investments', App\Http\Controllers\InvestmentController::class);


Route::resource('hotspotZones', App\Http\Controllers\HotspotZoneController::class);


Route::resource('cardSellers', App\Http\Controllers\CardSellerController::class);
