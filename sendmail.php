<?php

	$name= $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$comment= $_POST['comment']; 
		
		
	$email= filter_var($email, FILTER_SANITIZE_EMAIL);
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		
		if(!preg_match("/^[0-9]{0,11}$/",$phone)){
			echo "Please give valid phone no";
		}else{
			
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
			
			echo "<font color='yellow' size='5%'>Thank you for your valuable feedback</font>";
		}
	}else{
		echo "<font color='yellow' size='5%'>*invalid email</font>";
	}
	
	
	
	
//	echo "Thank you for your valuable feedback\n";
?>

