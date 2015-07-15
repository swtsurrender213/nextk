<?php

// Alerts users actions
// type= successon or failure
function alert_user($type, $message){
	
	if($type=="success"){
		
		echo '<div data-alert class="alert-box success radius">';
		echo $message;
		echo '<a href="#" class="close">&times;</a>';
		echo '</div>';
	}// end of success alert
	
	else {
		echo '<div data-alert class="alert-box alert radius">';
		echo $message;
		echo '<a href="#" class="close">&times;</a>';
		echo '</div>';
	}// end fail alert
	
}// end alert_user	

/***********************************/
// returns the user photo

function get_user_photo($con,$userId){
	$sql='SELECT photo from users where userId='.$userId;
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	$row=mysqli_fetch_assoc($result);
	return $row["photo"];
}// end user photo

 // this function restore number likes for particular post & inputs connection and postId
function get_post_likes($con,$postId){
	
		$sql='SELECT count(*) as postCount FROM likepost where postId= '.$postId;
		$result=mysqli_query($con,$sql) or die($mysqli_error($con));
		$PostCount=mysqli_fetch_assoc($result);	
		
		return $PostCount["postCount"];
		
} // end like post

// this function restore number username for particular post & inputs connection and userId
function get_username($con,$userId){
	
		$sql='SELECT username FROM users where userId='.$userId; 
		$result=mysqli_query($con,$sql) or die($mysqli_error($con));
		$Username=mysqli_fetch_assoc($result);	
		
		//print_r($Username); exit;
		
		return $Username["username"];
		
} // end like post
function get_userid($con){
	
		$username=$_SESSION["userName"];
		$sql="SELECT userId FROM users where username='".$username."'"; 
		$result=mysqli_query($con,$sql) or die($mysqli_error($con));
		$Userid=mysqli_fetch_assoc($result);	
		
		//echo $Userid["userId"]; exit;
		//print_r($Username); exit;
		
		return $Userid["userId"];
		
}// end userid


		
	

	//user logged in
	else{
		
	echo '<li><a href="login.php">Login</a></li>';
	}
	//user not logged in	
	
	
	
} // end end of get nav li

// check username exists ... returns true or false
function check_username_exists(){
		include ("connect_db.php");
		$userename=$_POST["useRname"];
		$sql="SELECT username FROM users where username='$userename'";
		 // run the query
		$result=mysqli_query($con,$sql) or die($mysqli_error($con));
		$rowcount=mysqli_num_rows($result);

		if($rowcount==1){
			return true;
		}
		else{
			return false;
		}
		
} // end of check username exists

//check liked

function check_liked($postId,$userId){

		  include ("connect_db.php");
		  
		  $sql="SELECT * FROM likepost where postId=$postId and userId=$userId";
		  //run the query
		  $result=mysqli_query($con,$sql) or die($mysqli_error($con));
		  $rowcount=mysqli_num_rows($result);

		if($rowcount==1){
			return true;
		}
		else{
			return false;
		}// end of row
}// end of check liked
?>