<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tenancy\RegisterTenantController;
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


// Tenant Registration Routes
Route::get('/register', [RegisterTenantController::class, 'create']);
Route::post('/register', [RegisterTenantController::class, 'store']);
