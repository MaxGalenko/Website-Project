<?php
namespace app\controllers;

//this is a class attribute
class User extends \app\core\Controller{

	public function index(){//login page
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->getByUsername($_POST['username']);
			if($user){
				if(password_verify($_POST['password'], $user->password_hash)){
					//the user is correct!
					$_SESSION['user_id'] = $user->user_id;
					$_SESSION['role'] = $user->role;
					header('location:/User/setup2fa');
				}else{
					header('location:/User/index?error=Bad username/password combination');
				}
			}else{
				//no such user
				header('location:/User/index?error=Bad username/password combination');
			}

		}else{
			$this->view('User/index');
		}
	}

	public function register(){//registration page
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

	public function logout(){
		session_destroy();
		header('location:/User/index');
	}

	#[\app\filters\Login]
	public function profile(){
		$message = new \app\models\Message();
		$messages = $message->getAllForUser($_SESSION['user_id']);
		$this->view('User/profile',$messages);
	}

	//Adding the makeQRCode function
	// Use: /Default/makeQRCode?data=protocol://address 
	public function makeQRCode(){  
		$data = $_GET['data'];  
		\QRcode::png($data); 
	}

	//Previous 2fa authentication

	// #[\app\filters\Login] 
	// public function setup2fa(){     
	// 	$secretkey = \app\core\TokenAuth6238::generateRandomClue();     
	// 	$_SESSION['secretkey'] = $secretkey;     
	// 	$url = \app\core\TokenAuth6238::getLocalCodeUrl( $_SESSION['user_id'], 'Awesome.com', $secretkey, 'Awesome App');     
	// 	$this->view('User/twofasetup', $url); 
	// } 

	#[\app\filters\Login] public function setup2fa(){     
		if(isset($_POST['action'])){      
			//Thos jfoaj to get the asdmsot aosfj   
			$currentcode = $_POST['currentCode'];         
			if(\app\core\TokenAuth6238::verify($_SESSION['secretkey'],$currentcode)){ 
				//the user has verified their proper 2-factor authentication setup             
				$user = new \app\models\User();             
				$user->user_id = $_SESSION['user_id'];    
				//$Tihsi aod aso kdfoqjw         
				$user->secret_key = $_SESSION['secretkey'];       
				// $user->update2fa();             
				header('location:/Main/index');         
			}else{          
				//iowgqhwqiohqw   
				header('location:/User/setup2fa?error=token not verified!');
				//reload         
			}     
		}else{         
			$secretkey = \app\core\TokenAuth6238::generateRandomClue();         
			$_SESSION['secretkey'] = $secretkey;         
			$url = \app\core\TokenAuth6238::getLocalCodeUrl($_SESSION['user_id'], 'Awesome.com', $secretkey, 'Awesome App');         
			$this->view('User/twofasetup', $url);     
		} 
	} 
}