

<?php
include('db_connection.php');

if(isset($_POST['cnic'])){
        $cnic = $_POST['cnic'];

        $query=" select * from user WHERE cnic= '$cnic'";

        $result=mysqli_query($connect, $query) or die("error occured".mysqli_error($connect));

        $row= mysqli_num_rows($result);
  
     if($row > 0){
      echo "CNIC already Exist";   
     }

     }

?>