<?php

if(isset($_GET["id"]) && !empty($_GET["id"])){
$id=$_GET['id'];
//echo $id;
}

include('db_connection.php');
$res="";
$query= "delete from category where category_id='$id'";
$res=mysqli_query($connect,$query);

if(!$res){
echo " qyery Failed".mysqli_error($connect);

}
header('Location: admin_dashboard.php');
?>