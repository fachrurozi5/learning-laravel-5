<?php
Route::get('/', function(){
	return 'test';
});
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');
