<?php
include_once('db_connection.php');
$output="";
$error="Sorry!!! No Record Found";
$i=1;
if(isset($_POST['city_id'])){
    $city_id=$_POST['city_id'];
}

if(empty($city_id)){$city_id=147;}


$query1= "SELECT sp_id, sp_name FROM service_provider WHERE sp_name LIKE '%".$_POST['search']."%' AND city_id=".$city_id."" ;
$result1= mysqli_query($connect, $query1) or die("Error". mysqli_error($connect));
if(mysqli_num_rows($result1)>0){
    $output .= "<div  style='height:20px !important;padding-bottom:30px !important; margin-top:5px;background:#f3f2f7;padding-left:10px;color:grey;'><p><b>Lawyers. . . </b></p></div>";
    while($row1=mysqli_fetch_array($result1)) {
        $img="http://localhost/project/sp-pics/".$row1['sp_id'].".jpg"; 
        if($i==1) {
                $output .= "        
                <div tabindex='$i' class='selected2 search-div2 search-lawyer-div'  >
                <div class='img-holder'> <img src='".$img."' >  </div>
                <p class='lawyer-name-search'>".  $row1['sp_name']  ." </p>
                
                </div>   "; 
        }
        else{
                $output .= "        
                <div tabindex='$i' class=' search-div2 search-lawyer-div'  >
                <div class='img-holder'> <img src='".$img."' >  </div>
                <p class='lawyer-name-search'>".  $row1['sp_name']  ." </p>
                <input hidden type='text' value='1' />
                </div>   "; 
        }
        $i++;
    }
}



$query = "SELECT category_name FROM category WHERE category_name LIKE '%".$_POST['search']."%' " ;

$result= mysqli_query($connect, $query) or die("Error". mysqli_error($connect));
if(mysqli_num_rows($result)>0){
    $output .= "<div style='height:20px !important;padding-bottom:30px !important;margin-top:5px;background:#f3f2f7;padding-left:10px;color:grey;'><p><b>Specialities. . . </b></p></div>";
        
   
    while($row=mysqli_fetch_array($result)) {
        if($i==1) {
                $output .= "        
                <div tabindex='$i' class='selected2 search-div2'  >
                <input hidden type='text' value='2' />
                <svg  width='24' height='24' class='search-svg' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'>
                <path d='M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z'/>
                </svg>
                <p>".  $row['category_name']  ." </p>
                </div>   "; 
        }
        else{
                $output .= "        
                <div tabindex='$i' class=' search-div2'  >
                <input hidden type='text' value='2' />
                <svg  width='24' height='24' class='search-svg' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'>
                <path d='M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z'/>
                </svg>
                <p>".  $row['category_name'] ." </p>
                </div>   "; 
        }
        $i++;
        if($i>7){
            break;
        }

    }
}



if(!empty($output)){
    echo $output;    
}
else{
echo $error;

}
