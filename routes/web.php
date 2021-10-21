<?php

use App\Models\course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaAdminController;
use App\Http\Controllers\DashboardCoursesController;
use App\Http\Controllers\PenggunaUserController;

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

    return view('cover.index', [
        "tittle" => "Cover"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
         "tittle" => "kontak"
        ]);
     });

     Route::get('/dashboard', function () {
        return view('dashboard', [
             "tittle" => "dashboard"
            ]);
         });
Route::get('/kursus', function () {
    return view('kursus', [
        "tittle" => "Course"
    ]);
});

Route::get('/kuis', function () {
    return view('kuis', [
        "tittle" => "Quiz"
        ]);
    });

Route::get('/courses', [CourseController::class, 'index']);
//halaman single course
Route::get('courses/{course:slug}', [CourseController::class, 'show']);

Route::get('/kuis', function () {
    return view('kuis', [
        "title" => "Quiz"
    ]);
});

Route::get('/forum', function () {
    return view('forum', [
        "title" => "Forum"
    ]);
});

Route::get('/forum', function () {
    return view('forum', [
        "tittle" => "Forum"
    ]);
});

    Route::get('/forumpostingan', function () {
        return view('forumpostingan', [
            "tittle" => "forumpostingan"
            ]);
        });



Route::get('/awal', function () {
    return view('awal', [
        "tittle" => "awal"
        ]);
    });


Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/register', [RegisterController::class,'index']);
Route::get('/cover', [CoverController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/awal', [AwalController::class,'index']);
Route::get('/kontak', [KontakController::class,'index']);

Route::get('/dashboard', [DashboardController::class,'index']);

Route::resource('/dashboard/courses', DashboardCoursesController::class);

Route::resource('/dashboard/pengguna/admin', PenggunaAdminController::class);

Route::resource('/dashboard/pengguna/user', PenggunaUserController::class);


