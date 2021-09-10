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

            if(isset($_GET['delete_slide']))
            {
                $delete_cat_id = $_GET['delete_slide'];

                $delete_cat = "delete from slides where id='$delete_cat_id'";

                $run_cat_delete = mysqli_query($con,$delete_cat);

                if($run_cat_delete)
                {
                    echo "<script> alert('Selected Slide Deleted')  </script>";
                    echo "<script> window.open('index.php?dashboard','_self')  </script>";
                }
                else
                {
                    echo "<script> alert('Something Wrong Happen!')  </script>";
                }
            }

        ?>



<?php  } ?>