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
	    $SQL = 'INSERT INTO User(username, password_hash, role, secret_key) VALUES (:username, :password_hash, :role, :secret_key)';
	    $STH = self::$connection->prepare($SQL);

	    $STH->execute(['username'=>$this->username,
	                    'password_hash'=>$this->password_hash,
	                    'role' => 'customer',
						'secret_key' => NULL
					]);
	    return self::$connection->lastInsertId();// returns the value of the new PK
	}

	public function getUserQrCode($userID){
		$SQL = 'SELECT * FROM User WHERE user_id = :user_id';
		$STH = self::$connection->prepare($SQL);

		$STH->execute(['user_id'=>$userID]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
		return $STH->fetch();
	}

	public function updateUserQrCode($userID, $secretKey){
		$SQL = 'UPDATE user SET secret_key=:secret_key WHERE user_id=:user_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'secret_key' => $secretKey,
			'user_id' => $userID,
		]);
	}
}