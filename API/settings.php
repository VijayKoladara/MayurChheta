<?php

$con = mysqli_connect("localhost","root","","mayurchheta");

if(!$con)
{
    die("Could Not Connect Database");
}

$response = array();

$query = "select * from settings";
$run_query = mysqli_query($con,$query);

if($run_query)
{
    header("Content-Type:JSON");
    $i=0;
    while($row = mysqli_fetch_assoc($run_query))
    {
        $response[$i]['id'] = $row['id'];
        $response[$i]['app_version'] = $row['app_version'];
        $response[$i]['email'] = $row['email'];
        $response[$i]['privacy_policy'] = $row['privacy_policy'];
       
        $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
}


?>