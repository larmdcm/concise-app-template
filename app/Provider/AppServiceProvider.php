<?php

namespace App\Provider;

use Concise\Foundation\Provider\AppServiceProvider as BaseAppServiceProvider;
use Concise\Config;

class AppServiceProvider extends BaseAppServiceProvider
{
	/**
	 * 初始化
	 * @return void
	 */
	public function initialize ()
	{
		parent::initialize();
		// register service
		$this->registerDatabaseService();
		//...
	}

	/**
	 * 注册数据库服务
	 * @return void
	 */
	public function registerDatabaseService ()
	{
		\Concise\Database\Db::setConfig(
			Config::scope('database')->get()
		);
	}
}