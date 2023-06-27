<!DOCTYPE html>
<html>
<head>
	<title>DEPOSITE</title>
</head>
<body style="background-color: orange;">
<img src="ban.jpg" style="height: 200px;width: 100%">
<a href="index.php" >BACK</a>
	<?php
require_once("require/forms.php");

$reset = new Forms();

$reset->set_action("reset_process.php");
		$reset->set_method("POST");

		if(isset($_REQUEST['msg'])){
			$reset->set_message($_REQUEST['msg']);
		}

		$reset->deposite();

?>

</body>
</html>


