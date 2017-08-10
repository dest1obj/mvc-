<?php
namespace index\controller;
//引用模版引擎
use index\controller\BaseController;
use index\model\details;

class IndexController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new details();
		
	}
	public function index()
	{
		$data = $this->blog->detailsList();
		$this->assign('data',$data);
		$this->display();
	}
}