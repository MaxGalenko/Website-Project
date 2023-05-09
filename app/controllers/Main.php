<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	public function index() {
		$product = new \app\models\Product();
		$_SESSION['uri'] = '/Main/index';
		if(!isset($_POST['filter'])) {
			$selected_val = "default";
		} else {
			$selected_val = $_POST['filter'];			
		}
		
		// Storing Selected Value In Variable

		switch ($selected_val) {
			case 'default':
				$products = $product->getAll();
				break;
			case 'ascending':
				$products = $product->getAllPriceAscending();
				break;
			case 'descending':
				$products = $product->getAllPriceDescending();
				break;
			default:
				$products = $product->getAll();
				break;
		}

		$this->view('Main/index', $products);
	}

	public function search(){
		$product = new \app\models\Product();
		$products = $product->search($_GET['search_term']);
		$this->view('Main/index', $products);
	}
}