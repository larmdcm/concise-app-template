<?php

Route::get('/',function () {
	return \Concise\Http\Rest::correct([],0,"Hello,My is Concise Api Service Interface.");
});