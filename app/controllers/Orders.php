<?php

namespace app\controllers;

class Orders extends \app\core\Controller {
    public function index()
    {
        $orders = new \app\models\Orders();
        $orders = $orders->getAllOrders();
        $this->view('Orders/orders', $orders);
    }

    public function details($order_id)
    {
        $order = new \app\models\Orders();
        $order = $order->getOrderDetails($order_id);
        $this->view('Orders/details', $order);
    }
}
