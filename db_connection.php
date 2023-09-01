

<?php
$name= "localhost";
$username="root";
$password="";

$connect= mysqli_connect( $name , $username , $password );

if (!$connect) {
die ("Connection failed:" .mysqli_connect_error());

}
   // echo "connect succesfully " ;

$select_db = mysqli_select_db($connect,'project');
if(!$select_db)
die ("Connection failed:" .mysqli_connect_error());


?>