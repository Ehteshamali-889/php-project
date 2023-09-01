<h1>   you are reached here </h1>

<?php

include("db_connection.php");

   if(isset($_POST['submit']))
   { 

    $name= $_POST['name'];

    $phone= $_POST['pnumber'];

    $email= $_POST['email'];
   
    $cnic= $_POST['cnic'];

    $province= $_POST['province'];

    $city= $_POST['city'];
    
    $address= $_POST['address'];

    $gender= $_POST['gender'];

    $password= $_POST['password'];

    


    //   insertion in database

    $query="insert into user ( user_name, phone_number, email, cnic, province, city, address, gender, password, status )
    values('$name', '$phone', '$email', '$cnic', '$province', '$city', '$address', '$gender', '$password', '1')"; 
   $result=mysqli_query($connect, $query);

   if(!$result){
    echo "No Data inserted" .mysqli_error($connect);
    }
   else {
     echo "data is inserted";
   }
}

?>




