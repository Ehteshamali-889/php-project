<?php 
	 session_start();
		
	if(!isset($_SESSION))
	{
		header('location:index.php');
		exit;
	}
	
?>
<?php include(  'db_connection.php'  ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>

<style>

.side_btn {
 width : 100%;
}

/* Darker background on mouse-over */
.side_btn:hover {
  background-color: RoyalBlue;
}
</style>



    <body> 


     
 
<div class="container border border-dark mt-3 text-info text-left pb-2 bg-info">
<div class="text-white"><h1> Welcome <?php echo $_SESSION['admin_name']; ?> </h1>
<small class="text-warning font-weight-bolder font-italic "> Admin panel </small>
<a class="btn btn-info text-white font-italic font-weight-bold mt-n4 float-right" href="logout.php"> Log-out </a>
</div>
</div>


<div class="container-fluide mt-2">
<div class="row">
<div class="col-2 border border-dark mr-3 ml-5 bg-secondary" >





<div class=" text-center  mt-5 bg_color" >
<button type="button" id="user"  class="btn secondary p-2 font-weight-bold  ">user:<i class="fa fa-user"></i></button>
</div>

<div class=" text-center  mt-5 bg_color" >
<button type="button" id="categories"  class="btn secondary p-2 font-weight-bold ">Category</button>
</div>





  


<div class="text-center  mt-5 bg_color" >
<button type="button" id="provinces"  class="btn secondary p-2 font-weight-bold " >Provinces</button>
</div>


</div>


<div id="view" class="col-9 "> 
 
</div>

</div>


</div>
 <script src="admindashboard_ajax.js"> </script>


</body>
</html>
