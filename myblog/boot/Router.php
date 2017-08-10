<?php
//虽然是同级文件夹下，但都要参照index.php来找路径
include "boot/Psr4Autoloader.php";

class Router
{	
	//定义这个是为了new Psr4Autoloader()类的时候 静态方法不能有变量和$this
	protected static $autoloader;
	//自动加载
	public static function init()
	{
		//包含公共文件
		$config = include('config/namespace.php');
		
		//传给自动加载类
		self::$autoloader = new Psr4Autoloader($config);
		//开启session
		
		session_start();
	}
	//开启路由
	public static function run()
	{
		$_GET['m'] = empty($_GET['m']) ? 'index' : $_GET['m'];
		$_GET['c'] = empty($_GET['c']) ? 'index' : $_GET['c'];
		$_GET['a'] = empty($_GET['a']) ? 'index' : $_GET['a'];
		//index\controller\IndexController
		$c = $_GET['m'] . '\\controller\\' . ucfirst($_GET['c']) . 'Controller';
		call_user_func([new $c(), $_GET['a']]); 
	}
}