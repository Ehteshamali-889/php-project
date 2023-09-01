<?php


include('db_connection.php');


    if(isset($_POST['action']))
    {
       
        $cnic = $_POST['cnic'];
        $password = $_POST['password'];

    $sql = "select * from user WHERE cnic = '$cnic'  and password = '$password'";
    $result = mysqli_query($connect, $sql) or die (mysqli_error($connect));
    $row = mysqli_num_rows($result);
    $response;
    
    if($row == 0)
     {
        $response = 0;
     }
    
        else
        {

                $response = 1;

        }
      
                echo $response;
    }
    




?>