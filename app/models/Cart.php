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
		$SQL = 'SELECT od.order_details_id, p.title, p.image, p.unit_price, p.product_id, p.discount_price FROM orders o 
				JOIN order_details od ON o.order_id = od.order_id JOIN product p ON od.product_id = p.product_id 
				WHERE o.order_id = od.order_id AND o.profile_id = :profile_id AND o.status = "in cart"';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['profile_id'=>$profile_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Cart');
    	return $STH->fetchAll();
	}

	public function addToCart(){
		$SQL = 'INSERT INTO order_details(order_id, product_id, quantity) VALUE (:order_id, :product_id, :quantity)';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'order_id' => $this->order_id,
			'product_id' => $this->product_id,
			'quantity' => $this->quantity,
		]);
	}

	public function removeFromCart(){
		$SQL = 'DELETE FROM order_details WHERE order_details_id=:order_details_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['order_details_id'=>$this->order_details_id]);
	}

	public function findUserCart($profile_id){
		$SQL = 'SELECT * FROM orders WHERE profile_id=:profile_id AND `status`="In cart"';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['profile_id'=>$profile_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Cart');
    	return $STH->fetch();
	}

	public function createCart(){
		$SQL = 'INSERT INTO orders(order_id, profile_id, address_id, `status`) VALUE (:order_id, :profile_id, :address_id, :status)';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'order_id' => $this->order_id,
			'profile_id' => $this->profile_id,
			'address_id' => $this->address_id,
			'status' => $this->status,
		]);
		return self::connection->lastInsertId();
	}

	public function find($order_details_id){
		$SQL = 'SELECT * FROM order_details WHERE order_details_id=:order_details_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['order_details_id'=>$order_details_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Cart');
    	return $STH->fetch();
	}

	public function getAddress($profile_id){
		$SQL = 'SELECT * FROM `address` WHERE profile_id=:profile_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['profile_id'=>$profile_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
    	return $STH->fetch();
	}

	public function checkout(){
	    $currentDateTime = date('Y-m-d');
	    $SQL = 'UPDATE orders SET status=:status, total_price=:total_price, order_date=:order_date WHERE order_id=:order_id';
	    $STH = self::$connection->prepare($SQL);
	    $STH->execute([
	        'status' => $this->status,
	        'total_price' => $this->total_price,
	        'order_date' => $currentDateTime,
	        'order_id' => $this->order_id,
	    ]);
	}
}