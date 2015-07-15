<?php
// Start the session
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to NextKustoms.com</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
	
  <style type="text/css">
body
{
	background: url('http://assets6.thrillist.com/v1/image/1359559/size/tmg-article_main_wide_2x/30-brilliantly-modified-cars-for-the-zombie-apocalypse') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
 input[type=text], textarea
        {
            border: 1px solid #ccc;
        }
        input[type=text]:focus, textarea:focus
        {
            background-color: #1d75fd;
            border: 1px solid #ccc;
        }
.welcome-row
{
	overflow: hidden;
}
.welcome-inner
{
	padding: 40px;
	overflow: auto;
	margin-top: 120px;
}
.welcome-user
{
  width: 70px;
  height: 70px;
  float: left;
  border: 5px solid rgba(255, 255, 255, 0.62);
  border-radius: 50px;
  margin-right: 8px;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
  margin-top: 5px;
  
}
.welcome-user img
{
  width: 70px;
  height: 60px;
  border-radius: 50%;	
}

.welcome-user a 
{
  float: left;
  height: 70px;
  overflow: hidden;
}

.welcome-user{ transition: all .2s ease-in-out; }
.welcome-user:hover { transform: scale(1.1); }

.code a:hover{color:white;}
.logout :hover{color:white;}
</style>
  
  </head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">

  <section class="top-bar-section">
    <!-- Right--->
    <ul class="right">
	<li>
	<?php if(isset($_SESSION["userName"])){
	echo '<div style="margin-right:15px; color: #fff;"><a class"logout" href="logout.php">LogOut</a>Hello <strong>'.$_SESSION["userName"].'!</strong>';
	}
	
		else{
		echo '<div style="margin-top:10px; margin-right:15px; color: #fff;">Hello <strong>Visitor!</strong>
		</div>'; }?>
    </li>
	</ul>
	<div class="logo"><a href="http://localhost/nextK/index.php"><img src="http://localhost/nextK/pictures/logon.png"></a></div>

	</section>    
</nav>