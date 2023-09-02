
<div class="modal fade" id="dell<?php echo $row['category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">


<div class="modal-header">
<center><h4 class="modal-title font-weight-bold text-center text-danger" id="myModalLabel">Delete Category</h4></center>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">

<div class="container-fluid">
<h5><center>Do you want to delete <strong><?php echo $row['category_name']; ?>?
</strong></center></h5>
</div>
  

<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_category.php?id=<?php echo $row['category_id']; ?>" class="btn btn-danger">
<span class="glyphicon glyphicon-trash"></span> Delete</a>
</div>
</div>
</div>
</div>
</div>
