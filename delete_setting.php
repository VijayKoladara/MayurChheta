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

            if(isset($_GET['delete_setting']))
            {
                $delete_id = $_GET['delete_setting'];

                $delete_cat = "delete from settings where id='$delete_id'";

                $run_cat = mysqli_query($con,$delete_cat);

                if($run_cat)
                {
                    $_SESSION['status'] = "Deleted Successfully";
                    echo "<script> window.open('index.php?settings','_self')  </script>";
                }
                else
                {
                    echo "<script> alert('Something Wrong Happen!')  </script>";
                }
            }

        ?>



<?php  } ?>