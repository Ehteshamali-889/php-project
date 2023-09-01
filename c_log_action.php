
<?php 

session_start();
 
    include(  'db_connection.php'  );   
      $cnic=$_POST['user_cnic'];
      echo $cnic. "<br>" ;
      $password=$_POST['user_password'];
      echo $password. "<br>" ;

      $sql="select * from user where cnic= '$cnic' AND password='$password'";
      $result=mysqli_query($connect,$sql);
      $num_row=mysqli_num_rows($result);



      $row= mysqli_fetch_assoc($result);    
      $_SESSION['userCnic'] = $row['cnic'];
      $_SESSION['userPassword'] = $row['password'];
      $_SESSION['userName'] = $row['user_name']; 
      $_SESSION['userId'] = $row['user_id'];   


    // echo $_SESSION['userPassword'];

      header('location: user_dashboared.php');
                  
 ?>


