<?php

namespace app\controllers;

class Orders extends \app\core\Controller {
    public function index()
    {
        $orders = new \app\models\Orders();
        $user_id = $_SESSION['user_id'];
        $orders = $orders->getAllOrders($user_id);
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
        $order = $order->getOrder($order_id);

        if(isset($_POST['status'])){
        $order->status = $_POST['status'];
        $order->updateStatus($_POST['status']);
        header('location:/Orders/orders');
    }
        $this->view('Orders/editStatus', $order);
    }

}
