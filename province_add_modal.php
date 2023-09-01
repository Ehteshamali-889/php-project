
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">


<div class="modal-header">
<center><h4 class="modal-title font-weight-bold text-center" id="myModalLabel">Add New Province</h4></center>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">

<div class="container border border-dark ">

<form name="province_add"  action="add_province.php" method="POST" onsubmit='return validateForm()'>

  <div class="form-group">

	<label for="ProvinceName">Enter new Province</label>
    <input name="provincename" type="text" class="form-control" placeholder="Enter Province" id="provincename" >
  </div>
  
  




 
<script>

function validateForm() {
 var province= document.forms["province_add"]["provincename"].value;

 if(province == "" )
 
 {
 
 	 alert("Form must be filled out");
    return false;
 }

 }  
 </script>
 


<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel </button>

<button type="submit" class="btn btn-info">
<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

</button>

</form>
</div>


</div>
</div>
</div>
</div>
