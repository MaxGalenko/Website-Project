<?php
namespace app\controllers;

class Profile extends \app\core\Controller{
	#[\app\filters\Login]
	public function index(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['user_id']);
		$this->view('Profile/index', $profile);
	}
	
	public function details($profile_id){
		$profile = new \app\models\Profile();
		$profile = $profile->get($profile_id);
		$this->view('Profile/details', $profile);
	}

	public function editProfileInfo(){
		$profile = new \app\models\Profile();
		if(isset($_POST['action'])){
			$id = $_SESSION['user_id'];
			$firstname = $_POST['first_name_edit'];
			$middlename = $_POST['middle_name_edit'];
			$lastname = $_POST['last_name_edit'];
			$email = $_POST['email_text_edit'];
			$phone_number = $_POST['phone_number_edit'];

			$profile->profile_id = mysql_real_escape_string($id);
			$profile->first_name = mysql_real_escape_string($firstname);
			$profile->middle_name = mysql_real_escape_string($middlename);
			$profile->last_name = mysql_real_escape_string($lastname);
			$profile->email = mysql_real_escape_string($email);
			$profile->phone_number = mysql_real_escape_string($phone_number);

			$profile->update();
			
			header('location:/Profile/index');
		}
		$this->view('Profile/edit', $profile);
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