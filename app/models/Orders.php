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

	public $address_id;
	public $street_address;
	public $postal_code;
	public $city;
	public $province;
	public $country;


    public static function getAllOrders() {
        $SQL = 'SELECT o.order_id, o.status, o.order_date, p.title, oi.quantity, oi.unit_price FROM orders o
                JOIN order_details oi ON o.order_id = oi.order_id JOIN product p ON oi.product_id = p.product_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute();
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
    }

    public static function getOrderDetails($order_id) {
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
	    return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
	}

	public function updateStatus($status, $order_id) {
	    $SQL = 'UPDATE orders SET status = :status WHERE order_id = :order_id';
	    $STH = self::$connection->prepare($SQL);
	    $STH->execute(['status' => $status, 'order_id' => $order_id]);
    }

}