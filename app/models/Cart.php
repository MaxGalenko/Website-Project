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

	public function getAllCartProducts(){
		$SQL = 'SELECT o.* FROM orders o JOIN order_details od ON o.order_id = od.order_id JOIN product p ON oi.product_id = p.product_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute();
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Cart');
	}

	public function addToCart($product_id){

	}

	public function removeFromCart(){

	}

	public function updateQuantity(){

	}
}