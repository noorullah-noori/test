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
use App\EventModel;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('ogp',function(){
	return view('ogp');
})->name('ogp');

Route::get('contacts',function(){
	return view('contacts');
})->name('contacts');

Route::get('ogpa',function(){
	return view('ogpa');
})->name('ogpa');

Route::get('working_group',function(){
	return view('working_group');
})->name('working_group');

Route::get('carriers',function(){
	return view('carriers');
})->name('carriers');

Route::get('news',function(){
	return view('news');
})->name('news');
Route::get('news_details',function(){
	return view('news_details');
})->name('news_details');

Route::get('opportunities',function(){
	return view('opportunities');
})->name('opportunities');

Route::get('job_details',function(){
	return view('job_details');
})->name('job_details');

Route::get('themes1',function(){
	return view('themes1');
})->name('themes1');

Route::get('themes_details',function(){
	return view('themes_details');
})->name('themes_details');

Route::get('global_participants',function(){
	return view('global_participants');
})->name('global_participants');

Route::get('national_participants',function(){
	return view('national_participants');
})->name('national_participants');

Route::get('working_groups',function(){
	return view('working_groups');
})->name('working_groups');

Route::get('agendas',function(){
	return view('agendas');
})->name('agendas');

Route::get('meetings',function(){
	return view('meetings');
})->name('meetings');

Route::get('consultation',function(){
	return view('consultation');
})->name('consultation');

Route::get('irm',function(){
	return view('irm');
})->name('irm');

Route::get('action_plan',function(){
	return view('action_plan');
})->name('action_plan');

Route::get('assesment',function(){
	return view('assesment');
})->name('assesment');

Route::get('stories',function(){
	return view('stories');
})->name('stories');

Route::get('story_details',function(){
	return view('story_details');
})->name('story_details');

Route::get('seminars',function(){
	return view('seminars');
})->name('seminars');

Route::get('events',function(){
	return view('events');
})->name('events');

Route::get('sessions',function(){
	return view('sessions');
})->name('sessions');

Route::get('test',function(){
	return view('test');
})->name('test');

// Admin routes

Route::get('admin',function(){
	return view('admin.index');
})->name('admin');


Route::resource('admin/jobs','JobsController');

Route::delete('admin/jobs/{id?}','JobsController@destroy');

Route::resource('admin/news','NewsController');

Route::resource('admin/contacts','ContactsController');

