<?php
// session_start();
// $_SESSION["add_Category"]="NULL";
?>

<?php 
include("db_connection.php");
$category="";

if(isset($_POST) && !empty($_POST)){
//echo "Hello something bad in condition";
   if(isset($_POST["categoryName"])){
      $category=$_POST['categoryName'];
	  echo $category;
   }

   if(isset($_POST["categoryStatus"])){
    $category1=$_POST['categoryStatus'];
    echo $category1;
 } 

    if(isset($_FILES["categoryImage"])){
       $filename=basename( $_FILES['categoryImage']['name']);
       $targetfolder = "uploaded-img/";
 
     $targetfolder = $targetfolder . basename( $_FILES['categoryImage']['name']) ;
    
      if(move_uploaded_file($_FILES['categoryImage']['tmp_name'], $targetfolder))
    
   {
    
   echo "The file ". basename( $_FILES['categoryImage']['name']). " is uploaded";
    
   }
    
   else {
    
   echo "Problem uploading file";
    
   }
 }

$query="insert into category (category_name, status, img) 
values ('$category', '$category1', '$filename')";
$result=mysqli_query($connect,$query);

if(!$result){
echo "Data not inserted" .mysqli_error($connect);
}
else{
//echo "Data is inserted successfully" ;
// $_SESSION["add_category"]="<div class='alert alert-success'>
//   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//   <strong>Success!</strong> New Category is added</div>";

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