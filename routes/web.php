<?php

use App\Models\Forum;
use App\Models\course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaUserController;
use App\Http\Controllers\PenggunaAdminController;
use App\Http\Controllers\DashboardForumController;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Controllers\DashboardCoursesController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Controllers\DashboardKuisTopikController;
use App\Http\Controllers\DashboardFileCoursesController;
use App\Http\Controllers\TopikController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ForumPostinganController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\Exam\QuizController;
use App\Http\Controllers\BuatForumController;
use App\Http\Controllers\KomentarForumController;

use App\Http\Controllers\HomeController;


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
    Route::get('/kuis2', function () {
        return view('kuis.kuis2', [
            "tittle" => "Quiz"
            ]);
        });
        Route::get('/kuis3', function () {
            return view('kuis.kuis3', [
                "tittle" => "Quiz"
                ]);
            });
            Route::get('/kuis4', function () {
                return view('kuis.kuis4', [
                    "tittle" => "Quiz"
                    ]);
                });
                Route::get('/soalkuis', function () {
                    return view('kuis.soalkuis', [
                        "tittle" => "Quiz"
                        ]);
                    });

Route::get('/file', [FileController::class, 'index']);
Route::get('/download{file}', [FileController::class, 'download']);
//halaman single course
Route::get('courses/{course:slug}', [CourseController::class, 'show']);

// Route::get('/topik', function () {
//     return view('kuis.index', [
//         "title" => "Quiz"
//     ]);
// });

Route::resource('/topik', TopikController::class);

Route::get('/kuis', function () {
    return view('kuis.kuis', [
        "title" => "Quiz"
    ]);
});

Route::get('/forum', function () {
    return view('forum.index', [
        "title" => "Forum"
    ]);
});

Route::get('/forum', function () {
    return view('forum.index', [
        "tittle" => "Forum"
    ]);
});

    // Route::get('/forumpostingan', function () {
    //     return view('forumpostingan', [
    //         "tittle" => "forumpostingan"
    //         ]);
    //     });

Route::get('/komens', function () {
    return view('komens', [
        "title" => "Forum",
        "forums" => forum::all()
    ]);
});
Route::get('komen/{course:slug}', [ForumController::class, 'show']);


Route::get('/awal', function () {
    return view('awal', [
        "tittle" => "awal"
        ]);
    });



Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'authenticate'])->name('login');

Route::get('/register', [RegisterController::class,'index'])->name('register');

Route::get('/cover', [CoverController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/awal', [AwalController::class,'index']);
Route::get('/kontak', [KontakController::class,'index']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/dashboard/courses/checkSlug', [DashboardCoursesController::class, 'checkSlug']);
// Route::get('/dashboard/filecourses/view{id}',[ DashboardCoursesController::class, 'view']);
Route::resource('/dashboard/informasi', InformasiController::class);

Route::resource('/dashboard/courses', DashboardCoursesController::class);
Route::resource('/dashboard/filecourses', DashboardFileCoursesController::class);
// Route::get('/dashboard/filecourses/view{id}',[ DashboardCoursesController::class, 'view']);

Route::resource('/forumpostingan', ForumPostinganController::class);
Route::resource('/dashboard/forum', DashboardForumController::class);
Route::resource('/dashboard/pengguna/admin', PenggunaAdminController::class);

Route::resource('/dashboard/pengguna/user', PenggunaUserController::class);

Route::resource('forum', BuatForumController::class);
// Route::get('forum', [ForumController::class,'index']);
// Route::post('addforum', [ForumController::class, 'addforum']);

Route::get('kontak', [KontakController::class,'index']);
Route::post('add', [KontakController::class, 'add']);


Route::post('addkomenforum', [KomentarForumController::class, 'addkomenforum']);

Route::resource('/dashboard/pesan', PesanController::class);
Route::resource('/dashboard/kuis/topik', DashboardKuisTopikController::class);

// //foruser
// Route::middleware(['auth:sanctum','verified'])->group(function(){
//     Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
// });



// //foradmin
// Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
//     Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

// });


Route::get('/dashboard/filecourses/create',[DashboardFileCoursesController::class,'create']);
Route::post('/dashboard/filecourses',[DashboardFileCoursesController::class,'store']);
Route::post('/dashboard/filecourses',[DashboardFileCoursesController::class,'store']);
Route::get('/dashboard/filecourses/{id}',[DashboardFileCoursesController::class,'show']);
Route::get('/file/{id}',[FileController::class,'show']);
Route::post('/file',[FileController::class,'store']);
Route::get('/file/download/{file}',[FileController::class,'download']);

Route::post('/dashboard/filecourses/download/{file}',[DashboardFileCoursesController::class,'download']);



Route::get('/home', [HomeController::class,'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
