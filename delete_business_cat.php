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

            if(isset($_GET['delete_business_cat']))
            {
                $delete_id = $_GET['delete_business_cat'];

                $delete_cat = "delete from business_category where id='$delete_id'";

                $run_cat = mysqli_query($con,$delete_cat);

                if($run_cat)
                {
                   $_SESSION['status'] = "Category Deleted";
                    echo "<script> window.open('index.php?insert_business_category','_self')  </script>";
                }
                else
                {
                    echo "<script> alert('Something Wrong Happen!')  </script>";
                }
            }

        ?>



<?php  } ?>