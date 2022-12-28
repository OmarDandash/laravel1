<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\CourseController;
use App\Http\controllers\SkillsUserController;
use App\Http\Controllers\UserController;
use app\Http\Controllers\UrlController;
use App\Models\url;
use Illuminate\Support\Facades\Http;

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
    return view('auth.login');
});


Auth::routes();
//Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('technologie',TechnologyController::class);

Route::resource('cours',CourseController::class);
Route::get('/InvoicesDetails/{id}', [TechnologyController::class , 'edt']);
Route::get('/Inv/{id}', [CourseController::class , 'edt123']);

Route::middleware(['auth'])->group(function()
{
 
    Route::get('profileqw',[UserController::class,'index']);
    Route::post('profileqw',[UserController::class,'updateProfile']);           

}
);
Route::get('/SkillsUsers',[SkillsUserController::class,'index']);
//Route::get('urvlSession',[UrlController::class,'index']);
Route::resource("omerer",App\Http\Controllers\UrlController::class);

Route::get('/{page}', [AdminController::class ,'index']);


