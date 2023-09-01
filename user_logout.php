
<?php
    unset($_SESSION['user_cnic']); 
	session_destroy();
	header('location:index.php');

?>
