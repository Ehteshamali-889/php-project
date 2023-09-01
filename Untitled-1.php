<!DOCTYPE html>
<html lang="en">
<head>
  <title>C_registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
 
  
<div class="container-fluid pt-3 border">
 
 
  <div class="row" >
  <div class="col">  <h4 class="text-left text-secondary font-fami"> Online Yelp.com </h4> 
    <h3 class="text-center"> Start your buisness with us  <h3 class="text-right">   </h3>
  
  </h2> </div>
 </div> 
                       </div>
                       <img src="pexels-lumn-399161.jpg" alt="Girl in a jacket" style=" position:absolute; width:100%; height:80%;">     
                       <div class="container pt-3" >
     
      <form name="myForm" action="/action_page.php"  >
     
     <div class="row text-center pt-3">  
      <div class="col">
      <h2 class="text-center text-dark">  Register Your Account Here </h2>
    </div>
    </div>
     
    
        <div class="row mt-5">
 <div class="col border "> 
     <div class="form-group">
      <label for="fname" class="font-weight-bold">First Name:</label>
      <input type="text" class="form-control w-75" id="fname" placeholder="Enter First Name" name="f_name">
    </div>  
  </div>
    
  <div class="col border"> 
      <div class="form-group">
        <label for="name" class="font-weight-bold">Last Name:</label>
        <input type="text" class="form-control w-75" id="L_name" placeholder="Enter Last_Name" name="L_name">
      </div>
</div> 

</div>

        <div class="row">
             
          <div class="col border">
              <div class="form-group">
                <label for="email" class="font-weight-bold">Email:</label>
                <input type="email" class="form-control w-75" id="fname" placeholder="Enter Email" name="email">
                                         </div> 

                               </div>                    
             

              <div class="col border">
              <div class="form-group">
                <label for="pnumber" class="font-weight-bold">Phone#:</label>
                <input type="integer" class="form-control w-75" id="fname" placeholder="Enter Phone Number" name="pnumber">
              </div> 
                                           </div>
                            </div>
        
                            <div class="row ">
      
                              <div class="col border "> 
                                  <div class="form-group">
                                   <label for="province" class="font-weight-bold" >Province:</label>
                                    
                                   <select name="province" id="province" name="province" class="form-control w-75">
                                    <option value="">Select your Province </option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="sindh">Sindh</option>
                                    <option value="KPK">KPK</option>
                                    <option value="Blochistan">Blochistan</option>
                                    <option value="Gilgit">Gilgit</option>
                                  </select>




                                   <!-- <input type="text" class="form-control w-75" id="country" placeholder="Enter Province Name" name="country"> -->
                                 </div>  
                               </div>
                                 
                               <div class="col border"> 
                                   <div class="form-group">
                                     <label for="name" class="font-weight-bold">City:</label>
                                     <input type="text" class="form-control w-75" id="city" placeholder="Enter City Name" name="city">
                                   </div>
                             </div> 
                              </div>


                              

                              
                              <div class="row pt-3">
                              
                                <div class="col font-weight-bold text-center">
                                  <h2 class="text-dark" > Gender</h2>
                                
      
                                
                                    <div class="form-check-inline">
                                     <label for="male">Male: </label>
                                     <input type="radio" class="form-check-input" id="Gender" name="Gender" checked="checked">
                                    
                                     <label for="Female">Female: </label>
                                     <input type="radio" class="form-check-input" id="Gender" name="Gender">
            
                                     <label for="male">Costum: </label>
                                     <input type="radio" class="form-check-input" id="Gender" name="Gender">
                                     
                                 
                                  </div>
                                            </div>   
                            </div>
                                   
                     <span class=" row form-group mt-5 ">
                 <span class="col text-center">
                    <button type="button" class="btn btn-success" onclick="validateForm()">Submit</button> </span>
                      
                      </span>
</form>
    </div>
</div>
                <script>
   function Success()
   {
        
  //    <div class="alert alert-success">
  //    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  //  </div>    
       }
       
       function validateForm() {
  var name = document.forms["myForm"]["f_name"].value;
  var lname = document.forms["myForm"]["L_name"].value;
  var email = document.forms["myForm"]["email"].value;
  var phone = document.forms["myForm"]["pnumber"].value;
  var province = document.forms["myForm"]["province"].value;
  var city = document.forms["myForm"]["city"].value;      
   if (name== "" || lname== ""|| email== "" ||phone== "" || province== "" || city== "") {
     alert("Form must be filled out");
     
   }
   else{
   alert(" Successfully registered");
 } 


}
            </script>


</body>
</html>
