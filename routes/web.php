<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['namespace' => 'Student', 'prefix' => 'student','middleware' => ['student','auth']],function (){
    Route::get('/dashboard', 'HomeController@index')->name('studentDashboard');
    Route::resource('results','ResultController');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin' , 'middleware' => ['admin','auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('adminDashboard');
    Route::resource('student','StudentController');
    Route::resource('teacher','TeacherController');
    Route::resource('batch','BatchController');
    Route::resource('semester','SemesterController');
    Route::resource('grade', 'GradeController');
    Route::resource('result','ResultController');
    Route::resource('department','DepartmentController');
    Route::resource('course','CourseController');
    Route::resource('exam','ExamController');
});
