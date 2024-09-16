<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\CalendarController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\EventController;

use App\Http\Controllers\FrontendController;
use App\Https\Controller\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isAdmin;

use App\Models\User;
use App\Models\Calendar;
use App\Models\News;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
get = form post = hide info
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|  auth.login
*/

// Frontend
// Route::get('/', function () {
//     return view('frontend.index');
// })->name('main');

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::get('/news', [FrontendController::class, 'news'])->name('news');

Route::get('show/{id}', [FrontendController::class, 'show'])->name('show');

Route::get('contact', function () {
    return view('frontend.contact');
})->name('contact');

// Backend
Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/dashboard', function () {
    $employee = User::all();
    $event = Event::all();
    $news = News::all();
    return view('/dashboard', compact('employee', 'event', 'news'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('index', [EmployeeController::class, 'index'])->name('index'); // Display list of Users
        Route::get('add', [EmployeeController::class, 'add'])->name('add'); // Form to create a new User
        Route::get('edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
        Route::post('insert', [EmployeeController::class, 'insert'])->name('insert'); // Handle new User creation
        Route::post('update/{id}', [EmployeeController::class, 'update'])->name('update');
        Route::get('delete/{id}', [EmployeeController::class, 'delete'])->name('delete');
    });

    Route::prefix('calendar')->name('calendar.')->group(function () {
        Route::get('index', [CalendarController::class, 'index'])->name('index');
    });

    Route::prefix('news')->name('news.')->group(function () {
        Route::get('index', [NewsController::class, 'index'])->name('index');
        Route::get('add', [NewsController::class, 'add'])->name('add');
        Route::get('edit/{id}', [NewsController::class, 'edit'])->name('edit');
        Route::post('insert', [NewsController::class, 'insert'])->name('insert');
        Route::post('update/{id}', [NewsController::class, 'update'])->name('update');
        Route::get('delete/{id}', [NewsController::class, 'delete'])->name('delete');
    });

    Route::prefix('event')->name('event.')->group(function () {
        Route::get('index', [EventController::class, 'index'])->name('index');
        Route::get('add', [EventController::class, 'add'])->name('add');
        Route::get('edit/{id}', [EventController::class, 'edit'])->name('edit');
        Route::post('insert', [EventController::class, 'insert'])->name('insert');
        Route::post('update/{id}', [EventController::class, 'update'])->name('update');
        Route::get('delete/{id}', [EventController::class, 'delete'])->name('delete');
    });
});
