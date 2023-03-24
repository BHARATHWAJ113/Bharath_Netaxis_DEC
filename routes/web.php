<?php
// DB::listen(function ($query) {var_dump($query->sql, $query->bindings);});

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/b', function () {
    return ('<h1>Welcome Mr. Bharath</h1>');
});

/*------------------------------------------------------------------Project CV Start------------------------------------------------------------------ */
Route::get('/cv', function () {
    return view('cv_project.cv_home');
});
Route::get('/intro', function () {
    return view('cv_project.cv_intro');
});
Route::get('/about', function () {

    return view('cv_project.cv_about', [
        'cv_model2s' => App\cvModel2::latest()->get()
    ]);
});
Route::get('/service', function () {
    return view('cv_project.cv_service');
});
Route::get('/team', function () {
    return view('cv_project.cv_team');
});
Route::get('/works', function () {
    return view('cv_project.cv_work');
});
Route::get('/contact', function () {
    return view('cv_project.cv_contact');
});

/*------------------------------------------------------------------Project CV Controller------------------------------------------------------------------ */
Route::post('/contact', 'ContactController@store')->name('contact');

/*------------------------------------------------------------------Project CV End------------------------------------------------------------------ */


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/{post}', 'PostsController@show')->name('posts');






Route::middleware(['auth'])->group(function () {

    Route::get('/tweety', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store')->name('tweets');
    
    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store')->name('tweetslike');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy')->name('tweetsdislike');

    Route::post('/profiles/{user}/follow', 'FollowsController@store')->name('follow');

    Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->middleware('can:edit,user')->name('ProfileEdit');
    Route::patch('/profiles/{user}', 'ProfilesController@update')->middleware('can:edit,user');
    
    Route::get('/explore', 'ExploreController@index')->name('explore');
});
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');
