<?php
namespace app\models;

class Product extends \app\core\Model {
	public $product_id;
	public $title;
	public $type;
	public $description;
	public $image;
	public $unit_price;
	public $discount_price;
	public $quantity;

	//get all the products by product name
	public function search($searchTerm) {
		$SQL = "SELECT * FROM product WHERE title LIKE :searchTerm ORDER BY title DESC";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['searchTerm'=>"%$searchTerm%"]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	//get all the products by price ascending
	public function getAllTitleAscending() {
		$SQL = 'SELECT * FROM product ORDER BY title';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	//get all the products by price ascending
	public function getAllTitleDescending() {
		$SQL = 'SELECT * FROM product ORDER BY title DESC' ;
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	//get all the products by price ascending
	public function getAllPriceAscending() {
		$SQL = 'SELECT * FROM product ORDER BY unit_price';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	//get all the products by price descending
	public function getAllPriceDescending() {
		$SQL = 'SELECT * FROM product ORDER BY unit_price DESC';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	//get all the products
	public function getAll() {
		$SQL = 'SELECT * FROM product ORDER BY product_id DESC';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	public function get($product_id) {
    $SQL = 'SELECT * FROM product WHERE product_id = :product_id';
    $STH = self::$connection->prepare($SQL);
    $STH->execute(['product_id' => $product_id]);
    $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
    return $STH->fetch();
	}

	//Creating products
	public function create() {
		$SQL = 'INSERT INTO product(title,type,description,image,unit_price,discount_price,quantity) VALUE (:title, :type, :description, :image, :unit_price,:discount_price, :quantity)';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'title' => $this->title,
			'type' => $this->type,
			'description' => $this->description,
			'image' => $this->image,
			'unit_price' => $this->unit_price,
			'discount_price' => $this->discount_price,
			'quantity' => $this->quantity,
		]);
	}

	//Update products
	public function update() {
		$SQL = 'UPDATE product SET title=:title, type=:type, description=:description, image=:image, unit_price=:unit_price,discount_price=:discount_price, quantity=:quantity WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'title' => $this->title,
			'type' => $this->type,
			'description' => $this->description,
			'image' => $this->image,
			'unit_price' => $this->unit_price,
			'quantity' => $this->quantity,
			'discount_price' => $this->discount_price,
			'product_id' => $this->product_id,
		]);
	}

	//Delete products
	public function delete() {
		$SQL = 'DELETE FROM product WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'product_id' => $this->product_id,
		]);
	}
}