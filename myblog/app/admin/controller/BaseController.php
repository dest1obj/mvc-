<?php

namespace admin\controller;
use csl\framework\Template;
class BaseController extends Template
{
	public function __construct()
	{
		parent::__construct('cache/admin','app/admin/view');
		$this->_init();
	}
	//创建初始化 他就是为了被继承的
	public function _init()
	{

	}
	//设置的是当display方法不传参时默认选项
	public function display($viewFile=null,$isExtract=true)
	{
		if (empty($viewFile)){
			$viewFile = $_GET['c'] . '/' . $_GET['a'] . '.html'; 
		}
		parent::display($viewFile,$isExtract);
	}
}