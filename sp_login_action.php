


<?php
session_start(); 
include('db_connection.php');

$cnic= $_POST['cnic'];
    echo $cnic."<br>";
    
 $password= $_POST['password'];
    echo $password;
  
    $sql = "select * from service_provider where cnic = '$cnic' and password = '$password'";
    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));  
    $row = mysqli_fetch_assoc($result);
    $_SESSION['SpId'] = $row['sp_id'];
    $_SESSION[' Spname'] = $row['sp_name'];
    $_SESSION['Spcnic'] = $row['cnic'];
    $_SESSION['SPpassword'] = $row['password'];
    $_session['Spemail'] = $row['email'];

   header('location: Sp_dashboard.php ');     




  //yhn abhi work complete krna h 
?>