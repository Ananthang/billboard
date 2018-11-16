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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('doctor/home',"DoctorController@Index")->name('doctor');


Route::GET('doctor',"Doctor\LoginController@showLoginForm")->name('doctor.login');
Route::GET('docregi', "Doctor\RegisterController@showRegistrationForm")->name('doctor.register');
Route::POST('doctor',"Doctor\LoginController@login")->name('doctor.login');
Route::POST('docregi', "Doctor\RegisterController@register");
Route::POST('doctor-password/email',"Doctor\ForgotPasswordController@sendResetLinkEmail")->name('doctor.password.email');
Route::GET('doctor-password/reset',"Doctor\ForgotPasswordController@showLinkRequestForm")->name('doctor.password.request');
Route::POST('doctor-password/reset',"Doctor\ForgotPasswordController@reset");
Route::GET('doctor-password/reset/{token}',"Doctor\ResetPasswordController@showResetForm")->name('doctor.password.reset');



//Search
Route::GET('pharmacist',"PharmacistController@index")->name('phama');
Route::GET('receptionist',"ReceptionistController@index")->name('phama');

//Route::Post('Search/user','SearchController@userSearch');


Route::resource('recep/student', 'StudentController');
Route::resource('recep/staff', 'StaffController');

Route::GET('recep/phama', 'SearchController@register')->name('phamaregister');


Route::GET('search/student', 'SearchController@searchStudent')->name("studentsearch");
Route::GET('search/staff', 'SearchController@searchStaff')->name("staffsearch");

Route::post('appiontment', 'SearchController@userSearch');


Route::POST('medicine/edit', 'PharmacistController@updateMedicine');
Route::POST('medicine/update', 'PharmacistController@updateMedicineInDatabase');
Route::POST('medicine/delete', 'PharmacistController@DeleteMedicineInDatabase');
Route::POST('perscription', 'PharmacistController@getperscriptionStudent')->name('getperscrip');
Route::POST('phamaregister', 'PharmacistController@getperscriptionStaff')->name('getperscrip');
Route::POST('student/perscription', 'PharmacistController@PostperscriptionStudent')->name('getperscrip');

Route::POST('medicine', 'PharmacistController@medicineAdd');




Route::post('doctor/student/{  $id }', function(){
    return 'hi';
});