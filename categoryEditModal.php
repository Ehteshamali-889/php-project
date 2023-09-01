<div class="modal fade" id="edit<?php echo $row['category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<center><h4 class="modal-title font-weight-bold text-center" id="myModalLabel">Edit Category</h4></center>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">
		<?php
// ep stands for edit province
// getting corresponding province name for editing
	$category_id=$row['category_id'];
	$ecquery="select * from category WHERE category_id='$category_id'";
	$ecresult=mysqli_query($connect , $ecquery);
	$ecrow=mysqli_fetch_array($ecresult);
	$ec_name=$ecrow['category_name'];
    $ec_status=$ecrow['Status'];
    $ec_img=$ecrow['img'];

?>

<div class="container border border-dark ">

<form name="Category_edit"  action="updateCategory.php" method="POST" >

  <div class="form-group">
	<input name="categoryId" type="hidden" class="form-control" id="categoryid" value="<?php echo $category_id; ?>">

    <label for="categoryName">Change Category name</label>
    <input name="categoryName" id="categoryname" type="text" class="form-control" id="categoryname" value="<?php echo $ec_name; ?>">

    <label for="status">Change Category Status</label>
    <input name="status" id="status" type="text" class="form-control" id="categoryname" value="<?php echo $ec_status; ?>">

    

</div>
  



<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel </button>

<button id="updateCategory" type="submit" class="btn btn-warning">
<span class="glyphicon glyphicon-floppy-disk"></span> Update</a>
</button>

</form>
</div>


</div>
</div>
</div>
</div>
