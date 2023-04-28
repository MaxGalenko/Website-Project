<?php
namespace app\controllers;

class About extends \app\core\Controller{
	public function index(){
		$about = new \app\models\Info();
		$about = $about->getText();
		$this->view('About/index', $about);
	}

	public function edit(){
		$about = new \app\models\Info();
		$about = $about->getText();
		if(isset($_POST['action'])){
			$about->about_text = $_POST['about_text'];
			$about->updateAboutText();
			header('location:/About/index');
		}else{
			$this->view('About/edit', $about);
		}
	}
}