<?php
namespace app\filters;

#[\Attribute]
class Login implements \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['user_id'])){
		 	header('location:/User/index?error=You must login to use that feature.');
		 	return true; //not enough, we have to tell the router to do something
		}
		return false;
	}
}