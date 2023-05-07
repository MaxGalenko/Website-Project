<?php

namespace app\controllers;

class Orders extends \app\core\Controller {
    public function index()
    {
        $orders = new \app\models\Orders();
        $orders = $orders->getOrders();
        $this->view('Orders/orders', $orders);
    }
}