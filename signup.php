<!DOCTYPE html>
<html>
<head>
	<title> REGISTER ACCOUNT</title>
</head>
<body style="background-color: orange">


<img src="ban.jpg" style="height: 200px;width: 100%">
<a href="index.php" >BACK</a>	

<?php

require_once("require/forms.php");
	$signup = new Forms();


$signup->set_action("signup_process.php");
		$signup->set_method("POST");

if(isset($_REQUEST['msg'])){
			$signup->set_message($_REQUEST['msg']);
		}

$signup->signup_form();


?>
</body>
</html>