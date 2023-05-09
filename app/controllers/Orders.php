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

    public function editStatus($order_id)
    {
        $order = new \app\models\Orders();
        $order = $order->getOrderDetails($order_id);

        if(isset($_POST['status'])){
            $order->status = $_POST['status'];
            $order->updateStatus($order->status);
        }

        $this->view('Orders/editStatus', $order);
    }
}
