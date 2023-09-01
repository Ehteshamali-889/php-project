<?php
session_start();
include("db_connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sp_dashboard</title>
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
<body style="background-image:url('img/img4.jpg');" >

<div class="container-fluide text-black  bg-info" >
    <a href="index.php" class="text-decoration-none"> 
      <h3 class="font-italic text-left text-white"> Homey Lavoro </h3>
    </a>
    
    <h6 class="mr-5 font-italic text-right font-weight-bold mb-5" style="color:white;"> User Dashboared</h6>

      <a class="btn btn-info text-white font-italic font-weight-bold mt-n4 float-right" href="logout.php" >Log-out </a>
      </div> 

    
 <?php 
  $id = $_SESSION['Spcnic'];
  $sql = "select * from service_provider where cnic = '$id'";
  $result = mysqli_query($connect, $sql) or die("Error is : ". mysqli_error($connect)); 
  $row = mysqli_fetch_assoc($result);
 ?>

 <div class="container ">
   <div class="row  "><h2 class="text-centre text-white">Welcome <?php echo $_SESSION[' Spname'];?></h2></div>
    
    <div class="row border">
        <div class="col-2 border text-white"><h4>Name</h4></div>
        <div class="col-2 border text-white"><h4>Email</h4></div>
        <div class="col-2 border text-white"><h4>Phone#</h4></div>
        <div class="col-2 border text-white"><h4>Cnic</h4></div>
        <div class="col-2 border text-white"><h4>Status</h4></div>
        <div class="col-2 border text-white"><h4>Address</h4></div>
    </div>
    <div class="row border">
        <div class="col-2 border text-white"><?php echo $row["sp_name"]?></div>
        <div class="col-2 border text-white"><?php echo $row["email"]?></div>
        <div class="col-2 border text-white"><?php echo $row["contact"]?></div>
        <div class="col-2 border text-white"><?php echo $row["cnic"]?></div>
        <div class="col-2 border text-white"><?php echo $row["status"]?></div>
        <div class="col-2 border text-white"><?php echo $row["address"]?></div>
    </div>
    
            <div class="row mt-5">
              <div class="offset-4"></div>
                <div class="col-4 bg-info text-white font-weight-bold text-center">Your Previous Appointments

                </div>
                  <div class="offset-4"></div>
              </div>
                  
                <div class="row mt-3">
                      <div class="col-12">
                        <div class="row">
                          <div class="offset-3"></div>
                                <div class="col-6 border border-info" style="width:400px; height:400px;">
                                    <?php 
                                      $query = " select * from appointment WHERE sp = '".$row['sp_id']."'";
                                      $appointmentData = mysqli_query($connect, $query);
                                      //  need to do more work                                    
                                    ?>
                                </div>
                            <div class="offset-3"></div> 
                        </div>
                      </div>
                  </div>
              </div>
            
   
   
            
              <div class="row mt-5">
                <div class="offset-4"></div>
                  <div class="col-4 bg-info text-white font-weight-bold text-center">Your Upcoming Appointments
                      </div>
                    <div class="offset-4"></div>
                </div>
                  
                <div class="row mt-3">
                      <div class="col-12">
                        <div class="row">
                          <div class="offset-3"></div>
                              <div class="col-6 border border-info" style="width:400px; height:400px;"></div>
                            <div class="offset-3"></div> 
                        </div>
                      </div>
                  </div>
              </div>
              </div>
           </div>

        
   <div style="" class="bg-dark "> 
      <div class="container-fluid mt-5 pt-5 pb-5">
         <div class="row">      
           <div class="col-lg-4">
             <h4 id="CU" class="text-white"> Contact us</h4>
               <h2></h2>
                   <h4 id="AU" class="text-white">  About Us </h4>
                 <h2></h2>
                  <h4 id="FAQ" class="text-white">  FAQ's </h4>
                   <h2></h2>
              </div>

        <div class="col-lg-4">
        <div style="width:400px; height:200px">
           <img style="width:400px; height:200px "src="img/logo.jpg" alt="logo"> </div>
        </div>
        </div> 
        <div class="col-lg-4">  
  
       </div>
    </div>
  </div>



</div>
 

    
</body>
</html>

    






