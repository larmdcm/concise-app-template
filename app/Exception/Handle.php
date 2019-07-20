<?php

namespace App\Exception;

class Handle
{
	public function handle ($errno,$errmsg,$errfile,$errline,$exceptionName,$e)
	{
		return response([],'json');
	}
}