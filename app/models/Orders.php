<?php

namespace app\models;

class Orders extends \app\core\Model {

    public $order_id;
    public $title;
    public $status;
    public $quantity;
    public $order_date;

    public static function getAllOrders() {

        $SQL = 'SELECT o.order_id, o.status, p.title, oi.quantity, oi.unit_price FROM orders o
                JOIN order_details oi ON o.order_id = oi.order_id JOIN product p ON oi.product_id = p.product_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute();
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
    }

    public static function getOrderDetails($order_id) {
        $SQL = 'SELECT oi.quantity, p.title, p.unit_price, oi.unit_price FROM order_details oi
                JOIN product p ON oi.product_id = p.product_id WHERE oi.order_id = :order_id';
        $STH = self::$connection->prepare($SQL);
        $STH->execute(['order_id' => $order_id]);
        return $STH->fetchAll(\PDO::FETCH_CLASS, 'app\\models\\Orders');
    }
}

