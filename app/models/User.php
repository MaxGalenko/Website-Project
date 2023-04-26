<?php
namespace app\models;

class User extends \app\core\Model{
	public $user_id;
	public $username;
	public $password_hash;
	public $role;

	public function getByUsername($username){
		$SQL = 'SELECT * FROM User WHERE username = :username';
		$STH = self::$connection->prepare($SQL);

		$STH->execute(['username'=>$username]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
		return $STH->fetch();
	}

	public function insert(){
	    $SQL = 'INSERT INTO User(username, password_hash, role) VALUES (:username, :password_hash, :role)';
	    $STH = self::$connection->prepare($SQL);

	    $STH->execute(['username'=>$this->username,
	                    'password_hash'=>$this->password_hash,
	                    'role' => 'customer']);
	    return self::$connection->lastInsertId();// returns the value of the new PK
	}


}