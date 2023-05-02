<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
		$this->view('Cart/index');
	}
}