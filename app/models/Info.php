<?php
namespace app\models;

class Info extends \app\core\Model{
	public $info_id;
	public $about_text;
	public $contact_text;

	public function getText(){
		$SQL = "SELECT * FROM info";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Info');
		return $STH->fetch();
	}

	public function updateAboutText(){
		$SQL = "UPDATE info SET about_text=:about_text WHERE info_id=:info_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['about_text'=>$this->about_text,
				 'info_id'=>$this->info_id];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function updateContactText(){
		$SQL = "UPDATE info SET contact_text=:contact_text WHERE info_id=:info_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['contact_text'=>$this->contact_text,
				 'info_id'=>$this->info_id];
		$STH->execute($data);
		return $STH->rowCount();
	}
}