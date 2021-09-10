<?php

$con = mysqli_connect("localhost","root","","mayurchheta");

if(!$con)
{
    die("Could Not Connect Database");
}

$response = array();

$query = "select * from upcoming_category_images";
$run_query = mysqli_query($con,$query);

if($run_query)
{
    header("Content-Type:JSON");
    $i=0;
    while($row = mysqli_fetch_assoc($run_query))
    {
        $response[$i]['id'] = $row['id'];
        $response[$i]['category_name'] = $row['category_name'];
        $response[$i]['post_name'] = $row['post_name'];
        $response[$i]['image_thumb'] = $row['image_thumb'];
        $response[$i]['status'] = $row['status'];
        

        $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
}


?>