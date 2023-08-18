<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QueryController;
use App\Models\User;

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
    return view('welcome');
});

Route::post('/submit-form', [UserController::class, 'store']);

Route::get('/users', [UserController::class, 'total_users'])->name('totalUsers');

Route::delete('/users/{id}', [UserController::class, 'delete'])->name('Userdelete');
Route::patch('/users/{id}/restore', [UserController::class, 'restore'])->name('Userrestore');


// Queries routes
Route::get('/queries', [QueryController::class, 'groupbyy'])->name('OneRecord');
//Route::get('/queries', [QueryController::class, 'today_reg_records'])->name('TodayRecord');