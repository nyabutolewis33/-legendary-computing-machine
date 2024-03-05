<?php

use App\Http\Controllers\HouseHuntingController;
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

Route::get('/', [HouseHuntingController::class, 'index']);
Route::get('/products', [HouseHuntingController::class, 'products']);
Route::get('/about', [HouseHuntingController::class, 'about']);
Route::get('/contacts', [HouseHuntingController::class, 'contact']);
Route::get('/faq', [HouseHuntingController::class, 'faq']);
Route::get('/product-detail', [HouseHuntingController::class, 'productDetail']);
Route::get('/sign-in', [HouseHuntingController::class, 'signIn']);
Route::get('/sign-up', [HouseHuntingController::class, 'signUp']);

