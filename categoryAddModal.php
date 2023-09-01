
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">


<div class="modal-header">
<center><h4 class="modal-title font-weight-bold text-center" id="myModalLabel">Add New Category</h4></center>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">

<div class="container border border-dark ">

<form name="category_add"  action="add_category.php" method="POST" enctype="multipart/form-data" onsubmit='return validateForm()'>

  <div class="form-group">
    <label for="categoryName">Enter new Cetogery</label>
    <input name="categoryName" type="text" class="form-control" placeholder="Enter Category Name" id="categoryName">
  </div>
  <div class="form-group">
    <label for="categoryStatus">Status</label>
    <input name="categoryStatus" type="text" class="form-control" placeholder="Enter categor status " id="categoryStatus" >
  </div>
  <div class="form-group">
    <label for="categoryImage"> Cetogery Image</label>
    <input name="categoryImage" type="file" class="form-control" placeholder="Submit Image of your Buissnes" id="categoryimage" >
  </div>
  
  




 
<script>

function validateForm() {
 var catogery= document.forms["category_add"]["categoryName"].value;
 var catogery1= document.forms["category_add"]["categoryStaus"].value;
 var catogery2= document.forms["category_add"]["categoryId"].value;

 if(catogery == "" && catogery1== "" catogery2== "")
 
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
