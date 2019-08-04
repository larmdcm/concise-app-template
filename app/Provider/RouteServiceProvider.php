<?php

namespace App\Provider;

use Route;

class RouteServiceProvider
{	
	/**
	 * 命名空间
	 * @var string
	 */
	protected $namespace = 'App\Controller';

	/**
	 * web中间件
	 * @var array
	 */
	protected $webMiddleware = [
		\Concise\Http\Middleware\VerifyCsrfToken::class
	];

	/**
	 * 注册路由
	 * @return void
	 */
	public function map ()
	{
		$this->mapWebRoute();
		$this->mapApiRoute();
	}

	/**
	 * 注册web路由
	 * @return void
	 */
	public function mapWebRoute ()
	{
		Route::namespace($this->namespace)
			  ->middleware($this->webMiddleware)
			  ->group(base_url('route/web.php'));
	}

	/**
	 * 注册api路由
	 * @return void
	 */
	public function mapApiRoute ()
	{
		Route::namespace($this->namespace)
			  ->prefix('api')
			  ->group(base_url('route/api.php'));
	}
}