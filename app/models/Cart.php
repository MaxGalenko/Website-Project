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
		$SQL = 'SELECT od.order_details_id, p.title, p.image, p.unit_price, p.product_id, p.discount_price FROM orders o JOIN order_details od ON o.order_id = od.order_id 
				JOIN product p ON od.product_id = p.product_id WHERE o.order_id = od.order_id AND o.profile_id = :profile_id 
				AND o.status = "in cart"';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['profile_id'=>$profile_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Cart');
    	return $STH->fetchAll();
	}

	public function addToCart($product_id){
		$SQL = 'INSERT INTO order_details(order_id, product_id) VALUE (:order_id, :product_id)';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'order_id' => $this->order_id,
			'product_id' => $this->product_id,
		]);
	}

	public function removeFromCart(){
		$SQL = 'DELETE FROM order_details WHERE order_details_id=:order_details_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['order_details_id'=>$this->order_details_id]);
	}

	public function checkForCart($profile_id){
		
	}

	public function find($order_details_id){
		$SQL = 'SELECT * FROM order_details WHERE order_details_id=:order_details_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['order_details_id'=>$order_details_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Cart');
    	return $STH->fetch();
	}
}