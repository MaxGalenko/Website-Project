<?php
namespace app\controllers;

class Profile extends \app\core\Controller{
	// Main Profile Page - Shows an overview of the profile and address information
	#[\app\filters\Login]
	public function index(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['user_id']);	//Personal Information
		$this->view('Profile/index', $profile);

		// $profile2 = $profile->getAddress($_SESSION['user_id']); //Get all possible addresses
	}

	// Updates the address information about a specific user
	public function editAddressInfo(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['user_id']);

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

	// Updates a personal information about a specific user
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

	// Views a edit form representing the personal information
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

	// Views a form showing the personal information
	public function registerPersonalInformation()
	{
		$this->view('Profile/registerPers');
	}

	// insert the information regarding the user into the database
	public function register(){
		if(isset($_POST['action'])){
			//process the input
			$user = new \app\models\User();
			$usercheck = $user->getByUsername($_POST['username']);
			if(!$usercheck){
				$user->username= $_POST['username'];
				$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$user->insert();
				header('location:/Profile/registerPersonalInformation');
			}else{
				header('location:/User/register?error=Username ' . $_POST['username'] . ' already in use. Choose another.');
			}

		}else{
			//display the form
			$this->view('User/register');//TODO: add the new view file
		}
	}
}