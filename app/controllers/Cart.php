<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
		$cart = new \app\models\Cart();
		$items = $cart->getAllCartProducts($_SESSION['user_id']);
		$this->view('Cart/index', $items);
	}

	public function addToCart($product_id){
		$cart = new \app\models\Cart();
		$cart = $cart->findUserCart($_SESSION['user_id']);
		if($cart == null){
			$cart->profile_id = $_SESSION['user_id'];
			$address = $cart->getAddress($_SESSION['user_id']);
			$cart->address_id = $address->address_id;
			$cart->status = 'In cart';
			$cart->order_id = $cart->createCart();
		}
		$newItem = new \app\models\Cart();
		$newItem->order_id = $cart->order_id;
		$newItem->product_id = $product_id;
		$newItem->addToCart();
		header('location:'.$_SESSION['uri']);
	}

	public function removeFromCart($order_details_id){
		$item = new \app\models\Cart();
		$item = $item->find($order_details_id);
		$item->removeFromCart();
		header('location:/Cart/index');
	}
}