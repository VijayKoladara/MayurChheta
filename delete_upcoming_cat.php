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

            if(isset($_GET['delete_up_cat']))
            {
                $delete_id = $_GET['delete_up_cat'];

                $delete_cat = "delete from upcoming_category where id='$delete_id'";

                $run_cat = mysqli_query($con,$delete_cat);

                if($run_cat)
                {
                    echo "<script> alert('Selected Upcoming Category Deleted')  </script>";
                    echo "<script> window.open('index.php?insert_up_cat','_self')  </script>";
                }
                else
                {
                    echo "<script> alert('Something Wrong Happen!')  </script>";
                }
            }

        ?>



<?php  } ?>