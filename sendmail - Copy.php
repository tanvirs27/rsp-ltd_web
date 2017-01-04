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
	
	
	
//	echo "Thank you for your valuable feedback\n";
?>

<!DOCTYPE html>

<!--
 * Author: Tanvir Shahriar Rifat and Rf Noman
 * Template used from GraphBerry
-->

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RSP Charcoal BD LTD</title>
	<link rel="icon" type="image/png" href="img/logo1.png"
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<script src="js/modernizr.custom.js"></script>
	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>


<body>	

	<div class="loader2">
		<div class="project-loader">
		<p><font color="black" size="20%">Thank you for your valuable feedback</p>
			<div style="text-align:center; margin-bottom: 50px">
					<a href="index.html" class="btn btn-primary2">RETURN TO HOME</a>
			</div>
		</div>
	</div>

</body>
</html>