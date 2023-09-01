<?php 
session_start();

include("db_connection.php");

if(isset($_POST['appointment']))
{

  $date = $_POST['appointmentDate'];
  $time = $_POST['appointmentTime'];
  $booking = $_POST['bookingTime'];
  $userId = $_POST['userId'];
  $spId = $_POST['spId'];
  $comparingDate = strtotime($date);
  //  echo '<br>'.$booking;
  //  echo '<br>'.$time;
  //  echo '<br>'.$date; 
  //  echo '<br>'.$userId;
  //  echo '<br>'.$spId;
  
   
   $query = "insert into appointment(appointment_date, appointment_time, booking_time, user, sp, comparable_date )
              values('$date', '$time', '$booking', '$userId', '$spId', '$comparingDate' )";
   $result = mysqli_query($connect, $query) or die("error occured".mysqli_error($connect));

    // echo '<br>'.$result;
   if(!$result)
   {
    echo ' <script>
          alert("Appointment is not Placed....")
     </script>';
     header("location:index.php");
   }
   else 
    echo '
     <script>
          alert("Thanks for reaching us! We will inform You regarding confirmation of Your appointment soon.");
     </script>';
     header("location:index.php");
   


}


?>