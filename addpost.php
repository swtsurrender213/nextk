<?php
include("header.php");

//if the form has submitted
if(isset($_POST["submit"])){
	//check for errors
	$error=check_addpost_form_error();
	if($error==""){
	// do something	
	add_post($con);	
		
		
	}// end of error
	else{
		show_addpost_form($error);
	
	}
} // end of submit
//first time to sign up
else{
show_addpost_form();	
}

include("footer.php");
?>
