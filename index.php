<?php 
	
	require_once("require/forms.php");
	$form = new Forms();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BANK MAIN PAGE</title>
</head>
<body style="background-color: orange">
	<center>	

	<img src="ban.jpg" style="height: 200px;width: 100%">	
	<h1>BANK PROJECT</h1>


	
	<a href="reset.php">DEPOSITE AMOUNT</a>

	<?php 
		$form->set_action("login_process.php");
		$form->set_method("POST");
		if(isset($_REQUEST['msg'])){
			$form->set_message($_REQUEST['msg']);
		}

		$form->login_form();
	?>
<a href="forgot.php">WITHDRAW AMOUNT</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="signup.php"> SIGN UP OR REGISTER</a>

</center>
</body>


</html>

