<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	#[\app\filters\Login]
	public function index(){
		$cart = new \app\models\Cart();
		$items = $cart->getAllCartProducts($_SESSION['user_id']);
		$this->view('Cart/index', $items);
	}

	#[\app\filters\Login]
	public function addToCart($product_id){
	    $cart = new \app\models\Cart();
	    $userCart = $cart->findUserCart($_SESSION['user_id']);
	    if($userCart == null){
	        $cart = new \app\models\Cart();
	        $cart->profile_id = $_SESSION['user_id'];
	        $address = $cart->getAddress($_SESSION['user_id']);
	        $cart->address_id = $address->address_id;
	        $cart->status = 'In cart';
	        $cart->order_id = $cart->createCart();
	    } else {
	        $cart = $userCart;
	    }
	    $newItem = new \app\models\Cart();
	    $newItem->order_id = $cart->order_id;
	    $newItem->product_id = $product_id;
	    $newItem->quantity = 1;
	    $newItem->addToCart();
	    header('location:'.$_SESSION['uri']);
	}


	#[\app\filters\Login]
	public function removeFromCart($order_details_id){
		$item = new \app\models\Cart();
		$item = $item->find($order_details_id);
		$item->removeFromCart();
		header('location:/Cart/index');
	}

	#[\app\filters\Login]
	public function checkout(){
		$checkout = new \app\models\Cart();
		$cart = new \app\models\Cart();
		$cart = $cart->findUserCart($_SESSION['user_id']);
		$checkout->status = 'In progress';
		$checkout->total_price = $_POST['total'];
		$checkout->order_id = $cart->order_id;
		$checkout->checkout();
		header('location:/Orders/index');
	}
}