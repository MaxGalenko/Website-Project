<?php
namespace app\models;

class Profile extends \app\core\Model{
	public $profile_id;
	public $first_name;
    public $middle_name;
	public $last_name;
    public $email;
	public $phone_number;

    //Get Profile information
	public function get($profile_id) {
        $SQL = "SELECT * FROM profile WHERE profile_id = $profile_id";
        $STH = self::$connection->prepare($SQL);
        $STH->execute();
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
        return $STH->fetch();
    }

	//Update Profile information
	public function update() {
		$SQL = 'UPDATE profile SET first_name=:first_name, middle_name=:middle_name, last_name=:last_name, email=:email, phone_number=:phone_number WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'first_name' => $this->first_name,
			'middle_name' => $this->middle_name,
			'last_name' => $this->last_name,
			'email' => $this->email,
			'phone_number' => $this->phone_number,
			'quantity' => $this->quantity,
		]);
	}
}