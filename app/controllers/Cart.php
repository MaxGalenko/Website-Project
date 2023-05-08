<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
		$this->view('Cart/index');
	}

	public function addToCart($product_id){
		$add = new \app\models\Cart();

	}

	public function removeFromCart(){
		
	}
}