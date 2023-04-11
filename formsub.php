<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LEGENDS OF OERTH | Form Submission</title>
<link href="LoOstyles.css" rel="stylesheet" type="text/css">
<link href="formstyles.css" rel="stylesheet" type="text/css">
<link href="gridstyles.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
	if(!empty($_POST["send"]))
	{
	$name = $_POST["name"];	
	$email = $_POST["email"];
	$group = $_POST["group"];
	$newpol = $_POST["newpl"];
	$info = $_POST["info"];
	$toEmail = $_POST["rei.mizer@gmail.com"];
		
	$mailHeaders = "DnD Signup Form Entry" .
	"\r\n Name: " . $name .
	"\r\n Email: " . $email .
	"\r\n What group are you interested in? : " . $group .
	"\r\n Are you a new player? : " . $newpl .
	"\r\n Any other info? : " . $info;
	}
?>
	
	<p>Thank you. Your submission has been received.</p>
	
</body>
</html>