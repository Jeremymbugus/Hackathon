<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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




//Route::get('users', 'UserController@index');


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('user', 'AuthController@getAuthUser');
/*Route::middleware('auth:api')->group( function () {
    Route::resource('/users', UserController::class);
});*/
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::post('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users-show');
