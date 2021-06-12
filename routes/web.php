<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\SingleProject;
use App\Http\Controllers\AllProjects;
use App\Http\Controllers\EditProject;

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
Route::get('/admin/projects/all', [AllProjects::class, 'init'])->name('admin-all-projects');
Route::post('/admin/projects/edit', [EditProject::class, 'editProject'])->name('admin-edit-project');
Route::post('/admin/projects/edit/active_status', [EditProject::class, 'editActiveStatus'])->name('admin-edit-active-status');
Route::get('/admin/projects/edit/{id}', [EditProject::class, 'init'])->name('admin-editproject-view');
Route::get('/admin/project/delete/{id}', [AllProjects::class, 'deleteProject'])->name('admin-delete-project');
