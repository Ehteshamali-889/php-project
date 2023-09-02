
<?php

include('db_connection.php');

        if(isset($_POST['submit'])){

        $name=$_POST['name'];
        //echo $name ."<br>";
 
        $cnic=$_POST['cnic'];
        //echo $cnic ."<br>";


        $email=$_POST['email'];
       // echo $email ."<br>";

        $phone_number=$_POST['phone_number'];
        //echo $phone_number ."<br>";


        $city=$_POST['city'];
     //   echo $city ."<br>";


        $address=$_POST['address'];
        //echo $address ."<br>";

         
        $gender=$_POST['gender'];
        //echo $gender ."<br>";

        $category=$_POST['category'];
          //echo $category ."<br>";
        
          $password=$_POST['password'];
        //echo $password ."<br>";

        $check=$_POST['check_password'];
        //echo $check ."<br>";


            // Image Uploading 
         if(isset($_FILES["img"])){
            $filename=basename( $_FILES['img']['name']);
            $targetfolder = "SP_images/";

         $targetfolder = $targetfolder . basename( $_FILES['img']['name']) ;
         
            if(move_uploaded_file($_FILES['img']['tmp_name'], $targetfolder))
         
         {
         
         echo "The file ". basename( $_FILES['img']['name']). " is uploaded <br>";
         
         }
         
         else {
         
         echo "Problem uploading file";
         
         }
         
         

         // Handle the captured image
         if (isset($_POST['captured_image'])) {
            $capturedImageData = $_POST['captured_image'];

            // Define the target folder for captured images
            $targetfolder = "captured_images/";

            // Generate a unique filename for the captured image
            $filename = uniqid() . '.png';

            // Define the complete path to save the captured image
            $targetfile = $targetfolder . $filename;

            // Save the captured image to the target folder
            if (file_put_contents($targetfile, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $capturedImageData)))) {
               echo "The captured image is saved as $filename <br>";
            } else {
               echo "Problem saving the captured image";
            }
         }


         }
         }


?>


<?php
   
 
    // insertion in DataBase 
 
 $sql="insert into service_provider
(sp_name, contact, cnic, email, city_id, address, gender, image, category, password, status)
values('$name', '$phone_number', '$cnic' ,'$email', '$city', '$address', '$gender', '$filename', '$category', '$password', '1') ";

   $result= mysqli_query($connect, $sql) or die("error occured".mysqli_error($connect));
    if(!$result){
    echo "data is not inserted";
    
     }
else{
    echo "Data is inserted";
     header ("location: index.php") ; 
 }
  

?>