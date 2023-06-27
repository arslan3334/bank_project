<!DOCTYPE html>
<html>
<head>
	<title> USER ACCOUNT INFO</title>
</head>
<body style="background-color: orange">
<img src="ban.jpg" style="height: 200px;width: 100%">

<a href="index.php" style="float:right"> LOGOUT</a>	
<fieldset style="color: white;background-color: green;width: 100%">
	<legend>USER  DATA</legend>
<table border="2px">


<?php 
	require_once("require/database_setting.php");
	require_once("require/database_class.php");
	
	$database = new Database($hostname, $username, $password, $database);

	 extract($_REQUEST);

	if(isset($_POST['login'])){
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";

		$result = $database->login_process($account);		
		/*echo "<pre>";
		var_dump($result);*/
    if($result->num_rows > 0){
			echo "<h1>Your data is  Successfully...!</h1>";
while ($data=mysqli_fetch_assoc($result)) {


?>
<tr>
<th> USER NAME : </th>
<td>

<?php
	echo $data['fullname'];
	 echo "</br>";

	?>


</td>
</tr>

<tr>
<th> USER EMAIL : </th>
<td>

<?php 

	echo $data['email'];
	 echo "</br>";

?>


</td>
</tr>

<?php 


?>


</td>
</tr>

<tr>
<th> USER PHONE : </th>
<td>

<?php 
	echo $data['phone'];
	 echo "</br>";

?>


</td>
</tr>

<?php 


?>


</td>
</tr>

<tr>
<th> USER ACCOUNT NUMBER : </th>
<td>

<?php 

	echo $data['accountnum'];
	 echo "</br>";

?>


</td>
</tr>

<?php 



?>


</td>
</tr>

<tr>
<th> USER ACCOUNT BALANCE : </th>
<td>

<?php 

	echo $data['balance'];


?>


</td>
</tr>

<?php 

}


		}

		else{
			$messag = "Incorrect ACCOUNT NUMBER";
			header("location:index.php?msg=$messag&color=red");
		}


	}

?>
</table>
</fieldset>

</body>
</html>





