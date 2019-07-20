<?php

define('CONCISE_START', microtime(true));

define('BASE_PATH',dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';

// 注册自动加载
Concise\Foundation\Loader::register(dirname(__DIR__));

// 绑定容器
Container::getInstance()->bind([
   'app'     => Concise\Foundation\App::class,
   'env'     => Concise\Env\Env::class,
   'router'  => Concise\Routing\Router::class,
   'request' => Concise\Http\Request::class,
   'config'  => Concise\Config\Config::class,
   'date'    => Concise\Date\Date::class,
   'session' => Concise\Session\Session::class
]);

// 注册环境变量
Env::set([
   'root_path'    => BASE_PATH,
   'app_path'     => BASE_PATH . '/app',
   'config_path'  => BASE_PATH . '/config',
   'route_path'   => BASE_PATH . '/route',
   'runtime_path' => BASE_PATH . '/runtime',
   'view_path'    => BASE_PATH . '/views'
]);

// 配置config路径
Config::setConfigPath(Env::get('config_path'));

// 注册错误处理
Concise\Error\Error::register();

// 初始化日期组件
Container::get('date',['dateTimeZone' => Config::get('date_time_zone')]);