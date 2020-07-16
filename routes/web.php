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

//Route::get('/', function () {
//    return view('welcome');
//});




Route::get('/',[
   'uses' =>  'TaskFrontEndController@index',
   'as' => '/'
]);

Route::get('/add-content',[
   'uses' => 'UploadController@addContent',
    'as' => 'add-content'
]);

Route::post('/save-upload',[
   'uses' => 'UploadController@saveContent',
    'as' => 'save-content'
]);

Route::get('/details/{id}',[
   'uses' => 'TaskFrontEndController@watchDetails',
   'as' => 'details'
]);

Route::get('/post_details/{id}',[
    'uses' => 'TaskFrontEndController@postDetails',
    'as' => 'post_details'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage-content',[
    'uses' => 'UploadController@manageContent',
    'as' => 'manage-content'
]);

Route::get('/unpublish/{id}',[
    'uses' => 'UploadController@unpublish',
    'as' => 'unpublish'
]);

Route::get('/publish/{id}',[
    'uses' => 'UploadController@publish',
    'as' => 'publish'
]);

Route::get('/delete-content/{id}',[
    'uses' => 'UploadController@destroy',
    'as'=>'delete-content'
]);
