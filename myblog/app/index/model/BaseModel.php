<?php 

namespace index\model;
use csl\framework\Model;
class BaseModel extends Model
{
	//继承model类
	public function __construct()
	{
		$config = include('config/database.php');
		parent::__construct($config);
	}
}