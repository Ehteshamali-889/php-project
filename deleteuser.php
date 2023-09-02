<?php
session_start();
$_SESSION["delete_user"]="NULL";
?>


<?php

if(isset($_GET["id"]) && !empty($_GET["id"])){
$id=$_GET['id'];
//echo $id;
}

include('db_connection.php');
$res="";
$query= "delete from user where user_id='$id'";
$res=mysqli_query($connect,$query);

if(!$res){
echo " qyery Failed".mysqli_error($connect);

}
else{
//echo " Record delete Query is successfully executed";
$_SESSION["add_user"]="<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> User is deleted</div>";


header('Location: admin_dashboard.php');

}



?>
