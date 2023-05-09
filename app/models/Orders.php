<?php

namespace app\models;

class Orders extends \app\core\Model {
    public $order_id;
    public $title;
    public $status;
    public $quantity;
    public $order_date;

    public static function getAllOrders() {
        $SQL = 'SELECT o.order_id, o.status, o.order_date, p.title, oi.quantity, oi.unit_price FROM orders o
                JOIN order_details oi ON o.order_id = oi.order_id JOIN product p ON oi.product_id = p.product_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute();
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
    }

    public static function getOrderDetails($order_id) {
<<<<<<< HEAD
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

=======
        $SQL = 'SELECT oi.quantity, p.title, p.unit_price, oi.unit_price FROM order_details oi
                JOIN product p ON oi.product_id = p.product_id WHERE oi.order_id = :order_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['order_id' => $order_id]);
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
    }
>>>>>>> 432aca17fd4fd600fe84342129d7cfc19049b399
}