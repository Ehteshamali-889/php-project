<?php session_start();?>
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
</head>
<style>
    .card-body
    {
        box-shadow: inset 0 0 1px #000;

    }
    .parent
    {
     overflow : hidden;
    }
    .img-div
    {
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    width: 100%;
    height: 100%;
    /* object-fit: contain; */
    
    }
</style>

<body>

    <?php 
    include('db_connection.php');
            if(isset($_GET['city'])){
                $city_name =  $_GET['city'];
            }
            else{
                $city_name =  "Multan";
            }
            
            $category = $_GET['speciality'];
            
            $query="select * from cities where city_name = '$city_name'";
            $city_result = mysqli_query($connect, $query) or die("Error is ..". mysqli_error($connect)); 
            $city = mysqli_fetch_assoc($city_result);
            $cityid = $city['city_id'];
            
            
            $sql = "select * from service_provider WHERE city_id = ' $cityid  ' AND category = '$category' ";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            $num_row = mysqli_num_rows($result); 
            //  $row = mysqli_fetch_assoc($result); 
            
            
    ?>

    <div class="container-fluied pb-5">
        <div class="row bg-info ">
            <div class="col">
                <a href="index.php"><h3 class="float-left text-white font-italic">Homey Lavoro</h3></a>
            </div>
        </div>
    </div>

    <!-- Profile Card -->
    <div class="container-fluied">
        <div class="row ml-5">
            <?php 
            while( $row = mysqli_fetch_assoc($result))
            {   
                $imgURL = "sp_images/". $row['image'];
            // print_r($row);
            // echo '<br>';
            ?>        
            <div class="col-sm-12 col-md-6 col-lg-5 card-body ml-5">
                <div class="card">
                    <div class="card-header">
                        <h3> <?php echo $category .":"?>&nbsp <?php echo $row['sp_name']  ?>  </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 col-md-6 col-lg-3 ">
                                <div style="width:120px; height:120px;"> 
                                    <img class="img-div" src="<?php echo $imgURL?>" alt="123.img">
                                </div>
                            </div>
            
                            <div class="col-sm-8 col-md-6 col-lg-6 font-weight-bold">
                                <ul>
                        
                                    <li> <i class="fa fa-user"></i> <?php echo $row['sp_name']; ?></li>
                                    <li> <i class="fas fa-map-marker"></i> <?php echo $city_name; ?></li>
                                    <li> <i class="fa fa-envelope"></i> <?php echo $row['email']; ?></li> 
                                    <li> <i class="fa fa-phone"></i> <?php echo $row['contact']; ?></li> 
                    
                                </ul>
                            </div>
                            <div class="col-lg-3"> 
                                <button type="button" class="btn btn-info btn-sm" id="appointmentModal<?php echo $row['sp_id'];?>" data-toggle="modal" data-target="#myModal" sp-name = "<?php echo $row['sp_name']?>" sp-id="<?php echo $row['sp_id']?>" user-id = "<?php echo $_SESSION['userId'];?>"   <?php if(!isset($_SESSION['userCnic'])){
                                    echo "disabled";
                                } ?> >Book Appointment</button>
                            
                                <script>
                                    $("#appointmentModal<?php echo $row['sp_id'];?>").click(function()
                                    {
                                        let sp_name = $("#appointmentModal<?php echo $row['sp_id'];?>").attr("sp-name");
                                        $('#spName').html(sp_name);
                                    

                                        $('#userId').val(<?php echo $_SESSION['userId'];?>);
                                        $('#spId').val(<?php echo $row['sp_id'];?>);
                                    });
                                </script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                <?php }?>
        </div>
    </div>    


    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info">Book Your Appointment </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 for="">Please Select Date and Time of Your Appointment</h4>
                        <h3 class="text-info font-weight-bold" id="spName"></h3>
                            <div class="container mt-4">
                                <form method="post" action="appointment.php" >
                                    <div class="form-group">
                                        <label class="fs-15" for="appointmentDate">Select Date</label>
                                        <input type="date" id="controlDate" name="appointmentDate" class="form-control mb-2 fs-15" required>
                                        <label class="fs-15" for="appointmentTime">Select Time</label>
                                        <input type="time" id="appointmentTime" name="appointmentTime" class="form-control mt-2 fs-15" required>
                                        <input type="hidden" id="bookingTime" name="bookingTime">
                                        <input type="hidden" id ="spId" name="spId" >
                                        <input type="hidden" id ="userId" name="userId" >
                                        <button type="submit" id="appointment" name="appointment"
                                            class="btn btn-primary fs-15 mt-5">Confirm Appointment
                                        </button>
                                            
                                    </div>
                                </form>
                            </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fs-15" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        
            var dtToday = new Date();
            
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getUTCFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();
            
            var minDate = year + '-' + month + '-' + day;
        
            // alert(minDate);
            // $('#controlDate').attr('min', minDate);
            //console.log(minDate);  
            document.getElementById("controlDate").setAttribute('min', minDate );
            // document.getElementById("controlDate1").setAttribute('min', minDate );
            
    </script>

    <!-- <script>
        $(document).ready(function()
        {
            $('#appointment').click(function()
            {
            var time = $('#appointmentTime').val();
            var date = $('#controlDate').val();
                console.log(time);

                $.ajax
                ({
                    type:"POST",
                    url: "appointment.php",
                    data:
                    {
                        'apointment': 1,
                        'time' : time,
                        'date' : date 
                    },
                    success: function(response)
                    {
                        if(response=="0")
                        {
                            alert("Appointment Is not placed");
                        }
                        else
                        {
                            alert("Thanks for reaching us! We will inform You regarding confirmation of Your appointment soon.");
                        }
                    }

                });

            });
        });



    </script> -->


    <script>
        $(document).ready(function(){
            $("#bookingTime").val(new Date());
            
        })
    </script>



    <script type="text/javascript">
            function showMessage()
                {
                    alert("Thanks for reaching us! We will inform You regarding confirmation of Your appointment soon.");
                }
    </script>

</body>
</html>