<?php
session_start();
include ("connect_db.php");
include ("functions.php");

addlike($con);
//redirect the index page and post page
header('Location: http://localhost/nextK/index.php');


?>