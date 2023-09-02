<?php
// Include your database connection code here
include(  'db_connection.php'  );   
// Check if the "Check Now" button is clicked
if(isset($_GET['category']) && $_GET['category'] == 'gym') {
    // Fetch data from the service_provider table where category is plumber
    $sql = "SELECT * FROM service_provider WHERE category = 'gym'";
    $result = mysqli_query($connect, $sql);

    if (!$result) {
        die("Database query failed: " . mysqli_error($connection));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Plumber Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

  <style>
        /* Center the table on the page */
        table {
    margin: 0 auto;
    width: 80%;
    border-collapse: collapse;
    background-color: #f2f2f2;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #333;
    color: white;
}

tr:hover {
    background-color: #ddd;
}

    </style>
</head>
<body style="background-image:url('img/img4.jpg');">
<!-- Header  -->

<div class="container-fluid mb-2  fixed-top position-sticky  bg-info ">  
  <div class="row pt-3 pb-2 ">
    <div class="col-6 col "> 
    <a href="index.php" class="text-decoration-none">
          <h3 class="float-left text-white font-italic "> <img src="img/Graphic1.png" height="70px">Homey lavoro
           </h3> 
        </a>
    </div>
          
          <div class="col-3"></div>
          <div class="col-1">  
            <div class=" pt-1">      
              <button class="btn btn-info btn-round" data-toggle="modal" data-target="#adminModal">Admin </button>
            </div>  
          </div>

          <div class="col-1"> 
                  <?php if(isset($_SESSION['userCnic'])){?>
                    <a class="btn btn-primary " href="user_dashboared.php">Profile</a>
                      <?php }
                        elseif(isset($_SESSION['Spcnic']))
                          {?>
                            <a class="btn btn-primary " href="sp_dashboard.php">Profile </a>
                          <?php } 
                  
                          else{ ?>
                    
                <div class="dropdown float-left"> 
                  <button class="btn btn-primary dropdown-toggle" type="button"
                    data-toggle="dropdown" >Login</button>    
                      <ul class="dropdown-menu">
                          <li>
                            <a href="c_login.php" data-toggle="modal" data-target="#custmorModal">Costomer</a>
                          </li>
                                          
                          <li>
                            <a href="Sp_login.php" data-toggle="modal" data-target="#SPModal">Service Provider</a>
                          </li>
                        </ul>
                </div>
                    <?php }?>
          </div>      
                
          <div class="col-1 col-sm-1 col-md-1 col">  
            <div class="dropdown float-left"> 
                <button class="btn btn-primary dropdown-toggle" type="button"
                data-toggle="dropdown" style="">Sign up</button>
                  <ul class="dropdown-menu">
                    <li><a href="C_form.php">Costomer</a></li>
                    <li><a href="Sp_form.php">Service Provider</a></li>
                  </ul>
            </div>
          </div>      
      
  </div>
</div>

    

    <!-- Your HTML body content here -->

    <!-- Display the retrieved data in a table -->
    <table>
        <thead>
            <tr>
                <th>Service Provider Name</th>
                <th>Address</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) === 0) {
                echo "<tr><td colspan='2'>No such record found</td></tr>";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['sp_name'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    // Add more table cells for other columns
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
