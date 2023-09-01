
<?php 
session_start();
include(  'db_connection.php'  );
?>
      
<!DOCTYPE html>
<html lang="en">

<head>
<title>Homey Lavoro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="search_dropdown_JSscript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="search_dropdown_customCSS.css">  
<!-- Custom stlylesheet -->
<link rel="stylesheet" href="stylsheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" 
integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
</head>
<style>

.logo{
background-repeat: no-repeat;
background-position: center center;
background-size: cover;   
height: 200px;
width: 200px;
      
 }

.buissnes-img{
height: 300px;
width:300px;
background-repeat: no-repeat;
background-position: center center;
background-size: cover;   
}

 .bg-img{
 background-repeat: no-repeat;
 background-position: center center;
 background-size: cover; 
 width: 1100px;
 height: 500px ; 
}
.category-slider{
height: 300px;
width:300px;
background-repeat: no-repeat;
background-position: center center;
background-size: cover;   

}
.category-buisness{
  height: 100px;
  width: 150px; 
  border-radius:5px 1px 5px 1px;
  position: relative;
} 
.category-img{

 background-repeat: no-repeat;
 background-position: center center;
 background-size: cover; 
 width: 40%;
 height: 50%;

}
.parent{
  position: relative;
}
.child {

position: absolute;
top: 50%; 
left: 50%; 
transform: translate(-50%, -50%); 
}
span :hover{
  -webkit-box-shadow: 0px 0px 6px 0px #17a2b8, 0px 0px 0px 2px #17a2b8;
  /* box-shadow: 0px 0px 6px 0px #E4E7ED, 0px 0px 0px 2px #D10024; */
}
</style>

</head>
<body style="background-image:url('img/img4.jpg');" > 

<!-- Header  -->

<div class="container-fluid mb-2  fixed-top position-sticky  bg-info ">  
  <div class="row pt-3 pb-2 ">
    <div class="col-6 col "> 
      <a href="index.php" class="text-decoration-none">
          <h3 class="float-left text-white font-italic "> <img src="img/logo.png" height="70px">
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
      
        
        <!-- Search Baar -->
  <div class="container-fluid  mt-5 " >       
    <div class="row mt-1 pb-2 pt-2" style="">  
      <div class="col-2"></div>
       <div class="col-8" style="border: 2px sloid black;">    
         <?php include('dropdown-search.php'); ?>
           </div>
          <div class="col-2"></div>
        </div>  
     </div>


    <!--/ Search Baar -->

    <!-- nav Baar -->

    <div class="container-fluid mb-3 shadow-lg position ">
   <div class="row shadow-lg mt-3 w-100 mb-4 ">
     <div class="col-lg-12 ">
        <nav class="navbar navbar-expand-sm justify-content-center w-100">
         <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link text-white font-weight-bold font-italic" href="index.php">Home</a>
          </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold font-italic" href="#categories"> Categories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold font-italic" href="#buisness"> Buisness  </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white font-weight-bold font-italic" href="#resturant"> Restaurents   </a>
            </li>
            </ul>
            </nav>
        </div>
        </div>
        </div>


        <!-- shops -->



     <div class="section mb-5 ">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/gym.jpg" alt="" class="buissnes-img">
							</div>
							<div class="shop-body">
								<h3>Plumber<br>Collection</h3>
								<a href="#" class="cta-btn"> Check Now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/dryer.jpg" alt="" class="buissnes-img">
							</div>
							<div class="shop-body">
								<h3>Dryers<br>Collection</h3>
								<a href="#" class="cta-btn">Check Now<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/gym.jpg" alt="" class="buissnes-img" >
							</div>
							<div class="shop-body">
								<h3>Gyms<br>Collection</h3>
								<a href="#" class="cta-btn">Check Now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->




<!--Slick Slider category -->

<div class="container mt-5 mb-5" id="categories">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 mb-3 text-center">
          <div class="card-header">
            <h4 class="text-danger">Find Best Buissnes in Town   <i class="fa fa"></i></h4>
          </div> 
        </div>
      </div>
        <?php 
             $query="select * from category where status= 1";
             $result = mysqli_query($connect , $query) or die("error occured".mysqli_error($connect));
                    $array = [];
                    $i=0;
                    while($row = mysqli_fetch_assoc($result))
                    {
                    $array[$i] = $row;
                    $i++;
            }
         ?>
         
           <div class="row slider" style="">
           <?php   foreach($array as $key){ 
             
             $imgURL= 'uploaded-img/'.$key['img'];
             
             ?>
             
             <div class="col-md-12" style="">
               <a class="text-decoration-none " href="search_result.php?speciality=<?php echo $key['category_name'];  ?>">

                    <img src="<?php echo $imgURL ?>" alt="" class="img-thumbnail category-slider" style="">
                    <h4><?php echo $key['category_name'];  ?></h4> 
                    </a>
                </div>  
                
        <?php } ?>   
        
        <!-- <small><a href="categories.php" class="text-decoration-none float:right">See More </a></small> -->
      </div>
      </div>
    </div>
  </div>
</div>
           


  <!-- Slider -->


  <div class="container ">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block bg-img" src="img/img.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block bg-img " src="img/gym.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block bg-img" src="img/plumber.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> 

