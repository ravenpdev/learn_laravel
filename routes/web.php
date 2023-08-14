<?php

use App\Http\Controllers\PostController;
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
})->name('root');

Route::view('about', 'about', ['title' => 'About Page']);

Route::resource('posts', PostController::class);

// This is what Route::resource generate
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::patch('/posts/{post}', [PostController::class, 'update']);

// Route::get('about', function () {
//     return view('about');
// })->name('about');
//
// Route::get('contact', function () {
//     return "Contact page!";
//     // return redirect('about');
// });
//
// Route::permanentRedirect('about', 'contact');
//
// // Route::redirect('about', 'contact', 301);
//
// Route::fallback(function () {
//     return view('404');
// });
//
// Route::middleware('auth')->group(function () {
//     Route::get('dashboard', function () {
//         return "Dashboard";
//     });
// });
//
// Route::prefix('admin')->group(function () {
//     Route::get('about', function () { return "About"; });
//     Route::get('contact', function () { return "Contact"; });
//     Route::get('settings', function () { return "Settings"; });
// });

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/about/{username}/{age}', function ($username, $age) {
//     return view('about', ['username' => $username, 'age' => $age]);
// });
