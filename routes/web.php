<?php

use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('landingpage', [
        "title" => "Home",
        'active' => 'landingpage',
    ]);
});

Route::get('/jasapindahan', function () {
    return view('jasapindahan', [
        "title" => "Jasa Pindahan",
        'active' => 'jasapindahan',
    ]);
});

Route::get('/jasapengiriman', function () {
    return view('jasapengiriman', [
        "title" => "Jasa Pengiriman",
        'active' => 'jasapengiriman',
    ]);
});

Route::get('/jasapenyimpanan', function () {
    return view('jasapenyimpanan', [
        "title" => "Jasa Penyimpanan",
        'active' => 'jasapenyimpanan',
    ]);
});

Route::get('/profile', function () {
    return view('profile/index', [
        "title" => "Profile",
        'active' => 'profile/index',
    ]);
});

Route::get('/sesi', [SessionController::class, 'index']);
Route::get('/sesi/login', [SessionController::class, 'login']);
Route::post('/sesi/login', [SessionController::class, 'login']);
