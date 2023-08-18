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
Route::get('/queries', [QueryController::class, 'one_record'])->name('OneRecord');
Route::get('/queries/regRec', [QueryController::class, 'today_reg_records'])->name('TodayRecord');
Route::get('/queries/year', [QueryController::class, 'year_2022'])->name('Year');
Route::get('/queries/genderFem', [QueryController::class, 'female_gender'])->name('GenderFem');
Route::get('/queries/lastfive', [QueryController::class, 'last_5_user'])->name('LastFive');
Route::get('queries/diff', [QueryController::class, 'diff_users'])->name('DiffUsers');
Route::get('/queries/male1', [QueryController::class, 'male_!'])->name('Male1');
Route::get('/queries/ph-cnic', [QueryController::class, 'ph_cnic_not_null'])->name('PhCnic');
Route::get('/queries/age', [QueryController::class, 'age_2030'])->name('Age');
Route::get('/queries/greater', [QueryController::class, 'greater_18'])->name('Greate');
Route::get('/queries/AvgAge', [QueryController::class, 'avg_age'])->name('AvgAge');
Route::get('/queries/exists', [QueryController::class, 'exist_or_Does_exist'])->name('Exists');
Route::get('/queries/a', [QueryController::class, 'starts_a'])->name('StartsA');
Route::get('/queries/notin', [QueryController::class, 'not_in'])->name('Notin');
Route::get('/queries/groupby', [QueryController::class, 'groupbyy'])->name('Groupby');
Route::get('/queries/age15', [QueryController::class, 'age_15'])->name('AgeFifteen');
Route::get('/queries/req', [QueryController::class, 'req'])->name('Req');
