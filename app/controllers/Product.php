<?php

namespace app\controllers;

class Product extends \app\core\Controller {

    public function index() {
        $productModel = new \app\models\Product();
        $products = $productModel->getAll();
        $this->view('Main/index', $products);
    }

    public function create() {
        if (isset($_POST['action'])) {
            $product = new \app\models\Product();
            $product->title = $_POST['title'];
            $product->type = $_POST['type'];
            $product->description = $_POST['description'];
            $product->unit_price = $_POST['unit_price'];
            $product->quantity = $_POST['quantity'];
            $product->image = $this->saveFile($_FILES['image'], $product->product_id);
            if (!$product->image) {
                header('location: Product/create');
                return;
            }
            $product->create();
            header('location: Main/index');
        } else {
            $this->view('Product/create');
        }
    }

    public function edit($product_id) {
        $productModel = new \app\models\Product();
        $product = $productModel->get($product_id);
        if (isset($_POST['action'])) {
            $product->title = $_POST['title'];
            $product->type = $_POST['type'];
            $product->description = $_POST['description'];
            $product->unit_price = $_POST['unit_price'];
            $product->quantity = $_POST['quantity'];
            if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                $newImage = $this->saveFile($_FILES['image'], $product_id);
                if ($newImage) {
                    unlink("./images/$product->image");
                    $product->image = $newImage;
                } else {
                    header('location: Product/edit/' . $product_id);
                    return;
                }
            } elseif (isset($_POST['clear_image']) && $_POST['clear_image'] === 'true') {
                unlink("./images/$product->image");
                $product->image = null;
            }
            $product->update();
            header('location: /Main/index');
        } else {
            $this->view('Product/edit', $product);
        }
    }

    public function delete($product_id) {
        $productModel = new \app\models\Product();
        $product = $productModel->get($product_id);
        unlink("./images/$product->image");
        $product->delete();
        header('location: ../Product/index/');
    }

    public function saveFile($file, $product_id) {
        $path = './images/';
        $allowedTypes = ["jpg", "png", "gif"];
        $fileName = basename($file["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFileName = $product_id . '-' . uniqid() . '.' . $fileType;
        $targetFile = $path . $targetFileName;
        if ($file["error"] == UPLOAD_ERR_OK) {
            $info = getimagesize($file["tmp_name"]);
            if ($info == false) {
                return false;
            } elseif (!in_array($fileType, $allowedTypes)) {
                return false;
            } else {
                move_uploaded_file($file["tmp_name"], $targetFile);
                return $targetFileName;
            }
        } else {
            return false;
        }
    }
}


