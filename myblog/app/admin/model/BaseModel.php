<?php
namespace admin\model;
use csl\framework\Model;
class BaseModel extends Model 
{
	public function __construct()
	{
		$config = include('config/database.php');
		parent::__construct($config);
	}
}