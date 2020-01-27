<?php

Route::rule('get','/',"HomeController@welcome");

Route::get("home","HomeController@index");

Route::get('echo/{?message}',function ($message = 'Hello,Concise') {
	return $message;
});