<?php

namespace App\Request;

use Concise\Http\Request\FormRequest;

class Register extends FormRequest
{	
	/**
	 * 验证规则
	 * @return array
	 */
	public function rule ()
	{
		return [];
	}
	
	/**
	 * 错误消息
	 * @return array
	 */
	public function message ()
	{
		return [];
	}
}