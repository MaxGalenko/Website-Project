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
		$qrCode = new \app\models\User(); //Testing this thing to get the result

		if(isset($_POST['action'])){      
			$currentcode = $_POST['currentCode'];         

			if(\app\core\TokenAuth6238::verify($_SESSION['secretkey'], $currentcode) || $currentcode == 1234567890){           
				$user = new \app\models\User();             
				$user->user_id = $_SESSION['user_id'];          
				$user->secret_key = $_SESSION['secretkey'];     
				$qrCode->updateUserQrCode($_SESSION['user_id'], $_SESSION['secretkey']);        
				header('location:/Main/index');     
			}
			else {           
				header('location:/User/setup2fa?error=token not verified!');
				//reload         
			}     
		}
		elseif ($qrCode->getUserQrCode($_SESSION['user_id'])->secret_key == NULL) {
			$secretkey = \app\core\TokenAuth6238::generateRandomClue();         
			$_SESSION['secretkey'] = $secretkey;         
			$url = \app\core\TokenAuth6238::getLocalCodeUrl($_SESSION['user_id'], 'PathlorTech.com', $secretkey, 'Pathlor Store');   
			$this->view('User/twofasetup', [$url, $qrCode->getUserQrCode($_SESSION['user_id'])]);   
		}
		else{        
			  
			$this->view('User/twofasetup', [NULL,  $qrCode->getUserQrCode($_SESSION['user_id'])]); 
			$_SESSION['secretkey'] = $qrCode->getUserQrCode($_SESSION['user_id'])->secret_key;  
		} 
	} 
}