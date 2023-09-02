<!DOCTYPE html>
<html lang="en">
<head>
  <title>SP_form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  <style>
    .videosection{
      margin: 0 auto;
      width: 500px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
  
</head>

          <body style="background-image:url('img/img4.jpg');">
          <div class="container-fluid pt-3 bg-info fixed-top position-sticky ">
          <div class="row" >          
          <div class="col"> 
          <a href="index.php" class="text-decoration-none">
          <h4 class="text-left text-white  font-italic">  <img src="img/Graphic1.png" height="70px">
          Homey Lavoro  </h4> </a> 
          </div>
          </div>
          <div class="row ">
          <div class="col">
          <h3 class="text-center text-white font-italic"> Buissness Registration Form </h3>
          </div>
          </div>
          </div>
          <!-- <img src="img4.jpg" alt="Girl in a jacket" style=" position:absolute; width:100%; height:80%;">      -->

          <div class="container pt-3 mt-5" >
          <div class="row text-center pt-3 ">  
          <div class="col">
          <h2 class="text-center text-white font-italic font-weight-bold">  Register Your Buissness here </h2>
          <h3 class="text-left text-white font-italic font-weight-bold">  Personal Info: </h3>
          </div>
          </div>

          <form name="myForm" Method="POST" action="sp_form_action.php" enctype="multipart/form-data">
          <div class="row">
          <div class="col ">
          <div class="form-group text-white" style="margin-left:30%;">
          <label for="name" class="font-weight-bold">Name: <i class="fa fa-user"></i></label>
          <input type="varchar" name="name" class="form-control " id="name" placeholder="Enter your full name" required>
          </div> 
          </div>  

          <div class="col ">
          <div class="form-group text-white" >
          <label for="cnic" class="font-weight-bold">CNIC: <i class="fa fa-id-card"></i></label>
          <input type="text" class="form-control w-75 cnic" id="cnic" name="cnic" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  required>
           <span class="cnic_error text-danger font-weight-bold"> </span>
          </div> 

          </div>                    


          </div>

          <div class="row">
          <div class="col ">
          <div class="form-group text-white" style="margin-left:30%;">
          <label for="email" class="font-weight-bold">Email: <i class="fa fa-envelope"></i></label>
          <input type="email" class="form-control " id="email" placeholder="Enter Email" name="email" required>
          </div> 

          </div>                    
          <div class="col ">
          <div class="form-group text-white">
          <label for="phone_number" class="font-weight-bold">Phone#: <i class="fa fa-phone "></i></label>
          <input type="integer" class="form-control w-75" id="phone_number"  name="phone_number" placeholder="XXXX-XXXXXXX" data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12" required>

          </div> 
          </div>
          </div>

          <div class="row">
          <div class="col ">
          <div class="form-group text-white" style="margin-left:30%;">
          <label for="city" class="font-weight-bold">City: <i class="fas fa-city"></i> </label>
          <select class="form-control  form-control " name="city" id="city" required>
          <option value=""> Select your City </option>
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



          <div class="col ">
          <div class="form-group text-white">
          <label for="address" class="font-weight-bold">Address: <i class="fa fa-address-card "></i></label>
          <input type="integer" class="form-control w-75" id="address" placeholder="Enter Address" name="address" required>

          </div> 
          </div>
          </div>


          <div class="row">
          <div class="col-sm-6"> 

          <div class="form-group text-white" style="margin-left:30%;" >
          <label for="img" class="font-weight-bold" >Select image: <i class="fas fa-image"></i></label>
          <input class="form-control" type="file" name="img"  id="img"  >
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
          <div class="videosection">

            <video id="video" autoplay></video>
            <button id="capture">Capture</button>
            <canvas id="canvas" style="display:none;"></canvas>
            <img id="capturedImage" src="" alt="Captured Image">
            <!-- Add a hidden input field to store the captured image data -->
            <input type="hidden" name="captured_image" id="captured_image_input">

          </div>
    
    
          <div class="row mt-5">  


          <div class="col-lg-12"> 

          <h3 class="text-left text-white font-italic font-weight-bold">  Acount Info: </h3> 

        </div>

          <div class="col  text-white"> 
          <div class="form-group" style="margin-left:30%;">
          <label for="catagory" class="font-weight-bold" >Buissness Category: <i class="fa fa-list-alt"></i></label>
          <select class="form-control" name="category" required>
          <option value=""> Select your Cotegory</option>
          <?php 
          include_once("db_connection.php");
          $qr= "SELECT  category_name FROM category";
          $res=mysqli_query($connect, $qr)  or die("Error". mysqli_error($connect));
          while($row=mysqli_fetch_array($res)){
          ?>
          <option> <?php echo $row['category_name']; ?> </option>

          <?php }  ?>


          </select>
          </div>  
          </div>

          <div class="col">
          <div class="form-group text-white" >
          <label for="buissness_id"  class="font-weight-bold" >Buissness_ID: <i class="fa fa-key"></i></label>
          <input type="text" class="form-control w-75" id="buissness_id" placeholder="Your CNIC is your BUossness id " name="buissness_id" readonly>
          </div> 
          </div>
          </div>

          <div  class="row" >

          <div class="col" >
          <div class="form-group text-white" style="margin-left: 30%;">
          <label for="password"  class="font-weight-bold" >Password: <i class="fa fa-key"></i></label>
          <input type="password" class="form-control " id="password" placeholder="Enter id Password" name="password">
          </div> 
          </div>
          <div class="col ">
          <div class="form-group text-white" >
          <label for="check_password" class="font-weight-bold">Retype Password: <i class="fa fa-key"></i></label>
          <input type="password" class="form-control w-75" id="check_password" placeholder="Retype Password" name="check_password">
          <span class="font-weight-bold"  id="confirm"></span>
          </div> 
          </div>
          </div>

          

          <span class=" row form-group mt-5 ">
          <span class="col text-center">
          <button type="submit" name="submit" class="btn btn-success">Submit</button> </span>

          </span>
          </form>
          </div>
          </div>
         
         <!-- <script>
          

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
          //  alert(" Successfully registered");
}
    </script> -->
   
   
  
