<?php

class Contact extends Controller 
{
	public function index() 
	{
		$site = $this->model('Site');
		$page = $this->model('Pagecontact');
		$aboutpage = $this->model('Pageabout');
		$pageDesc = "(214) 702-6752".strip_tags($page->ContactContent);

		$this->view('contact/index', array(
			'sitename' => $site->sitename,
			'slogan' => $site->slogan,
			'title' => 'Contact Us',
			'contactPhone' => $site->contactPhone,
			'pageTitle' => $page->pageTitle,
			'contactContent' => $page->ContactContent,
			'aboutContent' => $aboutpage->content,
			'sociallinks' => $site->sociallinks,
			'pageDesc' => $pageDesc
		));
	}

	public function email()
	{
		$mailer = $this->model('PHPmailer');

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = trim($_POST["name"]);
    		$email = trim($_POST["email"]);
    		$message = trim($_POST["message"]);

    		$email_body = "";
			$email_body = $email_body . "Name: " . $name . "<br>";
			$email_body = $email_body . "Email: " . $email . "<br>";
			$email_body = $email_body . "Message: " . $message;

			$mail = new PHPMailer();

			$mail->SetFrom($email, $name);
			$mail->AddAddress("adamaoc@gmail.com", "Adam Moore");
			$mail->Subject    = "ORG-Websites Contact Form Submission | " . $name;
			$mail->MsgHTML($email_body);
			if($mail->Send()) {
		        header("Location: /success/");
		        exit;
		    } else {
		        $_POST['error_message'] = "There was a problem sending the email: " . $mail->ErrorInfo;
		        header("Location: /contact/");
		    }
		}
		$this->view('contact/email');
	}
}