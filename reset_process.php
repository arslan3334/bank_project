<?php

require_once("require/database_setting.php");
require_once("require/database_class.php");


 extract($_REQUEST);

$database = new Database($hostname, $username, $password, $database);

 if (isset($change)) {
 	echo"<pre>";
 	print_r($_REQUEST);
 echo "</pre>";

$result3 = $database->select2($account);
if ($result3->num_rows>0) {

 $result = $database->update($account,$amount);	


 if($result){
			
	$messag = "<p style='color:green;'>Your amount is deposited Successfully </p>";
			header("location:reset.php?msg=$messag&color=green");
		}

}
		else
		{
			$messag = "<p style='color:red;'> Amount deposite FAILED INVALID ACCOUNT NUM...! </p> ";
			header("location:reset.php?msg=$messag");
		}


}



?>