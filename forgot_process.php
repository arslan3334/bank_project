<?php

require_once("require/database_setting.php");
require_once("require/database_class.php");


extract($_REQUEST);

$database = new Database($hostname, $username, $password, $database);

if (isset($forgot)) {
 	echo"<pre>";
 	print_r($_REQUEST);
 echo "</pre>";

$result2 = $database->select2($account);
if ($result2->num_rows>0) {

 $result = $database->withdraw($account,$amount);	

  if($result){
			
		$messag = "<p style='color:green;'>Your amount is withdrawn Successfully </p>";
			header("location:forgot.php?msg=$messag&color=green");
}
	

		
	}	

	else{
			$messag = "<h1 style='color:red;'>Incorrect ACCOUNTNUM</h1> ";
			header("location:forgot.php?msg=$messag&color=red");
		}

}




?>