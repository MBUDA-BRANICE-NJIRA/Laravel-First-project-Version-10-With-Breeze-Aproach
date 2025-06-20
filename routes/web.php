<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;//Import EventController
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
//Home Controller
Route::get('/', function () {
    return view('Home');
});
// Route::get('/', [HomeController::class, 'index']);

//About Controller
Route::get('/About', function () {
    return view('About');
});
// Route::get('/About', [AboutController::class, 'index']);//About

//Contact Controller
Route::get('/Contact', function () {
    return view('Contact');
});
// Route::get('/Contact', [ContactController::class, 'index']);//ContactUs

//Services Controller
Route::get('/Services', function () {
    return view('Services');
});
// Route::get('/Services', [ServicesController::class, 'index']);//Services

//Portfolio Controller
Route::get('/Portfolio', function () {
    return view('Portfolio');
});
// Route::get('/Portfolio', [PortfolioController::class, 'index']);//Portffolio

//Testimonial Controller
Route::get('/Testimonial', function () {
    return view('Testimonial');
});
// Route::get('/Testimonial', [TestimonialController::class, 'index']);//Testimonial

//Events Controller
Route::get('/Events', [EventController::class, 'index']);//Events


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


