<?php
namespace app\models;

class Profile extends \app\core\Model{
    public $profile_id;
	public $first_name;
    public $middle_name;
	public $last_name;
    public $email;
	public $phone_number;

	public $address_id;
	public $street_address;
	public $postal_code;
	public $city;
	public $province;
	public $country;

    //Get Profile information
	public function get($profile_id) {
        // $SQL = "SELECT * FROM profile WHERE profile_id = $profile_id";
		$SQL = "SELECT * FROM profile LEFT JOIN address ON profile.profile_id = address.profile_id";
        $STH = self::$connection->prepare($SQL);
        $STH->execute();
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
        return $STH->fetch();
    }

	//Update Profile information
	public function update() {
        $SQL = 'UPDATE profile SET first_name=:first_name, middle_name=:middle_name, last_name=:last_name, email=:email, phone_number=:phone_number WHERE profile_id=:profile_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'first_name'=>$this->first_name,
			'middle_name'=>$this->middle_name,
			'last_name'=>$this->last_name,
			'email'=>$this->email,
			'phone_number'=>$this->phone_number,
			'profile_id'=>$this->profile_id
		]);
	}

	//------------------------------------ Multi-Display for addresses ---------------------------------------------------

	// public function getAddress($profile_id)
	// {
	// 	$SQL = "SELECT * FROM address WHERE profile_id = $profile_id";
    //     $STH = self::$connection->prepare($SQL);
    //     $STH->execute();
    //     $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
    //     return $STH->fetch();
	// }

	//Update Address information
	public function updateAddress() {
        $SQL = 'UPDATE address SET street_address=:street_address, postal_code=:postal_code, city=:city, province=:province, country=:country WHERE profile_id=:profile_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute([
			'profile_id'=>$this->profile_id,
			'street_address'=>$this->street_address,
			'postal_code'=>$this->postal_code,
			'city'=>$this->city,
			'province'=>$this->province,
			'country'=>$this->country
		]);
	}

	// creating a personal information for the profile
	public function createProfile()
	{
		$SQL = 'INSERT INTO profile(profile_id, first_name, middle_name, last_name, email, phone_number) VALUES (:profile_id, :first_name, :middle_name, :last_name, :email, :phone_number)';
	    $STH = self::$connection->prepare($SQL);

	    $STH->execute([
						'profile_id' =>$this->profile_id,
						'first_name'=>$this->first_name,
	                    'middle_name'=>$this->middle_name,
	                    'last_name' => $this->last_name,
						'email' => $this->email,
						'phone_number' => $this->phone_number
					]); 
					
	    return self::$connection->lastInsertId();// returns the value of the new PK
	}

	// Creating a address for the user
	public function createAddress()
	{
		$SQL = 'INSERT INTO address(profile_id, street_address, postal_code, city, province, country) VALUES (:profile_id, :street_address, :postal_code, :city, :province, :country)';
	    $STH = self::$connection->prepare($SQL);

	    $STH->execute([
						'profile_id' =>$this->profile_id,
						'street_address'=>$this->street_address,
	                    'postal_code'=>$this->postal_code,
	                    'city'=>$this->city,
						'province'=>$this->province,
						'country'=>$this->country
					]); 
					
	    return self::$connection->lastInsertId();// returns the value of the new PK
	}

	// Get the most recent user from the user table and connect it to profile table
	public function getProfileID()
	{
		$SQL = 'SELECT user_id FROM user ORDER BY user_id DESC LIMIT 1';
		$STH = self::$connection->prepare($SQL);
        $STH->execute();
        $STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
        return $STH->fetch();
	}
}