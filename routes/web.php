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

//Recruiter Login
Route::get('recruiter/login', 'RecruiterAuth\LoginController@showLoginForm');
Route::post('recruiter/login', 'RecruiterAuth\LoginController@login');
Route::post('recruiter/logout', 'RecruiterAuth\LoginController@logout');

//Recruiter Register
Route::get('recruiter/register', 'RecruiterAuth\RegisterController@showRegistrationForm');
Route::post('recruiter/register', 'RecruiterAuth\RegisterController@register');

//Recruiter Passwords
Route::post('recruiter/password/email', 'RecruiterAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('recruiter/password/reset', 'RecruiterAuth\ResetPasswordController@reset');
Route::get('recruiter/password/reset', 'RecruiterAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('recruiter/password/reset/{token}', 'RecruiterAuth\ResetPasswordController@showResetForm');


//Candidate Login
Route::get('candidate/login', 'CandidateAuth\LoginController@showLoginForm');
Route::post('candidate/login', 'CandidateAuth\LoginController@login');
Route::post('candidate/logout', 'CandidateAuth\LoginController@logout');

//Candidate Register
Route::get('candidate/register', 'CandidateAuth\RegisterController@showRegistrationForm');
Route::post('candidate/register', 'CandidateAuth\RegisterController@register');

//Candidate Passwords
Route::post('candidate/password/email', 'CandidateAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('candidate/password/reset', 'CandidateAuth\ResetPasswordController@reset');
Route::get('candidate/password/reset', 'CandidateAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('candidate/password/reset/{token}', 'CandidateAuth\ResetPasswordController@showResetForm');

