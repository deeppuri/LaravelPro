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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[
	'uses' =>'HotelsController@index',
	'as'  => 'hotels'
]);
Route::get('/Admin',[
'uses'=>'BackendsController@index',
'as'=> 'Admin'
]);
Route::get('/Admin/All_categories',[
'uses'=>'CategoriesController@index',
'as'=> 'Admin.All_categories'
]);
Route::get('/Admin/Create_categories',[
'uses'=>'CategoriesController@create',
'as'=> 'Admin.Create_categories'
]);
Route::post('/Admin/Store_categories',[
'uses'=>'CategoriesController@store',
'as'=> 'Admin.Store_categories'
]);
Route::get('/Admin/Fetch_categories/{id}',[
'uses'=>'CategoriesController@show',
'as'=>'Admin.Fetch_categories'
]);
Route::post('/Admin/Update_categories/{id}',[
'uses'=>'CategoriesController@update',
'as'=> 'Admin.Update_categories'
]);
Route::get('/Admin/Delete_categories/{id}',[
	'uses'=>'CategoriesController@destroy',
	'as'=>'Admin.Delete_categories'
]);
Route::get('/Admin/Add_testimonials',[
	'uses'=>'TestimonialsController@create',
	'as'=>'Admin.Add_testimonials'
]);
Route::post('/Admin/Create_testimonials',[
	'uses'=>'TestimonialsController@store',
	'as'=>'Admin.Create_testimonials'
]);
Route::get('/Admin/All_testimonials',[
	'uses'=>'TestimonialsController@index',
	'as'=>'Admin.All_testimonials'
]);
Route::get('/Admin/Update_testimonials/{id}',[
	'uses'=>'TestimonialsController@edit',
	'as'=>'Admin.Update_testimonials'
]);
Route::post('/Admin/Edit_testimonials/{id}',[
	'uses'=>'TestimonialsController@update',
	'as'=>'Admin.Edit_testimonials'
]);
Route::get('/Admin/Delete_testimonials/{id}',[
	'uses'=>'TestimonialsController@destroy',
	'as'=>'Admin.Delete_testimonials'
]);
Route::get('/Admin/Add_courses',[
	'uses'=>'CoursesController@create',
	'as'=>'Admin.Add_courses'
]);
Route::post('/Admin/Store_course',[
'uses'=>'CoursesController@store',
'as'=>'Admin.Store_course'
]);
Route::get('/Admin/All_courses',[
	'uses'=>'CoursesController@index',
	'as'=>'Admin.All_courses'
]);
Route::get('/Register',[
	'uses'=>'HotelsusersController@index',
	'as'=>'/Register'
]);
Route::get('/Login',[
	'uses'=>'HotelsusersController@login',
	'as'=>'/Login'
]);
Route::post('/Login',[
	'uses'=>'HotelsusersController@dologin',
	'as'=>'/Login'
]);
Route::post('/store',[
	'uses'=>'HotelsusersController@store',
	'as'=>'/store'
]);
Route::get('/about',[
'uses'=>'FrontpagesController@about',
'as'=>'/about']);
Route::get('/pricing',[
'uses'=>'FrontpagesController@pricing',
'as'=>'/pricing']);
Route::get('/booking',[
'uses'=>'FrontpagesController@booking',
'as'=>'/booking']);
// Route::group(['middleware'=>"web"],function(){

// Route::get('/contact',[
// 'uses'=>'FrontpagesController@contact',
// 'as'=>'/contact']);

// });