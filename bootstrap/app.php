<?php

define('CONCISE_START', microtime(true));

define('BASE_PATH',dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';

// 注册自动加载
Concise\Foundation\Loader::register(dirname(__DIR__));

// 获取容器实例
$container = Concise\Container::getInstance();

// 绑定容器
$container->bind([
   'app'     => Concise\Foundation\App::class,
   'env'     => Concise\Env\Env::class,
   'route'  => Concise\Routing\Route::class,
   'request' => Concise\Http\Request::class,
   'config'  => Concise\Config\Config::class,
   'date'    => Concise\Date\Date::class,
   'session' => Concise\Session\Session::class,
   'cookie'  => Concise\Cookie\Cookie::class
]);

// 初始化应用对象
$app = $container->get('app')->initialize(
	__DIR__
);

// 注册错误处理
\Concise\Error\Error::register();

return $app;