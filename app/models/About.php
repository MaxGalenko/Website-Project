<?php
namespace app\models;

class About extends \app\core\Model{
	public $about_id;
	public $text;

	public function getText(){
		$SQL = "SELECT * FROM about";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\About');
		return $STH->fetch();
	}

	public function update(){
		$SQL = "UPDATE about SET text=:text WHERE about_id=:about_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['text'=>$this->text];
		$STH->execute($data);
		return $STH->rowCount();
	}
}