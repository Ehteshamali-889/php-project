<?php
session_start();
$_SESSION["updateCategory"]="";

?>

<?php

include("db_connection.php");

if(isset($_POST) && !empty($_POST)){

$category_id=$_POST["userId"];

if(isset($_POST['userName'])){
    $category=$_POST["userName"];
    echo $category;
}
 


 



  // ce stands for cetogery edit
  $cequery="UPDATE user SET  user_name='$category'  WHERE user_id=$category_id ";
  $ceresult=mysqli_query($connect, $cequery);
  if(!$ceresult){
  echo "Updation failed" . mysqli_error($connect);

  }
  else{
  $_SESSION["updateuser"]="<div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> User Was Updated</div>";
      header( 'Location:admin_dashboard.php');

  }
  }
?>

