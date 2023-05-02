<?php
namespace app\controllers;

class Profile extends \app\core\Controller{
	#[\app\filters\Login]
	public function index(){
		$profile = $profile2 = new \app\models\Profile();
		$profile = $profile->get($_SESSION['user_id']);	//Personal Information
		$profile2 = $profile->getAddress($_SESSION['user_id']); //Get all possible addresses
		$this->view('Profile/index', [$profile, $profile2]);
	}
	
	public function details($profile_id){
		$profile = new \app\models\Profile();
		$profile = $profile->get($profile_id);
		$this->view('Profile/details', $profile);
	}

	public function editAddressInfo(){
		$profile = new \app\models\Profile();
		$profile = $profile->getAddress($_SESSION['user_id']);

		if(isset($_POST['action'])) {
			$profile->profile_id = $_SESSION['user_id'];
            $profile->street_address = $_POST['street'];
            $profile->postal_code = $_POST['postal'];
            $profile->city = $_POST['city'];
            $profile->province = $_POST['province'];
			$profile->country = $_POST['country'];

			$profile->updateAddress();
			
			header('location:/Profile/index');
		}
		else {
			$this->view('Profile/addressEdit', $profile);
		}
	}

	public function editProfileInfo(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['user_id']);

		if(isset($_POST['action'])) {
			$profile->profile_id = $_SESSION['user_id'];
            $profile->first_name = $_POST['first_name_edit'];
            $profile->middle_name = $_POST['middle_name_edit'];
            $profile->last_name = $_POST['last_name_edit'];
            $profile->email = $_POST['email_text_edit'];
			$profile->phone_number = $_POST['phone_number_edit'];

			$profile->update();
			
			header('location:/Profile/index');
		}
		else {
			$this->view('Profile/edit', $profile);
		}
	}

	#[\app\filters\Login]
	public function edit(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['user_id']);
		$this->view('Profile/index', $profile);
	}

	#[\app\filters\Login]
	public function create(){
		if(isset($_POST['action'])){
			$profile = new \app\models\Profile();
			$profile->first_name = $_POST['first_name'];
			$profile->middle_name = $_POST['middle_name'];
			$profile->last_name = $_POST['last_name'];
			$profile->profile_id = $_SESSION['user_id'];
			$_SESSION['profile_id'] = $profile->insert();
			if ($_SESSION['profile_id'] == 0) {
				$_SESSION['profile_id'] = $_SESSION['user_id'];
			}
			header('location:/Profile/index');
		}else{
			$this->view('Profile/create');
		}
	}
}