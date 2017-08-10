<?php
namespace index\controller;

use csl\framework\Template;//引入命名空间
class BaseController extends Template 
{
	public function __construct()
	{
		//从写模板引擎 为了子类在继承时不写参数
		parent::__construct('cache/index','app/index/view');
		//子类初始化方法
		$this->_init();
	}
	//子类的初始化方法
	public function _init()
	{

	}
	//重写display方法 不写参数默认是类名下的方法名文件
	public function display($viewFile=null,$isExtract=true)
	{
		if (empty($viewFile)){
			$viewFile = $_GET['c'] . '/' . $_GET['a'] . '.html'; 
		}
		parent::display($viewFile,$isExtract);
	}

	
}