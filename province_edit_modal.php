<style>
	.block{
		backdrop : static;
	}
</style>

<div class="modal fade block" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<center><h4 class="modal-title font-weight-bold text-center" id="myModalLabel">Edit Province</h4></center>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">
<?php
// ep stands for edit province
// getting corresponding province name for editing
	$province_id=$row['province_id'];
	$epquery="select * from province WHERE province_id='$province_id'";
	$epresult=mysqli_query($connect , $epquery);
	$eprow=mysqli_fetch_array($epresult);
	$ep_name=$eprow['province_name'];


?>

<div class="container border border-dark ">

<form name="province_edit"  action="update_province.php" method="POST" >

  <div class="form-group">
	<input name="provinceid" type="hidden" class="form-control" id="provinceid" value="<?php echo $province_id; ?>">
	<label for="ProvinceName">Change Province name</label>
    <input name="provincename" id="provincename" type="text" class="form-control" id="provincename" value="<?php echo $ep_name; ?>">
  </div>
  


<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel </button>

<button id="updateprovince" type="submit" class="btn btn-warning">
<span class="glyphicon glyphicon-floppy-disk"></span> Update</a>
</button>

</form>
</div>


</div>
</div>
</div>
</div>
