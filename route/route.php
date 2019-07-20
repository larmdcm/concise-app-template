<?php

Router::rule('get','/',"HomeController@welcome");

Router::get("home","HomeController@index");

Router:: get('echo/{?message}',function ($message = 'Hello,Concise') {
	return $message;
});