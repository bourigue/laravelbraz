<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\Agricultures;
use App\Http\Livewire\Data;
use App\Http\Livewire\EditorDashboard;
use App\Http\Livewire\Employes;
use App\Http\Livewire\Intervention;
use App\Http\Livewire\Question;

use App\Http\Livewire\Parcelles;
use App\Http\Livewire\Tarifs;
use App\Http\Livewire\Users;
use App\Http\Livewire\ViewerDashboard;

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

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {


    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

    Route::group(['middleware' => 'checkRole:admin'], function () {
        Route::get('/adminDashboard', AdminDashboard::class)->name('adminDashboard');
        //Route::get('/admin/users', Users::class)->name('users');
    });
    Route::group(['middleware' => 'checkRole:admin|checkRole:editor|checkRole:viewer'], function () {
        Route::get('/agriculteur', Agricultures::class)->name('agriculteur');
        Route::get('/employe', Employes::class)->name('employe');
        Route::get('/parcelles', Parcelles::class)->name('parcelles');
        Route::get('/tarifs', Tarifs::class)->name('tarifs');
        Route::get('/intervention', Intervention::class)->name('intervention');
        Route::get('/question', Question::class)->name('question');

      // Route::get('/data', Data::class)->name('data');
    });
    Route::group(['middleware' => 'checkRole:editor'], function () {
        Route::get('/editorDashboard', EditorDashboard::class)->name('editorDashboard');
    });
    Route::group(['middleware' => 'checkRole:viewer'], function () {
        Route::get('/viewerDashboard', ViewerDashboard::class)->name('viewerDashboard');
    });
});
