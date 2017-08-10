<?php
//注意名字  这个model并没有加model后缀 例如details后的model  可以不加的 tp5 全没有
namespace index\model;
use index\model\BaseModel;
class details extends BaseModel
{
	public function detailsList()
	{
		return 10;
	}
	
}