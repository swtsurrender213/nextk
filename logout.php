<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

</body>
<?php 
//unset($_SESSION["username"]);

//destroy the session
session_destroy();
header('Location: http://localhost/nextK/index.php');
?>


</body>
</html>