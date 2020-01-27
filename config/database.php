<?php
/**
 * 数据库配置
 */
return [
	// 数据库连接驱动 mysql,sqlsrv
	'drive'      => env('DB_DRIVE','mysql'),
	// 连接地址
	'host' 	     => env('DB_HOST','127.0.0.1'),
	// socket连接
	'socket'     => '',
	// 连接端口
	'port'       => env('DB_PORT',3306),
	// 用户名
	'username'   => env('DB_USERNAME',''),
	// 密码
	'password'   => env('DB_PASSWORD',''),
	// 连接数据库
	'database'   => env('DB_DATABASE',''),
	// 连接编码
	'charset'    => 'utf8',
	// 表名前缀
	'prefix'     => '',
	// 是否长连接
	'persistent' => false
];