<script>
  
  $(document).ready(function(){
   $('.cnic').keyup(function(){

     var cnic = $('.cnic').val();
    //  alert(cnic);

    $.ajax({
      type: "POST",
      url: "confirmCNIC.php",
      data: {
      'check_cnic': 1,
      'cnic': cnic    
      },
      success: function(response){
        
        // $('.cnic_error').text(response);

        if(response == 1){
           $('.cnic_error').html("CNIC already Exist");     
           $('#cnic').css('border-color', 'red');
       }
       
       if(response == 0){
        $('.cnic_error').html("");
        $('#cnic').css('border-color', 'transparent');
        $("#buissness_id").click(function(){
          var cnic_val = $('.cnic').val();
          $("#buissness_id").val(cnic_val);
        });       
      
      }
      }
     });
   });
 });

 $(document).ready(function(){
  $("input").inputmask();
       
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

  </script>


<script>
    // Get references to DOM elements
    const video = document.getElementById('video');
    const captureButton = document.getElementById('capture');
    const canvas = document.getElementById('canvas');
    const capturedImage = document.getElementById('capturedImage');
    const capturedImageInput = document.getElementById('captured_image_input');

    // Initialize the user's camera
    navigator.mediaDevices
        .getUserMedia({ video: true })
        .then(function (stream) {
            video.srcObject = stream;
        })
        .catch(function (error) {
            console.error('Error accessing the camera:', error);
        });

    // Add a click event listener to the "Capture" button
    captureButton.addEventListener('click', () => {
        // Draw the current frame of the video onto the canvas
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convert the canvas content to a data URL (base64 encoded image)
        const imageDataURL = canvas.toDataURL('image/jpeg');

        // Set the src attribute of the capturedImage img element
        capturedImage.src = imageDataURL;

        // Set the value of the hidden input field to the captured image data
        capturedImageInput.value = imageDataURL;
    });
</script>





          

</body>
</html>