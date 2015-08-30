<?php

/**
* Home
*/

Route::get('/', [
	'uses' => '\Dashboard\Http\Controllers\HomeController@index',
	'as' => 'home',
]);


/**
* Authentication
*/

Route::get('/signup', [
	'uses' => '\Dashboard\Http\Controllers\AuthController@getSignup',
	'as' => 'auth.signup',
	'middleware' => ['guest'],
]);

Route::post('/signup', [
	'uses' => '\Dashboard\Http\Controllers\AuthController@postSignup',
	'middleware' => ['guest'],
]);

Route::get('/signin', [
	'uses' => '\Dashboard\Http\Controllers\AuthController@getSignin',
	'as' => 'auth.signin',
	'middleware' => ['guest'],
]);

Route::post('/signin', [
	'uses' => '\Dashboard\Http\Controllers\AuthController@postSignin',
	'middleware' => ['guest'],
]);

Route::get('/signout', [
	'uses' => '\Dashboard\Http\Controllers\AuthController@getSignout',
	'as' => 'auth.signout',
]);


/**
* Search
*/

Route::get('/search', [
	'uses' => '\Dashboard\Http\Controllers\SearchController@getResults',
	'as' => 'search.results',
]);


/**
* User Profile
*/

Route::get('/user/{username}', [
	'uses' => '\Dashboard\Http\Controllers\ProfileController@getProfile',
	'as' => 'profile.index',
]);

Route::get('/profile/edit', [
	'uses' => '\Dashboard\Http\Controllers\ProfileController@getEdit',
	'as' => 'profile.edit',
	'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
	'uses' => '\Dashboard\Http\Controllers\ProfileController@postEdit',
	'middleware' => ['auth'],
]);


/**
* Friends
*/

Route::get('/friends', [
	'uses' => '\Dashboard\Http\Controllers\FriendController@getIndex',
	'as' => 'friend.index',
	'middleware' => ['auth'],
]);

Route::get('/friends/add/{username}', [
	'uses' => '\Dashboard\Http\Controllers\FriendController@getAdd',
	'as' => 'friend.add',
	'middleware' => ['auth'],
]);

Route::get('/friends/accept/{username}', [
	'uses' => '\Dashboard\Http\Controllers\FriendController@getAccept',
	'as' => 'friend.accept',
	'middleware' => ['auth'],
]);