<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllPriceAscending();
		$this->view('Main/index', $products);
	}

	public function search(){
		$product = new \app\models\Product();
		$products = $product->search($_GET['search_term']);
		$this->view('Main/index', $products);
	}
}