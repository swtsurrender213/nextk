<?php

//*****this will take some error strings and output form with it

//**this has own perimeter error ******//
//**default value error is blank means programmer not enter & value them $error will set to ""// 
function login_form_with_errors($error="")
{ ?>

<div class="row">
<div class="large-12 colunms">
	
	<div class="row">
	   <div class="large-8 columns">
	   <img style="margin-top:170px; margin-right:80px;" src="http://localhost/nextK/pictures/logo1.png">
	   <p class="quote" style="color:white; margin-left:240px; margin-top:-40px;"><strong>Where People customize with cars.</strong></p>
	   <p class="quote1" style="color:white; margin-left:80px;">Share your creativity, <br><strong>CONNECT</strong> with others , <strong>MAKE,</strong> new Friends.</p>
	   <div class="welcome-row">
	   <div class="welcome-inner">
	   
	   <div class="welcome-user">
	   <a href="http://localhost/nextK/index.php"><img src="http://localhost/nextK/pictures/car1.jpg"></a>
	   </div>
	   
	   <div class="welcome-user">
	   <a href="http://localhost/nextK/index.php"><img src="http://localhost/nextK/pictures/car2.jpg"></a>
	   </div>
	   <div class="welcome-user">
	   <a href="http://localhost/nextK/index.php"><img src="http://localhost/nextK/pictures/car3.jpg"></a>
	   </div><!-- end of user-->
	   <div class="code">
	   <p style="margin-top:80px;"><a href="">Terms of Service</a> - <a href="">Privacy Policy</a> - <a href="">Contact</a> - <a href="">About</a></p>
	   </div>
	   <div class="copyright">
	   <p style="color:white; margin-top:15px; font-size:13px;">Copyright © 2015 NextKustoms Media Co.. All rights reserved. Powered by TKN Production</p>
	   </div>
	   
	   <!-- end of last user-->
	   </div><!-- end of inner-->
	   </div><!-- end of row-->
	   </div><!-- end of column-->
  
  <div class="row">
      <div class="large-4 columns">
	  <form action="index.php" method="Post">
	  <div style=" margin-top: 140px; margin-left:80px;" class="row">
				  <label><h3 style="color:white;">Register:</h3></label>
					<div class="small-2 columns">
					  <label for="userName" style="color:white" class="right inline">Username</label>
					</div>
					<div class="small-8 columns">
					  <input name="usernamE" font style="color:white" type="text" id="userName" placeholder="Username">
					</div>
					
				  </div>
				  
				<div style="margin-left:80px;" class="row">
					<div class="small-2 columns">
					  <label for="right-label" style="color:white" class="right inline">Password</label>
					</div>
					<div class="small-8 columns">
					  <input name="pasword" font style="color:white" type="text" id="password" placeholder="Password">
					</div>
				  </div>
				  
				  <div style="margin-left:80px;" class="row">
					<div class="small-2 columns">
					  <label for="right-label" style="color:white" class="right inline">RePassword</label>
					</div>
					<div class="small-8 columns">
					  <input name="pasword" font style="color:white" type="text" id="password" placeholder="Confirm Password">
					</div>
				  </div>
					
					<div style="margin-left:80px;" class="row">
					<div class="small-2 columns">
					  <label for="right-label" style="color:white" class="right inline">Email</label>
					</div>
					<div class="small-8 columns">
					  <input name="email" font style="color:white" type="text" id="right-label" placeholder="Email">
					  <input type="submit" name="Register">
					</div>
				  </div> 
	  </form>
	  
	  
	  
          <form action="index.php" method="Post">
			  <div class="row">
				<div style="margin-left:80px;" class="small-8 columns">
				  <div style="margin-top: 60px;" class="row">
				  <label><h3 style="color:white;">Sign In:</h3></label>
					<div class="small-2 columns">
					  <label for="right-label" style="color:white;" class="right inline">Username</font></label>
					</div>
					<div class="small-8 columns">
					  <input name="userName" font style="color:white" type="text" id="right-label" placeholder="Username">
					</div>
				  </div>
				  
				<div class="row">
					<div class="small-2 columns">
					  <label for="right-label" style="color:white" class="right inline">Password</label>
					</div>
					<div class="small-8 columns">
					  <input name="password" type="password" id="right-label" placeholder="Password">
					  <input type="submit" name="submit">
					</div>
					
				  </div>  
				  
				  
				</div>
				
			  </div>
			  <?php 
		//check any errors
		if($error!="");
		echo '<p style="color: orange;">'.$error.'</p>'; ?>
        </form>
      </div>
	
	</div>

	</div>
		
</div></div>
	

 <?php }// end of login form 
 
 function get_posts($con)
 {
		$sql2="SELECT * FROM posts";
		$result2=mysqli_query($con,$sql2) or die($mysqli_error($con));
		?>
		<div class="row">
		<div class="large-6 large-centered columns">
		<?php
		while($row=mysqli_fetch_assoc($result2)){
		echo '<div style="opacity:0.5;" class="panel">';
		echo '<h1>'.$row["postTitle"].'</h1>';
		echo '<p>' .$row["postContent"].'<br>';
		echo $row["postDate"].'</p>';
		echo'</div>';
		}?>
		</div>
		</div>
		<?php
		
		//echo any messages to the user
		if(isset($_GET["addpost"])){
		alert_user("success","You have shared a post");
		}
		
		if(isset($_GET["deleted"])){
		alert_user("success","You have delete a post");
		}
		
		// catch the return value of the in a variable
		
function delete_post($con){

		// sql query statement
		$sql='DELETE FROM `posts` where postId='.$_GET["postid"];
		// execute query
		mysqli_query($con,$sql) or die(mysqli_error($con));
}
 }?>