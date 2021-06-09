<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\SingleProject;

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

Route::get('/', [Homepage::class, 'initHomePage']);
Route::get('/single-project/{id}', [SingleProject::class, 'initSinglePage']);
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin-dashboard');
Route::view('/admin/projects/create', 'admin.createproject')->name('admin-create-project');
Route::post('/admin/projects/create', [SingleProject::class, 'addProject'])->name('admin-create-project');
Route::view('/admin/projects/all', 'admin.allprojects')->name('admin-all-projects');