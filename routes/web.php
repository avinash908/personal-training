<?php

use App\Mail\GuideMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

Auth::routes(['verify'=>true]);


Route::middleware(['verified','auth','admin_or_employe'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/settings', 'HomeController@settings')->name('settings');
	Route::resource('users', 'UserController');
	Route::resource('experties', 'ExpertiesController');
	Route::resource('languages', 'LanguageController');
	Route::resource('locations', 'LocationController');

	Route::post('change_email','UserController@change_email');
});

Route::resource('posts','PostController');
Route::resource('videos','VideoController');


Route::get('/', 'ViewController@index');
Route::get('/blog', 'ViewController@blog');
Route::get('/contact', 'ViewController@contact');
Route::get('/trainers', 'ViewController@get_trainers');
Route::get('/guidance', 'ViewController@guidance');
Route::get('/become_coach', 'ViewController@become_pro_coach');
Route::get('/change-password', 'ViewController@change_password');
Route::get('/{slug}', 'ViewController@profile');
Route::get('article/{slug}', 'ViewController@article');
Route::get('edit_profile/{slug}', 'ViewController@profile_edit');


Route::post('UpdateProfile', 'ViewController@update_profile');
Route::post('Review/{user}', 'CommentController@review_store');
Route::post('Comment/{post}', 'CommentController@article_store');

Route::post('change_password','UserController@change_pswd')->middleware('auth');

Route::post('/guide_me', function(Request $request){
	Mail::send(new GuideMail($request));
	return response()->json(['title'=>'Thank you for submit!','message'=>'We will get back to you ASAP...']);
});
Route::post('/contactus', function(ContactFormRequest $request){
	Mail::send(new ContactMail($request));
	return response()->json(['title'=>'Thank you for contacting us!','message'=>'We will reply you ASAP...']);
});