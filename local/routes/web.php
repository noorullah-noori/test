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
use App\JOB;
use App\News;
use App\Agendas;
use App\Meetings;
use App\Resources;
use App\NationalParticipants;
use App\Stories;

Route::group(['middleware' => ['change_lang']],function(){

Route::get('/', function () {
	$job = JOB::take(5)->get();
    $news = News::take(5)->get();
    return view('index')->with(array('news'=>$news,'job'=>$job));
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
	$news = News::paginate(4);
	return view('news')->with('news',$news);
})->name('news');

Route::get('news_details/{id?}',function($id){
	$news_details = News::findOrFail($id);
	return view('news_details')->with('news_details',$news_details);
})->name('news_details');

Route::get('opportunities',function(){
	$opportunities = JOB::all();
	return view('opportunities')->with('opportunities',$opportunities);
})->name('opportunities');

Route::get('job_details/{id?}',function($id){
	$job = JOB::findOrFail($id);
	return view('job_details')->with('job',$job);
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
	$national_participants=DB::table('national_participants')->where('type','gov')->paginate(3);
	return view('national_participants')->with('national_participants',$national_participants);
})->name('national_participants');
Route::get('cso',function(){
	$cso=DB::table('national_participants')->where('type','cso')->paginate(3);
	return view('cso')->with('cso',$cso);
})->name('cso');
Route::get('priv',function(){
	$priv=DB::table('national_participants')->where('type','priv')->paginate(3);
	return view('priv')->with('priv',$priv);
})->name('priv');

Route::get('working_groups',function(){
	return view('working_groups');
})->name('working_groups');

Route::get('agendas',function(){
	$agendas = Agendas::paginate(2);
	return view('agendas')->with('agendas',$agendas);
})->name('agendas');

Route::get('meetings',function(){
	$meetings = Meetings::paginate(1);
	return view('meetings')->with('meetings',$meetings);
})->name('meetings');

Route::get('view_meetings/{id?}',function($id){
	$view_meetings = Meetings::findOrFail($id);
	return $view_meetings;
});

Route::get('consultation',function(){
	$consultation=DB::table('resources')->where('type','cp')->paginate(1);
	return view('consultation')->with('consultation',$consultation);
})->name('consultation');

Route::get('irm',function(){
	$irm=DB::table('resources')->where('type','irm')->paginate(1);
	return view('irm')->with('irm',$irm);
})->name('irm');

Route::get('action_plan',function(){
	$action_plan=DB::table('resources')->where('type','nap')->paginate(1);
	return view('action_plan')->with('action_plan',$action_plan);
})->name('action_plan');



Route::get('assessment',function(){
	$assessment = DB::table('resources')->where('type','sar')->paginate(1);
	return view('assessment')->with('assessment',$assessment);
})->name('assessment');

Route::get('stories',function(){
	$stories=Stories::all();
	$story = DB::table('stories')->orderBy('id', 'desc')->first();
	return view('stories')->with(['stories'=>$stories,'story'=>$story]);
})->name('stories');

Route::get('story_details/{id?}',function($id){
	$story_details = Stories::findOrFail($id);
	return view('story_details')->with('story_details',$story_details);
})->name('story_details');

Route::get('seminars',function(){
	$seminars = DB::table('events')->where('type','seminar')->paginate(1);
	return view('seminars')->with('seminars',$seminars);
})->name('seminars');

Route::get('events',function(){
	$events = DB::table('events')->where('type','event')->paginate(1);
	return view('events')->with('events',$events);
})->name('events');

Route::get('sessions',function(){
	$sessions = DB::table('meetings')->where('type','session')->paginate(1);
	return view('sessions')->with('sessions',$sessions);
})->name('sessions');

Route::get('forum_meetings',function(){
	return view('forum_meetings');
})->name('forum_meetings');

Route::get('test',function(){
	return view('test');
})->name('test');

Route::post('/language-chooser','LanguageController@changeLanguage');



Route::get('language',[
	'before' => 'csrf',
	'as'	 => 'language-chooser',
	'uses'	 => 'LanguageController@changeLanguage',
	 
	 ]);

});

Route::get('get_participant/{id?}',function($id){
    $participant = NationalParticipants::findOrFail($id);
    return $participant;
});
Route::get('get_agendas/{id?}',function($id){
    $agendas = Agendas::findOrFail($id);
    return $agendas;
});

// Admin routes
Route::group(['middleware' => ['chk_usr']],function(){

Route::get('admin',function(){
	return view('admin.index');
})->name('admin');

Route::resource('admin/jobs','JobsController');

Route::delete('admin/jobs/{id?}','JobsController@destroy');

Route::resource('admin/news','NewsController');

Route::resource('admin/contacts','ContactsController');

Route::resource('admin/stories','StoriesController');

Route::resource('admin/messages','MessagesController');

Route::resource('admin/resources','ResourcesController');

Route::resource('admin/agendas','AgendasController');

Route::resource('admin/meetings','MeetingsController');

Route::resource('admin/national_participants','NationalParticipantsController');

Route::resource('admin/events','EventsController');

Route::get('register',function(){
	return view('admin.register');
})->name('register');

});
//finish admin routes



Route::get('login',function(){
	return view('auth.login');
})->name('login');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::get('delete_user','Auth\LoginController@delete_user')->name('delete_user');
Route::get('edit_user/{$id}','Auth\LoginController@edit_user')->name('edit_user');
Route::get('users','Auth\LoginController@users')->name('users');
