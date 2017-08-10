<?php
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\adminModel;
class IndexController extends BaseController
{
	public $a;
	public function _init()
	{
		$this->a = new adminModel();
	}
	public function index()
	{
		//调用adminModel下的方法并且分配变量 注意4行时引入了adminModel
		$data = $this->a->demo();
		$this->assign('data',$data);//把获取的值分配出去
		$this->display();//引入页面
	}
}