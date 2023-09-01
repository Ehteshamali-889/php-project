<?php
session_start();
$_SESSION["add_province"]="NULL";
?>

<?php 
include("db_connection.php");
$province="";

if(isset($_POST) && !empty($_POST)){
//echo "Hello something bad in condition";
   if(isset($_POST["provincename"])){
      $province=$_POST['provincename'];
	  //echo $province;
   }
   
$query="insert into province (province_name) 
values ('$province')";
$result=mysqli_query($connect,$query);

if(!$result){
echo "Data not inserted" .mysqli_error($connect);
}
else{
//echo "Data is inserted successfully" ;
$_SESSION["add_province"]="<div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> New Province is added</div>";

header("location: admin_dashboard.php");
}



}

/*$query="TRUNCATE TABLE provinces";
$result=mysqli_query($connection,$query);
if(!$result){
echo "Table".mysqli_error($connection);
}
else{
echo "Table is truncated" ;

}
*/





?>