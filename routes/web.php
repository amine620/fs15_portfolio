<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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

Route::get('laravel', function () {
    return view('welcome');
});

Auth::routes();



Route::get('home', function () {
   return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contacts');


Route::get('/projects', [ProjectController::class, 'Projects'])->name('projects')->middleware('auth');
Route::post('/store', [ProjectController::class, 'store'])->name('store');
Route::get('show/{id}',[ProjectController::class,'details'])->name('show');




///backoffice
Route::group(['middleware' => 'auth'], function () {

    Route::get('addnew',[ProjectController::class, 'addNewProject'])->name('addNewProject') ;
    Route::get('myProjects',[dashboardController::class, 'myProjects'])->name('myProjects');
    Route::delete('deleteProject/{id}',[dashboardController::class, 'deleteProject'])->name('delete');
    Route::get('updateProject/{id}',[dashboardController::class, 'updateProject'])->name('update');
    Route::put('edit/{id}',[dashboardController::class, 'edit'])->name('edit');



    //profile
    Route::get('form',[ProfileController::class,'showInfoInForm'])->name('form');
    Route::PATCH('update',[ProfileController::class,'updateProfile'])->name('update');


    // feedback
    Route::post('feed',[FeedBackController::class,'store'])->name('feed');

});