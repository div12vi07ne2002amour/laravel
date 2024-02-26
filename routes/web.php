<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdministrateurController;
use Illuminate\Http\RedirectResponse;
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

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('liste.etudiant');
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/admin', [AdministrateurController::class, 'admin_administrateur']);
Route::post('/admin/traitement', [AdministrateurController::class, 'administrateur_admin_traitement']);
Route::get('/login', [AdministrateurController::class, 'showLoginForm'])->name('admin.login');
Route::post('Admin/login', [AdministrateurController::class, 'login_submint'])->name('admin.login.submit');
Route::middleware('auth:admin')->group(function(){
Route::get('/admin/etudiant', [EtudiantController::class, 'index'])->name('admin.etudiant');
});

/**Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */