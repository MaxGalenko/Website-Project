<?php
namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;

class Contact extends \app\core\Controller{
	public function index() {
		$contact = new \app\models\Info();
		$contact = $contact->getText();
		if(isset($_POST['send'])) {
			$mail = new PHPMailer(true);

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'maxymgalenko@gmail.com';
			$mail->Password = 'hyxmjcmckdccypkm';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			$mail->setFrom('maxymgalenko@gmail.com');
			$mail->addAddress('maxymgalenko@gmail.com');

			$mail->isHTML(true);

			$mail->Subject = $_POST['subject'];
			$mail->Body = $_POST['message'];

			$mail->addReplyTo($_POST['email'], $_POST['name']);

			$mail->send();

			header('location:/Contact/sent');
		}else {
			$this->view('Contact/index', $contact);
		}
	}

	public function edit(){
		$contact = new \app\models\Info();
		$contact = $contact->getText();
		if(isset($_POST['action'])){
			$contact->contact_text = $_POST['contact_text'];
			$contact->updateContactText();
			header('location:/Contact/index');
		}else{
			$this->view('Contact/edit', $contact);
		}
	}

	public function sent(){
		$this->view('Contact/sent');
	}
}