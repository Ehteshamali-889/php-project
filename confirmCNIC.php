<?php
include('db_connection.php');
// CNIC check by  ajax
function cnic_confirm($row){  
            
     } 

if(isset($_POST['check_cnic'])){
        $cnic=$_POST['cnic'];

        $query=" select * from service_provider WHERE cnic= '$cnic'";

        $result=mysqli_query($connect,$query) or die("error occured".mysqli_error($connect));

        $row= mysqli_num_rows($result);
$response;
        if($row > 0)
        {
    $response = 1;         
        }
        else
        {
            $response = 0;
        }

        echo $response;

}


?>