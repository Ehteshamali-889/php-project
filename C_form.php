
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Costomer_form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
</head>
      

      <body class="bg-light" style="background-image:url('img/img4.jpg');">

      <div class="container-fluid pt-3 bg-info fixed-top position-sticky ">
      <div class="row" >          
      <div class="col"> 
      <a href="index.php" class="text-decoration-none"> 
      <h4 class="text-left text-white  font-italic"><img src="img/logo.png" height="70px">
          Homey Lavoro   
      </h4> 
      </a>
      </div>
      </div>

      <div class="row ">
      <div class="col">
      <h3 class="text-center text-white font-italic"> Costumer Registration Form </h3>
      </div>
      </div>
      </div>


      <div class="container mt-2 pb-5 pl-2 pr-2 pt-2">
      <form name="myForm" method="POST" action="costomer_form_action.php">
            <div class="row mt-5">
            <div class="col-lg-12"> <h3 class="text-left text-white font-italic font-weight-bold">  Personal Info: </h3> </div>
            
            <div class="col "> 
            <div class="form-group text-white " style="margin-left:30%; ">
            <label for="name" class="font-weight-bold"> Name: <i class="fa fa-user"></i></label>
            <input type="text" name="name" class="form-control " id="name" placeholder="Enter First Name" required>
            </div>  
            </div>

            <div class="col ">
            <div class="form-group text-white">
            <label for="pnumber" class="font-weight-bold">Phone#: <i class="fa fa-phone"></i></label>
            <input type="integer" name="pnumber" class="form-control w-75" id="pnumber" placeholder="XXXX-XXXXXXX" data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12">
            </div> 
            </div>
            </div>

           

            <div class="row">

            <div class="col ">
            <div class="form-group text-white" style="margin-left:30%;" >
            <label for="email" class="font-weight-bold">Email: <i class="fa fa-envelope"></i></label>
            <input type="email" name="email" class="form-control " id="email" placeholder="Enter Email" required>
            </div> 
            </div> 
            <div class="col ">
            <div class="form-group text-white" >
            <label for="cnic" class="font-weight-bold">CNIC: <i class="fa fa-id-card"></i></label>
            <input  type="int" name="cnic"  id="cnic" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X" class="form-control w-75" required >
            <span class="font-weight-bold" id="confirmCnic"> </span>
            </div> 
            </div>                    
                   
            </div>

            
            <div class="row">

            <div class="col  text-white"> 
            <div class="form-group" style="margin-left:30%;">
            <label for="province" class="font-weight-bold" >Province: <i class="fas fa-city"></i></label>
            <select class="form-control  " name="province" id="province" required>
            <option > Select your province </option>
            <?php 
            include_once("db_connection.php");
            $qr="SELECT  province_name FROM province";
            $res=mysqli_query($connect, $qr)  or die("Error". mysqli_error($connect));
            while($row=mysqli_fetch_array($res)){
            ?>
            <option> <?php echo $row['province_name']; ?> </option>
            <?php	} ?>
            </select>

            
            </div>  
            </div>

            <div class="col"> 
            <div class="form-group" >
            <label for="city" class="font-weight-bold text-white">City:<i class="fas fa-city"></i></label>
            <select class="form-control w-75 " name="city" id="city" required>
            <option> Select your City </option>
            <?php 
            include_once("db_connection.php");
            $qr="SELECT city_id, city_name FROM cities";
            $res=mysqli_query($connect, $qr)  or die("Error". mysqli_error($connect));
            while($row=mysqli_fetch_array($res)){
            ?>
            <option  value=" <?php echo $row['city_id']; ?>" >  <?php echo $row['city_name']; ?> </option>
            <?php	} ?>
            </select>

            </div>
            </div> 
                        </div>


            <div class="row ">

            <div class="col ">
            <div class="form-group text-white" style="margin-left:30%;">
            <label for="address" class="font-weight-bold">Address: <i class="fa fa-address-card "></i></label>
            <input type="text" class="form-control " id="address" placeholder="Enter Address" name="address" required>
            </div> 
            </div>

            

            
             
            <div class="col  text-white"> 
            <div class="form-group " >
            <label for="gender" class="font-weight-bold" >Gender: <i class="fa fa-intersex "></i></label>
            <select name="gender" id="gender" name="gender" class="form-control w-75" required>
            <option >Select your Gender </option>
            <option >Male</option>
            <option >Female</option>
            </select>
            </div>
            </div>   
            </div>


            <div class="row">  

           
            <div class="col">   
            <div class="form-group text-white" style="margin-left:30%;">
            <label for="password" class="font-weight-bold">Password: <i class="fa fa-key"></i></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter id Password" required >

            </div> 
            </div>


            <div class="col ">
            <div class="form-group text-white" >
            <label for=" check_password " class="font-weight-bold">Retype Password: <i class="fa fa-key"></i></label>
            <input type="password" class="form-control  w-75" id="check_password" placeholder="Retype Password" name="check_password" required>
             <span id="confirm" class="font-weight-bold"> </span>
            </div> 
            </div> 
            </div>                    
            </div>

            <span class=" row form-group ">
            <span class="col text-center">
            <button type="submit" class="btn btn-success" name="submit" onclick="validateForm();">Submit</button> </span>

            </span>
            </form>
            </div>
            </div>
          
          <script>
          function validateForm() {
          var name = document.forms["myForm"]["name"].value;
          var phone = document.forms["myForm"]["pnumber"].value;
          var email = document.forms["myForm"]["email"].value;
          var cnic = document.forms["myForm"]["cnic"].value;
          var city = document.forms["myForm"]["city"].value;
          var province= document.forms["myForm"]["address"].value;   
          var gender= document.forms["myForm"]["gender"].value;
          var password= document.forms["myForm"]["password"].value;
          var Repassword= document.forms["myForm"]["check-password"].value;

          if (name== "" || number== ""|| email== "" ||cnic== "" || province== "" || city== "" || password==""||gender=="" || repassword=="") 
          {
          alert("Form must be filled out");
          }
          else{
          alert(" Successfully registered");
          } 
          }
          </script>

       <script>
      $(document).ready(function(){
        
        $('#cnic').keyup(function(){
          var cnic =$('#cnic').val();

         $.ajax({
            type: 'POST',
            url: 'confirmUserCnic.php' ,

            data:{
              'cnic': cnic
            },

          success : function(response){
           $('#confirmCnic').text(response).css('color', 'red');
          // $('#cnic').css('border-color', 'red' );
          }
          });
        });
      });
   

  $(document).ready(function(){
      $('#check_password').keyup(function () {
      if ($(this).val() == $('#password').val()) {
      $('#check_password').css('border-color', '#17a2b8');
      $('#confirm').html("Matched").css('color', '#17a2b8');
      } 
      else{
      $('#check_password').css('border-color', 'red');
      $('#confirm').html("Password is not Matched").css('color', 'red');
      }
});
});

$(document).ready(function(){
  $("input").inputmask();
       
 });
 


       </script>
</body>
</html>
