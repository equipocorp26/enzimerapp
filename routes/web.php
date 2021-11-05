<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
/* AUTH */
/* Auth::routes(); NO borrar hasta terminar de pasasr todas las auths*/
/* Inicio de sesion */
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login']);
/* Recuperar contraseña */
Route::get('/password/reset',[ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
/* Cerrar sesion */
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
/* Registro paso 1 */
Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/register',[UserController::class,'register'])->name('register.store');
/* MIDDLEWARE AUTH */
Route::middleware(['auth'])->group(function () {
    /* Registro paso 2 */
    Route::get('/register/university',[UserController::class,'showRegistrationForm2'])->name('register.university');
    Route::post('/register/university',[UserController::class,'registerUniversity'])->name('register.university.store');
    /* Registro paso 3 */
    Route::get('/register/career',[UserController::class,'showRegistrationForm3'])->name('register.career');
    Route::post('/register/career',[UserController::class,'registerCareer'])->name('register.career.store');
    /* Panel principal */
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
    /* Planes */
    Route::get('/plans',[PlanController::class,'index'])->name('plans.index');
    /* Question */
    Route::get('/questions',[QuestionController::class,'index'])->name('questions.index');
    /* Cards */
    Route::get('/cards',[CardController::class,'index'])->name('cards.index');
    /* Flashs cards */
    Route::get('/flashcards',[FlashcardController::class,'index'])->name('flashcards.index');
    Route::get('/flashcards/show',[FlashcardController::class,'show'])->name('flashcards.show');
    Route::get('/flashcards/finish',[FlashcardController::class,'finish'])->name('flashcards.finish');
    /* Pruebas */
    Route::get('/tests',[TestController::class,'index'])->name('tests.index');
    /* Perfil de usuario */
    Route::get('/profile',[UserController::class,'profile'])->name('users.profile');
    Route::post('/profile',[UserController::class,'profileUpdate'])->name('users.profile.update');
    Route::post('/profile/password',[UserController::class,'passwordUpdate'])->name('users.password.update');
});


Route::middleware(['auth'])->group(function () {
    /* Registro paso 2 */
    Route::get('/admin/login/users_admin', [UserController::class, 'login_admin'])->name('admin.login');
    Route::get('/admin/universitys',[UniversityController::class,'index'])->name('admin.universitys');
});
