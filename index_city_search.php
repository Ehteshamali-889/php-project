<?php
include_once('db_connection.php');
$output="";
$error="Select Correct City Name";
$i=1;

$query = "SELECT * FROM cities
WHERE city_name LIKE '".$_POST['search']."%'   LIMIT 10 ";

$result= mysqli_query($connect, $query) or die("Error". mysqli_error($conn));

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)) {
        if($i==1) {
            $output .= "        
            <div tabindex='$i' class='selected search-div'  >
            <svg  width='24' height='24' class='search-svg' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'>
            <path d='M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z'/>
            </svg>
            <p>".$row['city_name']."</p>
            <input hidden type='text' value='".$row['city_id'] ."'  /> 
            </div>   ";
        
        }
        else{
            $output .= "<div tabindex='$i' class= 'search-div' >
            <svg  width='24' height='24' class='search-svg' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'>
            <path d='M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z'/>
            </svg><p>".$row['city_name']."</p>
            <input hidden type='text' value='".$row['city_id'] ."'  />
            </div> ";
        }
        $i++;
    }
echo $output;
//    echo json_encode(array($output));

}

else{
echo $error;
//    echo json_encode(array($error));
}
