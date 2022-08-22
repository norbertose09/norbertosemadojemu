<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$text = $_POST['text'];
	
	if (empty($name) || empty($email) || empty($phone) || empty($text)) {
		echo "please fill in all fields";
	}
	else {

//recipient - replace your email here
	$to = 'norbertose09@gmail.com';	
	//sender - from the form
	$from = $name . ' <' . $email . '>';
	
	//subject and the html message
	$subject = 'Message via norbert madojemu website from ' . $name;	
	$message = 'Name: ' . $name . '<br/><br/>
		       Email: ' . $email . '<br/><br/>		
		       Message: ' . nl2br($text) . '<br/>';

	//send the mail
	$result = mail($to, $subject, $message);
	
	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your message.';
		else echo 'Sorry, unexpected error. Please try again later';	}
}

}



?>