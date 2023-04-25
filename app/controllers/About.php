<?php
namespace app\controllers;

class About extends \app\core\Controller{
	public function index(){
		$about = new \app\models\About();
		$about = $about->getText();
		$this->view('About/index', $about);
	}

	public function edit(){
		$about = new \app\models\About();
		$about = $about->getText();
		if(isset($_POST['action'])){
			$about->text = $_POST['text'];
			$about->update();
			header('location:/About/index');
		}else{
			$this->view('About/edit', $about);
		}
	}
}