<?php

use App\Http\Controllers\UserAuthSession;
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
    return view('home');
})->name('accueil');
Route::get('/home', function () {
    return view('home');
})->name('accueil');
Route::middleware('auth')->group(function () {
    Route::get('/create-event', function () {
        return view('post.createEvent');
    });

});
Route::get('/logout',[UserAuthSession::class,'Logout']);
Route::middleware(['guest'])->group(function () {
    Route::controller(UserAuthSession::class)->group(function () {
        Route::get('/register', function () {
            return view('auth.signUp');
        })->name('register');
        Route::post('/register', 'UserRegister')->name('register');
        Route::get('/login', function () {
            return view('auth.login');
        })->name('login');
        Route::post('/login', 'UserLogin')->name('login');
    });
});
