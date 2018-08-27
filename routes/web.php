<?php

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
    return redirect('/signin');

});
//Signin controller
Route::get('/signin', 'SigninController@index');
Route::post('/signin', 'SigninController@verify');

//signup controller
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@studentSignup');



//Admin controller
Route::get('/admin/request','AdminController@request'); // request view of admin controller
Route::put('/admin/request/course/{tcid}','AdminController@requestCourseAccept'); // request view of admin controller
Route::delete('/admin/request/course/{tcid}','AdminController@requestCourseDelete'); // request view of admin controller
Route::delete('/admin/request/drop/{tcid}','AdminController@requestDropAccept'); // request view of admin controller
Route::put('/admin/request/drop/{tcid}','AdminController@requestDropDelete'); // request view of admin controller

Route::get('/admin/academic','AdminController@academic');
Route::put('/admin/academic/assign','AdminController@academicAssign');
Route::put('/admin/academic/remove/{cid}','AdminController@academicRemove');
Route::get('/admin/academic/createCourse','AdminController@academicCreateCourse');
Route::post('/admin/academic/createCourse','AdminController@academicCourseCreated');
Route::get('/admin/academic/createTeacher','AdminController@academicCreateTeacher');
Route::post('/admin/academic/createTeacher','AdminController@academicTeacherCreated');

Route::get('/admin/block','AdminController@block');
Route::put('/admin/block/unblock/{uid}','AdminController@blockUnblock');
Route::put('/admin/block/block','AdminController@blockBlock');



//Teacher  controller
Route::get('/teacherHome','TeacherController@index');
Route::get('/teacherProfile','TeacherController@showProfile');//render show teacher profile view
Route::get('/editTeacherProfile','TeacherController@ShowEditTeacherProfile'); //render edit teacher profile view
Route::post('/editTeacherProfile','TeacherController@editTeacherProfile'); // edit teacher profile and store in database
Route::get('/changePassword','TeacherController@showChangePassword'); //render change password view
Route::post('/changePassword','TeacherController@changePassword'); // change password and store




//Route::resource('user', 'UserController');
