<?php

return [
	'app_namespace'  => 'App',
	'app_debug'      => true,

	'return_type'    => 'json',
	'json_format'    =>  true,

	'date_time_zone' => 'PRC',

	'error_handle'   => [
		'title'   => '404',
		'output'  => 'html',

		'message' => 'Whoops! There was an error.',

		'custom_error_handle' => ''
	],
 	 // 日志记录
	 'log' => [
	 	 // 是否开启日志记录
	 	 'is_record'  => true,
 	 	 // 目录格式
	 	 'dir_format'   => function () {
	 	 	 return date('Y-m');
	 	 },
	 	 // 文件名格式
	 	 'file_format' => function () {
	 	 	 return date('d');
	 	 },
	 	 'ext' 		  => 'log'
	 ],
];