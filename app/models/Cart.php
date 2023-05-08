<?php
namespace app\models;

class Cart extends \app\core\Model{
	public $order_id;
	public $profile_id;
	public $address_id;
	public $status;
	public $total_price;
	public $order_date;

	public $order_details_id;
	public $product_id;
	public $quantity;
	public $unit_price;

	public $title;
	public $type;
	public $description;
	public $image;


	public static function getAllCartProducts($profile_id){
		$SQL = 'SELECT p.title, p.image, p.unit_price, p.discount_price FROM orders o JOIN order_details od ON o.order_id = od.order_id 
				JOIN product p ON od.product_id = p.product_id WHERE o.order_id = od.order_id AND o.profile_id = :profile_id 
				AND o.status = "in cart"';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['profile_id'=>$profile_id]);
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Cart');
	}

	public function addToCart($product_id){

	}

	public function removeFromCart($product_id){

	}

	public function updateQuantity(){

	}

	public function checkForCart($profile_id){

	}
}