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
    return view('HumChaleViews.index');
});


Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::get('/gallery', function () {
    return view('layouts.gallery');
});


Route::get('/about', function () {
    return view('layouts.about');
});


Route::get('/home', function () {
    return view('HumChaleViews.home');
});

Route::get('/UserProfile','Humchale\HumchaleUserController@userProfile');


Route::get('/addvehicle','Humchale\HumchaleVehicleManagementController@addVehicleView');
Route::post('/humchaleAddVehicle',"Humchale\HumchaleVehicleManagementController@addVehicle");
Route::post('/vehicleListDataGet',"Humchale\HumchaleVehicleManagementController@viewVehicleList");
Route::post('/vehicleDetailedData',"Humchale\HumchaleVehicleManagementController@viewVehicleDetails");



Route::get('/showvehicle', function () {
    return view('ManageUser.showvehicle');
});

Route::get('/header', function () {
    return view('HumChaleViews.header_of_all_forms');
});

/*Route::get('/footer', function () {
    return view('HumChaleViews.footer');
});*/


Route::get('/footer', function () {
    return view('HumChaleViews.footer_of_all_forms');
});
//temporary url for getting all data using REST API
Route::get('/allData','Humchale\HumchaleController@getData');


Route::post('/sendOTPMail','Humchale\HumchaleController@sendMail');
Route::post('/humchaleRegister','Humchale\HumchaleController@registration');
Route::post('/humchaleLogin','Humchale\HumchaleController@login');
Route::get('/humchaleLogout','Humchale\HumchaleController@logout');


//User profile Manage URL Starts here
Route::post('/userProfileUpdate','Humchale\HumchaleUserController@updateProfile');
Route::post('/userProfileGetDataForUpdate','Humchale\HumchaleUserController@getProfileData');



//Trips URL Starts here
Route::get('/addTrips','Humchale\HumchaleUserController@addTrips');
Route::get('/tempMap',function (){
    return view('ManageUser.tempMap');
});

Route::get('/error',function (){
    return view('HumChaleViews.errorPage');
});

Route::get('/otp',function (){
    return view('HumChaleViews.OTPMailDesign');
});