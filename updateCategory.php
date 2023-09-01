<?php
session_start();
$_SESSION["updateCategory"]="";

?>

<?php

include("db_connection.php");

if(isset($_POST) && !empty($_POST)){

$category_id=$_POST["categoryId"];

if(isset($_POST['categoryName'])){
    $category=$_POST["categoryName"];
    echo $category;
}
 
if(isset($_POST['status'])){
    $categoryStatus=$_POST["status"];
    echo $categoryStatus;
}

 



  // ce stands for cetogery edit
  $cequery="UPDATE category SET  category_name='$category', Status='$categoryStatus'  WHERE category_id=$category_id ";
  $ceresult=mysqli_query($connect, $cequery);
  if(!$ceresult){
  echo "Updation failed" . mysqli_error($connect);

  }
  else{
  $_SESSION["updateCategory"]="<div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> Province Was Updated</div>";
      header( 'Location:admin_dashboard.php');

  }
  }
?>

