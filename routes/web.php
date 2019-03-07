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

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/movie', 'MovieController@index')->name('movie_index');
    Route::post('/movie', 'MovieController@store')->name('movie_store');
    Route::get('/movie/create', 'MovieController@create')->name('movie_create');
    Route::get('/movie/{id}', 'MovieController@edit')->name('movie_edit');
    Route::post('/movie/{id}', 'MovieController@update')->name('movie_update');
    Route::get('/movie/{id}/delete', 'MovieController@delete')->name('movie_delete');

    Route::get('/member', 'MemberController@index')->name('member_index');
    Route::post('/member', 'MemberController@store')->name('member_store');
    Route::get('/member/nonactive', 'MemberController@nonactive')->name('member_nonactive');
    Route::get('/member/create', 'MemberController@create')->name('member_create');
    Route::get('/member/{id}', 'MemberController@edit')->name('member_edit');
    Route::post('/member/{id}', 'MemberController@update')->name('member_update');
    Route::get('/member/{id}/delete', 'MemberController@delete')->name('member_delete');
    Route::get('/member/{id}/deactiveate', 'MemberController@deactiveate')->name('member_deactivate');
    Route::get('/member/{id}/activate', 'MemberController@activeate')->name('member_activate');

    Route::get('/lending', 'TransactionController@lending')->name('lending');
    Route::post('/lending', 'TransactionController@lend_action')->name('lend_action');

    Route::get('/returnment', 'TransactionController@returnment')->name('returnment');
    Route::post('/returnment', 'TransactionController@returnment_with_charge')->name('returnment_charge');
    Route::get('/returnment/{id}', 'TransactionController@returnment_without_charge')->name('returnment_without_charge');
});