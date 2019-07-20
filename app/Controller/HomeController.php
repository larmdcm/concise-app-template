<?php

namespace App\Controller;

class HomeController extends Controller
{

	/**
	 * 显示首页
	 * @return mixed
	 */
	public function index ()
	{
		return "home";
	}

	/**
	 * 欢迎页面
	 * @return mixed
	 */
	public function welcome ()
	{
		return view('welcome')->withWelcome('welcome to use concise');
	}
}
