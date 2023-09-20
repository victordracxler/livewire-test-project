<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AddUser;
use App\Livewire\Company;
use App\Livewire\UserCompany;
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
    return view('welcome');
});

Route::get('/showcompany', Company::class)->name('showcompany'); //página

Route::get('/companies', [Company::class, 'store']); //requisição

Route::get('/adduser', AddUser::class)->name('user.add.page'); //página
Route::post('/adduser',[AddUser::class, 'addNewUser'])->name('user.add.store');//requisição

Route::get('/usercompany', UserCompany::class)->name('usercompany.page');//página


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
