<?php
namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Contact extends \app\core\Controller{
	public function index() {
		if(isset($_POST['send'])) {
			$mail = new PHPMailer(true);

			$mail->isSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPAuth = true;
			$mail->Username = "maxymgalenko@gmail.com";
			$mail->Password = "hyxmjcmckdccypkm";
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			$mail->setFrom($_POST['email']);
			$mail->addAddress('maxymgalenko@gmail.com');

			$mail->isHTML(true);

			$mail->Subject = $_POST['subject'];
			$mail->Body = $_POST['message'];

			$mail->addReplyTo($_POST['email'], $_POST['name']);

			$mail->send();

			header("location:/Contact/index");
		}else {
			$this->view("Contact/index");
		}
	}
}