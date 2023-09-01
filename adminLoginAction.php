
<?php 
 session_start();   
 include(  'db_connection.php'  ); 

 $user= $_POST['key'];

    // echo $user;


 $password = $_POST['password1'];
    //echo $password;



// echo $id;
  $sql="select * FROM admin WHERE admin_cnic='".$user."'";
     $result= mysqli_query( $connect,$sql ) or die("error occured".mysqli_error($connect));
     if(!$result)
     echo "Query is not correct";
     $numRows= mysqli_num_rows($result);

      if($numRows == 1)
      {
         $row = mysqli_fetch_assoc($result);


         if($password == $row['admin_password'])
         {

            $_SESSION['admin_id'] = $row['admin_cnic'];
            $_SESSION['admin_password'] = $row['admin_password'];
            $_SESSION['admin_name'] = $row['admin_name'];    

            // echo $_SESSION['user_name'];
            header("Location:http://localhost/project/admin_dashboard.php" );

            
              
         }
         else
         {
            $errorMsg="Wrong Cnic or Password";
         }
      }
      else
      {
         $errorMsg="No user Found";
      }
         
   
	if(isset($errorMsg))
	{
		echo "<div >";
		echo $errorMsg;
		echo "</div>";
		unset($errorMsg);
	}


            ?>
