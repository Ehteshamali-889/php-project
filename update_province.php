<?php
session_start();
$_SESSION["update_province"]="";

?>


<?php
include("db_connection.php");
if(isset($_POST) && !empty($_POST)){

$province="";
$province_id="";
$province_id=$_POST["provinceid"];

if(isset($_POST['provincename'])){
$province=$_POST['provincename'];
//echo $province_id;
//echo $province;

}
// pe stands for province edit
$pequery="UPDATE province SET  province_name='$province'  WHERE province_id=$province_id ";
$peresult=mysqli_query($connect, $pequery);
if(!$peresult){
echo "Updation failed" . mysqli_error($connect);

}
else{
$_SESSION["update_province"]="<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Province Was Updated</div>";
    header( 'Location:admin_dashboard.php');

}
}
?>
