<?php
namespace app\controllers;

class Home extends \app\core\Controller {
    function index()
    {
        $this->view('Home/index');
    }
}