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
    return view('blood.main');
});
Route::get('donor/list', [
    'uses' =>'SearchController@search',
    'as'=> 'donor-search'
]);

Route::get('/donorprofile',[
    'uses' => 'ProfileController@profile',
    'as' => 'donor-profile'
]);


Route::get('/updateprofile',function()
{  return view('blood.update.update');
});

Route::get('/name', 'ProfileController@editName')->name('cname');
Route::get('/phone', 'ProfileController@editPhone')->name('cphone');
Route::get('/loc', 'ProfileController@editLocation')->name('cloc');
Route::get('/bldgrp', 'ProfileController@editBlood')->name('cblood');
Route::get('/date','ProfileController@editprofile')->name('cdate');


Route::post('/upda2','ProfileController@ChangePhone')->name('upphone');
Route::post('/upd3','ProfileController@ChangeLocation')->name('uploc');
Route::post('/up','ProfileController@ChangeBloodGroup')->name('upBlood');
Route::post('/update','ProfileController@ChangelastDonation')->name('upDate');
//forgot password
Route::match(['get','post'],'forgot-password','ProfileController@ForgotPassword');


Route::get('/changePassword','HomeController@showChangePasswordForm')->name('chngpass');
//Route::post('/changePassword','HomeController@ChangePass')->name('changePassword');
Route::post('/changePassword','HomeController@PasswordChange')->name('changePassword');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
