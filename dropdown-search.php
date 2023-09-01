
    <form action="search_result.php" id="search_form" method="GET" class="d-flex p-4" style="position:relative;">
				
				<input type="text"  placeholder="Enter City Name" id="city" name="city" autocomplete="off" onfocusout="dropdownRemove()" onfocusin="dropdownShow()"
                       class="form-control pl-4 border border-green  mr-2">	   
			
				<input type="text" placeholder="Search For Local Buissness" id="speciality" name="speciality" autocomplete="off" onfocusout="dropdownRemove2()" onfocusin="dropdownShow2()"
					 class="form-control ml-2 mr-2 border border-green  "> 

				<button id="submit-search"  class="btn font-weight-bold bg-info" style=" padding-bottom:0px !important;" name="search" disabled>
										 <i class="fa fa-search"></i> </button>
            	<div id="dropdown" style="display:none; border:1px solid green; position:absolute; height:auto; max-height: 300px;
                        overflow: auto; width:40%; background-color: white; z-index: 999; top:90%;">
			    <div  id='body'>
				<?php 
				$i=1;
				$query1 = "SELECT * FROM cities WHERE bigcity=1 ORDER BY city_id DESC ";   
				$result1= mysqli_query($connect, $query1) or die("Error". mysqli_error($connect));
				while($row1=mysqli_fetch_array($result1)) {?>

			<div tabindex='<?php echo $i; ?>' class='search-div'  >
            <svg  width='24' height='24' class='search-svg' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'>
            <path d='M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z'/>
            </svg><p><?php echo $row1['city_name'];?></p>
            <input hidden type='text' value='<?php echo $row1['city_id'];?>'  /> 
            </div> 
			<?php	$i++;  } ?>
 			
			 </div>
             </div>

			<div id="dropdown2"  style="display:none; border:1px solid green; position:absolute; height:auto; max-height: 300px;
                        overflow: auto; width:39%; background-color: white; z-index: 999;  top:90%; left:50%;">
			<div id="body2">
			<div id="default-speciality" >			
		
			<?php 
				$j=1;
				$query2 = "SELECT * FROM category ";   
				$result2= mysqli_query($connect, $query2) or die("Error". mysqli_error($connect));
				while($row2=mysqli_fetch_array($result2)) {?>
			<div tabindex='<?php echo $j; ?>' class='search-div2'  >
            <svg  width='24' height='24' class='search-svg' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'>
            <path d='M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5
			.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z'/>
            </svg><p><?php echo $row2['category_name'];?></p>
            <input hidden type='text' value='<?php echo $row2['category_id'];?>'  /> 
            </div> 
			<?php	$j++;  } ?>
			</div>		
			</div>
			</div>

        </form>