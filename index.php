<?php include "header.php";
include "connect_db.php";
include "functions.php";


if(!isset($_POST["submit"]))
{
	if(isset($_GET["login"]) or isset($_SESSION["userName"]))
	get_posts($con);
    else
	login_form_with_errors();
	} 
// connect to the database.. and validate the user
else{
	//echo "hello"; exit;
	include "connect_db.php";
	

	$error="";
	
	if(empty($_POST["userName"])){
		$error .="Please enter username<br>";
	}
	if(empty($_POST["password"])){
		$error .="Please enter password<br>";
	}
	
	if($error==""){
		//superglobal from values and put them in local varables
		
		
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
		header('Location:http://localhost/nextK/index.php?login=1');
		//echo '<a style="margin-top:10px; margin-right:15px; color: #fff;" href="logout.php"><strong>Logout '.$_SESSION["userName"].'!</strong> </a>';
		$row=mysqli_fetch_assoc($result);
		
		
		$userid=$row["userId"];
		
		get_posts($con);
		
		}
			
		//redirect user to the index page
		//header('Location: http://localhost/faceapp/faceB/index.php');
		
		else{
			//incorrect username and password
			login_form_with_errors("Your profile does not exist");
		}

		mysqli_close($con); 
		}//end of error
			else {
			
			login_form_with_errors($error);
			}	
	}//end of submit
	
include "footer.php"; ?>