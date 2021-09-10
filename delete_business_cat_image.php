<?php
    session_start();
    include("includes/connection.php");

    if(!isset($_SESSION['admin_username']))
    {
        echo "<script> window.open('login.php','_self')  </script>";
    }
    else
    {

        ?>

        <?php

            if(isset($_GET['delete_business_cat_image']))
            {
                $delete_cat_id = $_GET['delete_business_cat_image'];

                $delete_cat = "delete from business_category_images where id='$delete_cat_id'";

                $run_cat_delete = mysqli_query($con,$delete_cat);

                if($run_cat_delete)
                {
                    echo "<script> alert('Selected Business Category Image Deleted')  </script>";
                    echo "<script> window.open('index.php?insert_business_category_image','_self')  </script>";
                }
                else
                {
                    echo "<script> alert('Something Wrong Happen!')  </script>";
                }
            }

        ?>



<?php  } ?>