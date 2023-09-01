<?php include(  'db_connection.php'  ); ?>
<html lang="eng">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery-3.5.1.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>
.sticky{
position:sticky;
}

</style>
</head>

<body>
<div class="container border border-dark mt-3">

<div class="display-3 text-white text-center"
style="background-image: linear-gradient(90deg, #161d6f 0%, #090979 35%, #00d4ff 100%);"> Services Detail </div>

</div>

<div class="container mt-3 border border-dark">

<!-- <button type="button" class="btn btn-info btn-lg mt-3" data-toggle="modal" data-target="#addnew"></button> -->

<div class="row mt-3 border ">

<table class="table table-bordered table-hover mt-2 text-center">

<thead class="thead-dark text-center">
<tr>
<th>User Id</th>
<th> Name</th>
<th>CNIC</th>
<th>Category</th>
<th>city</th>
<th>States</th>
<th colspan="2">Actions</th>
</tr>
</thead>


<?php

$query="select sp_id, cnic, sp_name, category, city_id, Status from  service_providor";
$result=mysqli_query($connect, $query);
$i=1;
while($row=mysqli_fetch_array($result)){ ?>

<tbody>
<tr>
<td><?php echo $row['sp_id'];  ?></td>
<td><?php echo $row['sp_name']; ?></td>
<td><?php echo $row['cnic']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['city_id']; ?></td>
<td><?php echo $row['Status']; ?></td>


<td>
<button type="button" class="btn btn-warning btn-sm " data-toggle="modal" data-target="#edit<?php echo $row['sp_id']; ?>">
<span class="glyphicon glyphicon-edit"></span> Edit </button>
<?php// include("UserEditModal.php");    ?>

</td>
<td>
<button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#dell<?php echo $row['sp_id']; ?>">
<span class="glyphicon glyphicon-edit"></span> Delete </button>
	<?php// include("user_delete_modal.php"); ?> 

</td>

</tr>


<?php	} ?>

</tbody>
</table>
