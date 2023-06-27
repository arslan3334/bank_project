<!DOCTYPE html>
<html>
<head>
	<title>WITHDRAW AMOUNT</title>
</head>
<body style="background-color: orange">
<img src="ban.jpg" style="height: 200px;width: 100%">	
<a href="index.php" >BACK</a>
	<?php
require_once("require/forms.php");

$forgot = new Forms();

$forgot->set_action("forgot_process.php");
$forgot->set_method("POST");

if(isset($_REQUEST['msg'])){
			$forgot->set_message($_REQUEST['msg']);
		}

		
		$forgot->withdraw();

?>

</body>
</html>


