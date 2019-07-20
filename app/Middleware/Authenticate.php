<?php

namespace App\Middleware;

use Concise\Http\Request;

class Authenticate
{
	public function handle (Request $request,\Closure $next = null)
	{
		return $next($request);
	}
}