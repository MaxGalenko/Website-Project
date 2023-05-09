<?php

namespace app\models;

class Orders extends \app\core\Model {
    public $order_id;
    public $title;
    public $status;
    public $quantity;
    public $order_date;

    public $image;

    public $profile_id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $total_price;

    public $address_id;
    public $street_address;
    public $postal_code;
    public $city;
    public $province;
    public $country;


	public static function getAllOrders($user_id) {
	    if ($_SESSION['role'] === 'admin') {
	        $SQL = 'SELECT o.order_id, o.status, o.order_date, o.total_price, GROUP_CONCAT(p.title SEPARATOR ", ") as products, SUM(oi.quantity) as quantity, oi.unit_price
	                FROM orders o
	                JOIN order_details oi ON o.order_id = oi.order_id 
	                JOIN product p ON oi.product_id = p.product_id 
	                GROUP BY o.order_id';
	        $STH = self::$connection->prepare($SQL);
	        $STH->execute();
	    } else {
	        $SQL = 'SELECT o.order_id, o.status, o.order_date, GROUP_CONCAT(p.title SEPARATOR ", ") as products, SUM(oi.quantity) as quantity, SUM(oi.unit_price * oi.quantity) as total_price
	                FROM orders o
	                JOIN order_details oi ON o.order_id = oi.order_id 
	                JOIN product p ON oi.product_id = p.product_id 
	                WHERE o.profile_id = :user_id 
	                GROUP BY o.order_id';
	        $STH = self::$connection->prepare($SQL);
	        $STH->execute(['user_id' => $user_id]);
	    }
	    return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
	}

     public static function getOrder($order_id) {
        $SQL = 'SELECT o.order_id, o.order_date, o.status, oi.quantity, oi.unit_price, p.title, p.image,
            pr.profile_id, pr.first_name, pr.middle_name, pr.last_name, pr.email, pr.phone_number,
            a.address_id, a.street_address, a.postal_code, a.city, a.province, a.country
            FROM orders o
            JOIN order_details oi ON o.order_id = oi.order_id
            JOIN product p ON oi.product_id = p.product_id
            JOIN profile pr ON o.profile_id = pr.profile_id
            JOIN address a ON o.address_id = a.address_id
            WHERE o.order_id = :order_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['order_id' => $order_id]);
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Orders');
        return $STH->fetch();
    }

    public static function getOrderDetails($order_id) {

    $SQL = 'SELECT o.order_id, o.order_date, o.status, o.total_price, oi.quantity, oi.unit_price, p.title, p.image,
            pr.profile_id, pr.first_name, pr.middle_name, pr.last_name, pr.email, pr.phone_number,
            a.address_id, a.street_address, a.postal_code, a.city, a.province, a.country
            FROM orders o
            JOIN order_details oi ON o.order_id = oi.order_id
            JOIN product p ON oi.product_id = p.product_id
            JOIN profile pr ON o.profile_id = pr.profile_id
            JOIN address a ON o.address_id = a.address_id
            WHERE o.order_id = :order_id';
    $STH = self::$connection->prepare($SQL);
    $STH->execute(['order_id' => $order_id]);
    return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
	}


	public function updateStatus($status) {
	    $SQL = 'UPDATE orders SET status = :status WHERE order_id = :order_id';
	    $STH = self::$connection->prepare($SQL);
	    $STH->execute(['order_id' => $this->order_id, 'status' => $status]);
	}

}