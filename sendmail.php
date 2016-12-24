<?php

	$name= $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$comment= $_POST['comment']; 
	
	
	$to      = 'contact@rsp-bd.com';
	$subject = 'Contact form comment';
	$message = 'Name: '.$name. "\r\n" .
				'Email: '.$email. "\r\n" .
				'Phone: '.$phone. "\r\n" .
				'Comment: '.$comment. "\r\n";
				
	$headers = 'From: admin@rsp-bd.com' . "\r\n" .
    'Reply-To: admin@rsp-bd.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	
	
	echo "Thank you for your valuable feedback\n";



?>