<!-- end slider -->

    <div class="card mt-5">
      <div class="container" id="">
      <div class="card-header">
        <div class="row ">
    <div class="offset-4">  <h4 class="text-danger align-center" > Find Buisness by category <i class="fa fa-search "></i></h4></div>
      </div>
      <div class="row  mt-3">
        <div class="offset-3"></div>

          <span class="col-2 category-buisness border ml-3 parent "> 
          <a href="">   
                   <img class="category-img child" src="img/restuarent.png" alt=""> 
      <span class="font-weight-bold" style="position:absolute; top:75%; left:50px;">Restuarant</span> </a>
      </span> 

          <span class="col-2 category-buisness border  ml-5 ">
            <a href="">
             <img class="category-img  child" src="img/Home Services.png" alt="">
         <span class="font-weight-bold" style="position:absolute; top:75%; left:15%"> Home Applaince </span> </a>
        </span> 

        
           <span class="col-2 category-buisness border  ml-5 ">
             <a href="">
             <img class="category-img child" src="img/shopping.png" alt=""> 
         <span class="font-weight-bold " style="position:absolute; top:75%; left:50px;"> Shopping </span>
         </a>
        </span> 
          
      </div>
      <div class="row  mt-3">
        <div class="offset-3"></div>

          <span class="col-2 category-buisness border ml-3 parent "> 
          <a href="">   
                   <img class="category-img child" src="img/gym.png" alt=""> 
      <span class="font-weight-bold" style="position:absolute; top:75%; left:65px;">Active</span> </a>
      </span> 

          <span class="col-2 category-buisness border  ml-5 ">
            <a href="">
             <img class="category-img  child" src="img/beauty.png" alt="">
         <span class="font-weight-bold text-center" style="position:absolute; top:75%; left:22%"> Beauty&Saps </span> </a>
        </span> 

        
           <span class="col-2 category-buisness border  ml-5 ">
             <a  id="show">
              <h1 class="text-center">...</h1> 
               <span class="font-weight-bold " style="position:absolute; top:75%; left:50px;"> See More </span>
            </a>
        </span> 
         <div class="container bg-secendory" id="more">
           <div class="row">
             <div class="col-12">
               <h1>No more category to show </h1> 
               <button id="hide"> see less</button>
             </div>
           </div>
         </div> 
      </div>
     </div>
    </div> 
   </div>




<div style="" class="bg-dark "> 

  <div class="container-fluid mt-5 pt-5 pb-5">
    <div class="row">      
        <div class="col-lg-4">
          <h4 id="CU" class="text-white"> Contact us</h4>
          <h2></h2>
          <h4 id="AU" class="text-white">  About Us </h4>
          <h2></h2>
          <h4 id="FAQ" class="text-white">  FAQ's </h4>
          <h2></h2>
        </div>

        <div class="col-lg-4">
          <div style="width:400px; height:400px">
           <img style="width:400px; height:400px "src="img/ff.jpeg" alt="logo"> </div>
        </div> 
        <div class="col-lg-4">  
  
       </div>
    </div>
  </div>
</div>

<!-- Modal -->
 <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="admin_Form" action="adminLoginaction.php" >
            <div class="form-group">
                <label for="key">Enter Your CNIC</label>
                <input type="integer" class="form-control" id="key" name="key" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X">
            </div>
            <div class="form-group">
                <label for="password">Enter Your Password </label>
                <input type="password" class="form-control" id="password1"  name="password1" placeholder="Admin password...">
                   <span id="error_login" class="text-danger font-weight-bold  "></span>
            </div>
            <button type="submit" id="submit_id"  class="btn btn-info btn-block btn-round">Login</button>
        </form>
      </div>
    </div>
  </div>
</div> 

 <!-- Modal end  -->

           <script>
     $('.slider').slick({
  autoplay: true,
  autoplaySpeed: 1500,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
<script>
  
// $(document).ready(function(){
//   $("#hide").click(function(){
    
//   });
// });
$(document).ready(function()
{
    $("#more").hide();
    $("#show").click(function()
    {
     $("#more").show();
    });
    $("#hide").click(function(){
      $("#more").hide();
    });
});


$(document).ready(function(){
  $("input").inputmask();
});


$(document).ready(function()
 {
   $('#submit_id').click(function(event)
   {
    //  console.log("reached");

       event.preventDefault();
      var cnic = $('#key').val();
      var password = $('#password1').val();

          $.ajax
          ({
          type : 'POST',
          url : 'admin_login_validation.php',
          data:{
            'action': 1,
            'cnic' : cnic,
            'password': password
               },
              success : function(response)
              {
                if(response == 1)
                {
                  $('#login_error').html('Account valid...');

                       $("#admin_Form").submit();
                }
                else
                {
                    if(response == 0)
                    {
                      event.preventDefault();
                      $('#error_login').html(' Account is not valid  ...');
                      
                    }
                }  
              }
    
          });
  });
});

</script>           

<!-- Button trigger modal -->



<?php include(  'SP_login.php'  ); ?>
<?php include(  'C_login.php' ); ?> 
<?php //include(  'Admin_login.php'  ); ?>






</body>
</html>


