<?php

use App\Http\Controllers\AllMembersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\SingleProject;
use App\Http\Controllers\AllProjects;
use App\Http\Controllers\CreateMemberController;
use App\Http\Controllers\EditMemberController;
use App\Http\Controllers\EditProject;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\WebsiteInfoController;

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

Route::get('/', [Homepage::class, 'initHomePage'])->name('home');
Route::get('/single-project/{id}', [SingleProject::class, 'initSinglePage']);
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin-dashboard');

//Projects Route
// - Create project
Route::view('/admin/projects/create', 'admin.createproject')->name('admin-create-project');
Route::post('/admin/projects/create', [SingleProject::class, 'addProject'])->name('admin-create-project');
// - All Projects
Route::get('/admin/projects/all', [AllProjects::class, 'init'])->name('admin-all-projects');
// - Admin project search
Route::post('/admin/projects/search', [AllProjects::class, 'asyncSearchProject'])->name('admin-project-search');
// - Edit Project
Route::post('/admin/projects/edit', [EditProject::class, 'editProject'])->name('admin-edit-project');
Route::post('/admin/projects/edit/active_status', [EditProject::class, 'editActiveStatus'])->name('admin-edit-active-status');
Route::get('/admin/projects/edit/{id}', [EditProject::class, 'init'])->name('admin-editproject-view');
// - Delete Project
Route::get('/admin/project/delete/{id}', [AllProjects::class, 'deleteProject'])->name('admin-delete-project');
// - Slideshow
Route::get('/admin/projects/slideshows/{id}', [SlideshowController::class, 'init'])->name('admin-project-slideshow');
Route::post('/admin/projects/slideshows/upload', [SlideshowController::class, 'uploadSlideshowImage'])->name('admin-project-slideshow-upload');
// - Faq
Route::get('/admin/projects/faqs/{id}', [FAQController::class, 'init'])->name('admin-project-faqs');
Route::post('/admin/projects/faqs/upload', [FAQController::class, 'addFAQ'])->name('admin-project-faqs-upload');

//Members route
// - All Members
Route::get('/admin/members/all', [AllMembersController::class, 'init'])->name('admin-all-members');
Route::post('/admin/members/edit/active_status', [EditMemberController::class, 'editActiveStatus'])->name('admin-edit-member-active_status');
// - Create Members
Route::get('/admin/members/create', [CreateMemberController::class, 'init'])->name('admin-create-member');
Route::post('/admin/members/create', [CreateMemberController::class, 'addMember'])->name('admin-creat-member');
// - Edit Members
Route::get('/admin/members/edit/{id}', [EditMemberController::class, 'init'])->name('admin-edit-member-get');
Route::post('/admin/members/edit', [EditMemberController::class, 'editMember'])->name('admin-edit-member');
// - Delete Member
Route::get('/admin/members/delete/{id}', [AllMembersController::class, 'deleteMember'])->name('admin-delete-member');

//Website Info Route
Route::get('/admin/website-info', [WebsiteInfoController::class, 'init'])->name('admin-website-info');
Route::post('/admin/website-info/update', [WebsiteInfoController::class, 'updateWebsiteInfo'])->name('admin-website-info-update');
