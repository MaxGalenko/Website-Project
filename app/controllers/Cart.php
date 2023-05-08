<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
		$cart = new \app\models\Cart();
		$items = $cart->getAllCartProducts($_SESSION['user_id']);
		$this->view('Cart/index', $items);
	}

	public function addToCart($product_id){
		$add = new \app\models\Cart();
		// $add = $add->
	}

	public function removeFromCart($product_id){
		
	}
}