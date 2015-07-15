<?php

        $username=mysqli_real_escape_string($con,trim($_POST["userName"]));
		$password=mysqli_real_escape_string($con,trim($_POST["password"]));
		//build our sql statement with the userename and the password
		$sql="SELECT * FROM users where password=SHA1('$password') and username='$username'";
		//echo $sql; exit;
		// run the query
		$result=mysqli_query($con,$sql) or die($mysqli_error($con));
		//get the number of rows
		$rowcount=mysqli_num_rows($result);

		if($rowcount==1){
			//start new session
		$_SESSION["userName"]=$username;
		//header('Location:http://localhost/nextK/index.php');