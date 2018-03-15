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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::group(['prefix'=>'role','as'=>'role.','middleware' => ['role:administrador']],function(){
  Route::get('/',['uses'=>'RoleController@index'])->name('index');
  Route::post('/',['uses'=>'RoleController@store'])->name('store');
  Route::get('/{id}',['uses'=>'RoleController@show'])->name('show');
  Route::get('/{id}',['uses'=>'RoleController@edit'])->name('edit');
  Route::post('/{id}',['uses'=>'RoleController@update'])->name('update');
  Route::get('/create',['uses'=>'RoleController@create'])->name('create');
});
Route::group(['prefix'=>'user','as'=>'user.','middleware' => ['role:administrador']],function(){
  Route::get('/',['uses'=>'UserController@index'])->name('index');
  Route::post('/',['uses'=>'UserController@store'])->name('store');
  Route::get('/{id}',['uses'=>'UserController@show'])->name('show');
  Route::get('/{id}',['uses'=>'UserController@edit'])->name('edit');
  Route::post('/{id}',['uses'=>'UserController@update'])->name('update');
  Route::get('/create',['uses'=>'UserController@create'])->name('create');
});/*
Route::group(['prefix'=>'student','as'=>'student.'],function(){
  Route::get('/',['uses'=>'StudentController@index'])->name('index');
  Route::post('/',['uses'=>'StudentController@store'])->name('store');
  Route::get('/{id}',['uses'=>'StudentController@show'])->name('show');
  Route::get('/{id}',['uses'=>'StudentController@edit'])->name('edit');
  Route::post('/{id}',['uses'=>'StudentController@update'])->name('update');
  Route::get('/create',['uses'=>'StudentController@create'])->name('create');
});
Route::group(['prefix'=>'course','as'=>'course.'],function(){
  Route::get('/',['uses'=>'CourseController@index'])->name('index');
  Route::post('/',['uses'=>'CourseController@store'])->name('store');
  Route::get('/{id}',['uses'=>'CourseController@show'])->name('show');
  Route::get('/{id}',['uses'=>'CourseController@edit'])->name('edit');
  Route::post('/{id}',['uses'=>'CourseController@update'])->name('update');
  Route::get('/create',['uses'=>'CourseController@create'])->name('create');
});*/
Route::resource('course','CourseController');
//Route::resource('role','RoleController');
Route::resource('student','StudentController');
Route::resource('permission','PermissionController');
Route::resource('group','GroupController');
Route::get('voucher/{userId}/group/{groupId}', [
    'as' => 'voucher.create',
    'uses' => 'VoucherController@create'
]);
Route::post('voucher/{userId}/group/{groupId}', [
    'as' => 'voucher.store',
    'uses' => 'VoucherController@store'
]);
//Route::post('/voucher/create/{groupid}/{userid}','VoucherController@store')->name('voucher.store');
//Route::resource('user','UserController');
Route::post('/userrole/{id}', 'UserController@userrole');
