<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
		$cart = new \app\models\Cart();
		$items = $cart->getAllCartProducts($_SESSION['user_id']);
		$this->view('Cart/index', $items);
	}

	public function addToCart($product_id){
		$item = new \app\models\Cart();
		$item = $item->addToCart();
	}

	public function removeFromCart($order_details_id){
		$item = new \app\models\Cart();
		$item = $item->find($order_details_id);
		$item->removeFromCart();
		header('location:/Cart/index');
	}
}