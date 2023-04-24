<?php
namespace app\controllers;

class About extends \app\core\Controller{
	public function index(){
		$about = new \app\models\About();
		$about = $about->getText();
		$this->view('About/index', $about);
	}
}