<?php 
error_reporting(0);
session_start();
include '../controller/database.php';
include '../credentials.php';
$api_url= 'https://trial.craig.mtcserver15.com/api/properties?api_key='.$api_key;
//Decoding data from API
$data=json_decode(file_get_contents($api_url), true);
//retrieve and storing data from API
for($i=0;$i<count($data[data]);$i++)
{
    $country=$data[data][$i]['country'];
    $county=$data[data][$i]['county'];    
    $town=$data[data][$i]['town'];
    $description=$data[data][$i]['description'];
    $image_full=$data[data][$i]['image_full'];
    $image_thumbnail=$data[data][$i]['image_thumbnail'];
    $latitude=$data[data][$i]['latitude'];
    $longitude=$data[data][$i]['longitude'];
    $num_bedrooms=$data[data][$i]['num_bedrooms'];
    $num_bathrooms=$data[data][$i]['num_bathrooms'];
    $price=$data[data][$i]['price'];
    $type=$data[data][$i]['type'];
    $property_description=$data[data][$i][property_type]['description'];  
    //Insert into database
   // $sql="INSERT INTO `details` (`country`, `county`, `town`, `description`, `image`, `image_thumb`, `latitude`, `longitude`, `bedrooms`, `bathrooms`, `price`, `type`, `property_desc`) VALUES ('$country', '$county', '$town', '$description', '$image_full', '$image_thumbnail', '$latitude', '$longitude', '$num_bedrooms', '$num_bathrooms', '$price', '$type','$property_description');";
    mysqli_query($link,$sql);
    if(mysqli_affected_rows($link)>0)
        {
            $row=mysqli_fetch_array($result);
	        //Set session for successful operation
	        $_SESSION['success']='Added Successfully...';
	
	   }
    else{
        //Set session for fail operation
        $_SESSION['fail']='Failed to add ...';

        }
}

?>
