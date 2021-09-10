<?php

$con = mysqli_connect("localhost","root","","mayurchheta");

if(!$con)
{
    die("Could Not Connect Database");
}

$response = array();

$query = "select * from slides";
$run_query = mysqli_query($con,$query);

if($run_query)
{
    header("Content-Type:JSON");
    $i=0;
    while($row = mysqli_fetch_assoc($run_query))
    {
        $response[$i]['id'] = $row['id'];
        $response[$i]['slide_name'] = $row['slide_name'];
        $response[$i]['slide_image'] = $row['slide_image'];
        $response[$i]['slide_url_type'] = $row['slide_url_type'];
        $response[$i]['slide_url'] = $row['slide_url'];
        $response[$i]['slide_status'] = $row['slide_status'];

        $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
}


?>