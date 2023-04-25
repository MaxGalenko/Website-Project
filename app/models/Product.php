<?php
namespace app\models;

class Product extends \app\core\Model {

	public $product_id;
	public $title;
	public $type;
	public $description;
	public $image;
	public $unit_price;

	//get all the products
	public function getAll() {
		$SQL = 'SELECT * FROM product';
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
		$SQL = 'INSERT INTO product(title,type,description,image,unit_price) VALUE (:title, :type, :description, :image, :unit_price)';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'title' => $this->title,
			'type' => $this->type,
			'description' => $this->description,
			'image' => $this->image,
			'unit_price' => $this->unit_price,
		]);
	}

	//Update products
	public function update() {
		$SQL = 'UPDATE product SET title=:title, type=:type, description=:description, image=:image, unit_price=:unit_price WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'title' => $this->title,
			'type' => $this->type,
			'description' => $this->description,
			'image' => $this->image,
			'unit_price' => $this->unit_price,
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
