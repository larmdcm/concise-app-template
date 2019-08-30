<?php

namespace App\Provider;

use Concise\Foundation\Provider\MiddlewareServiceProvider as BaseMiddlewareServiceProvider;

class MiddlewareServiceProvider extends BaseMiddlewareServiceProvider
{
	/**
	 * 注册命名空间
	 * @var array
	 */
	protected $namespace = [
		'App\Middleware'
	];

	/**
	 * 中间件分组
	 * @var array
	 */
	protected $middlewareGroups = [
		'web' => [
			\Concise\Http\Middleware\VerifyCsrfToken::class
		]
	];

	/**
	 * 路由中间件
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => \App\Middleware\Authenticate::class
	];
}