<?php

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


Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'api'], function () {
        Route::get('/get-conversations/{user_id}', 'MessageController@getConversations')->name('messages.conversations');
        Route::get('/messages/user/{id}', 'MessageController@chat')->name('messages.chat');

        Route::any('/chat/{slug}', 'MessageController@chat')->name('user.chat');
        Route::get('/messages/{conversation_id}', 'MessageController@fetchMessages')->name('user.messages.fetch');
        Route::get('/messages-without-convo/{user_id}', 'MessageController@fetchMessagesWithoutConvo')->name('user.messagesWithoutConvo.fetch');
        
        Route::post('/send-message/{conversation_id}', 'MessageController@sendMessage')->name('user.messages.send');
        Route::post('/send-message-without-convo/{user_id}', 'MessageController@sendMessageWithoutConvo')->name('user.messagesWithoutConvo.send');
        
    });

    Route::group(['prefix' => '@me'], function () {
        Route::any('/', 'UsersController@dashboard')->name('user.dashboard')->middleware('profile_completed');
        Route::any('/edit-profile', 'UsersController@update')->name('user.update');
    });
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/contact-us', 'HomeController@contact')->name('contact');

Route::get('/members', 'UsersController@index')->name('frontend.members.index');
Route::get('/profile/{slug}', 'UsersController@show')->name('frontend.members.show');
Route::get('/browse', 'UsersController@browse')->name('frontend.members.browse');
