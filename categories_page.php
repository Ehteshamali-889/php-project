<?php include(  'db_connection.php'  ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories_Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 
       <?php
           $query="select * from category where status= 1";
           $result = mysqli_query($connect , $query) or die("error occured".mysqli_error($connect));
           $arr = [];
           $i=1;
           while($row=mysqli_fetch_assoc($result)){
              $arr[$i]=$row;
            $i++;
           }
           foreach($arr as $key){
?>      

     <div class="container-fluid border border-danger">
         <div class="row border border-info">
             <div class="col-2 border border-success ">
                 <div>
                     <button class="btn btn fa fa-phone"></button>
                     <button class="btn btn fa fa-phone"></button>
                     <button class="btn btn fa fa-phone"></button>

                 </div>
             </div>
             <div class="col-10 pb-2 pt-2 border border-dark">
                 <div class="card mt-2">
                     <div class="card-header">
                        <h4> <?php echo $key['category_name'] ?> </h4>
                     </div>
                     <div class="card-body">
                     <table> 
                         <tr>
                             <td>
                                 <h2>Img</h2> 
                             </td>
                             <td>
                     <h2>Find the Best Suitable Services Here </h2>
                     </td>
                     </tr>
                     </table>              
                     </div>
                 </div>
             </div>
             <?php }?>
         </div>
     </div>




</body>
</html>