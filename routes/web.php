<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\TeacherController;
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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'AuthController@showRegister')->name('register.show');
        Route::post('/register', 'AuthController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'AuthController@showLogin')->name('login.show');
        Route::post('/login', 'AuthController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/', function () {
            return redirect(route('home.index'));
        });
        Route::get('/dashboard', 'HomeController@index')->name('home.index');
        
        Route::get('/logout', 'AuthController@logout')->name('logout.perform');

        // LEVELS
        Route::group(['prefix' => 'levels', 'as' => 'levels.'], function () {
            Route::get('', [LevelController::class, 'index'])->name('index');
            Route::post('', [LevelController::class, 'store'])->name('store');
            Route::get('get', [LevelController::class, 'get'])->name('get');
            Route::post('destroy', [LevelController::class, 'destroy'])->name('destroy');
            Route::get('getCount', [LevelController::class, 'getCount'])->name('getCount');
            Route::get('{level}', [LevelController::class, 'getDetail'])->name('getDetail');
            Route::post('{level}', [LevelController::class, 'update'])->name('update');
        });

        // TEACHERS
        Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function () {
            Route::get('', [TeacherController::class, 'index'])->name('index');
            Route::post('', [TeacherController::class, 'store'])->name('store');
            Route::get('get', [TeacherController::class, 'get'])->name('get');
            // Route::post('destroy', [LevelController::class, 'destroy'])->name('destroy');
            Route::get('getCount', [TeacherController::class, 'getCount'])->name('getCount');
            Route::get('{teacher}', [TeacherController::class, 'getDetail'])->name('getDetail');
            Route::post('{teacher}', [TeacherController::class, 'update'])->name('update');
        });
    });
});
