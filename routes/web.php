<?php

use App\Http\Controllers\Landlord\LandlordApartmentController;
use App\Http\Controllers\Pages\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::middleware(['auth', 'role:landlord'])->name('landlord.')->prefix('landlord')->group(function () {
    Route::post('store-apartment', [LandlordApartmentController::class, 'storeapartment'])->name('storeapartment');
});
// Route::