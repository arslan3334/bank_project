<?php 

	require_once("require/database_setting.php");
	require_once("require/database_class.php");
	
	$database = new Database($hostname, $username, $password, $database);

	// $result = $database->select("*" , "posts");
	$result = $database->select("post_id, post_description" , "posts");

	if($result->num_rows > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<pre>";
			print_r($row);
			echo "</pre>";
		}
	}

?>