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

            if(isset($_GET['delete_general_cat_image']))
            {
                $delete_cat_id = $_GET['delete_general_cat_image'];

                $delete_cat = "delete from general_category_images where id='$delete_cat_id'";

                $run_cat_delete = mysqli_query($con,$delete_cat);

                if($run_cat_delete)
                {
                    echo "<script> alert('Selected General Category Image Deleted')  </script>";
                    echo "<script> window.open('index.php?insert_general_category_image','_self')  </script>";
                }
                else
                {
                    echo "<script> alert('Something Wrong Happen!')  </script>";
                }
            }

        ?>



<?php  } ?>