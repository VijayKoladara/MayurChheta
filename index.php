<?php

session_start();
include("includes/connection.php");

if (!isset($_SESSION['admin_username'])) {
    echo "<script> window.open('login.php','_self')  </script>";
} else {


?>

   

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>

        <!-- Main CSS -->
        <link rel="stylesheet" href="styles/style.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Font Awesome Library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>

    <body>

        <div class="wrapper col-lg-2">
            <?php include('includes/sidebar.php');  ?>
        </div>
        <div class="col-lg-10 page-wrapper" style="padding-top:20px;padding-right:100px;">
            <div class="container-fluid" style="padding-top:50px;padding-left:50px;">
                <?php
                if (isset($_GET['dashboard'])) {

                    include 'dashboard.php';
                }
                if (isset($_GET['slider_page'])) {

                    include 'slider_page.php';
                }
                if (isset($_GET['insert_business_category_image'])) {

                    include 'business_category_image.php';
                }
                if (isset($_GET['insert_business_category'])) {

                    include 'insert_business_category.php';
                }
                if (isset($_GET['insert_up_cat'])) {

                    include 'insert_upcoming_category.php';
                }
                if (isset($_GET['insert_up_image'])) {

                    include 'upcoming_category_image.php';
                }
                if (isset($_GET['insert_general_category'])) {

                    include 'insert_general_category.php';
                }
                if (isset($_GET['insert_general_category_image'])) {

                    include 'general_category_image.php';
                }
                if (isset($_GET['logout'])) {

                    include 'logout.php';
                }
                if (isset($_GET['delete_slide'])) {

                    include 'delete_slide.php';
                }
                if (isset($_GET['edit_slide'])) {

                    include 'edit_slide.php';
                }
                if (isset($_GET['delete_up_cat'])) {

                    include 'delete_upcoming_cat.php';
                }
                if (isset($_GET['edit_up_cat'])) {

                    include 'edit_upcoming_cat.php';
                }
                if (isset($_GET['delete_general_cat'])) {

                    include 'delete_general_cat.php';
                }
                if (isset($_GET['edit_general_cat'])) {

                    include 'edit_general_cat.php';
                }
                if (isset($_GET['delete_business_cat'])) {

                    include 'delete_business_cat.php';
                }
                if (isset($_GET['edit_business_cat'])) {

                    include 'edit_business_cat.php';
                }
                if (isset($_GET['delete_upcoming_image'])) {

                    include 'delete_upcoming_cat_image.php';
                }
                if (isset($_GET['delete_business_cat_image'])) {

                    include 'delete_business_cat_image.php';
                }
                if (isset($_GET['delete_general_cat_image'])) {

                    include 'delete_general_cat_image.php';
                }
                if (isset($_GET['edit_upcoming_image'])) {

                    include 'edit_upcoming_cat_image.php';
                }
                if (isset($_GET['edit_business_cat_image'])) {

                    include 'edit_business_cat_image.php';
                }
                if (isset($_GET['edit_general_cat_image'])) {

                    include 'edit_general_cat_image.php';
                }

                

                
               
                








                ?>

            </div>
        </div>




        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>

    </html>

<?php } ?>