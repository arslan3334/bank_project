<?php

require_once("require/database_setting.php");
	require_once("require/database_class.php");


 extract($_REQUEST);



$database = new Database($hostname, $username, $password, $database);

 if (isset($register)) {
 	echo"<pre>";
 	print_r($_REQUEST);
 echo "</pre>";


$result = $database->insertsignup($fullname,$email,$account,$phone);	





if($result){
			// echo "<h1>You Are REGISTERED Successfully...!</h1>";

	$messag = "<p style='color:green;'>Your ACCOUNT REGISTERED Successfully </p>";
			header("location:signup.php?msg=$messag&color=green");
		}
		else
		{
			$messag = "<p style='color:red;'>you are NOT registered</p> ";
			header("location:signup.php?msg=$messag");
		}

}
?>