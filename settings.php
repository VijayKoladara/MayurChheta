<?php
if(!isset($_SESSION['admin_username']))
{
    echo "<script> window.open('login.php','_self')  </script>";
}
else
{
?>




<div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa a-money fa-w"></i> Settings
                </h3>
            </div>

            <div class="panel-body">
                <?php

                if(isset($_SESSION['status']))
                {
                    ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['status']; ?>

                </div>
                <?php

                unset($_SESSION['status']);
                }

                ?>
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">App Version</label>
                        <input type="text" name="app_version" id="" class="form-control" required>
                    </div>





                    <div class="form-group">
                        <label for="" class="col-md-3">Email</label>
                        <input type="email" name="email" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Privacy Policy</label>
                        <input type="text" name="privacy_policy" id="" class="form-control" required>
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Save" name="submit" class="btn btn-primary form-control">

                    </div>


                </form>

            </div>

        </div>

    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <i class="fa a-money fa-w"></i> View Settings
                </h3>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>App Version</th>
                                <th>Email</th>
                                <th>Privacy Policy</th>
                                <th>Edit</th>
                                <th>Delete</th>


                            </tr>

                        </thead>

                        <tbody>
                            <!-- Display Products -->
                            <?php
                                $i=0;
                                $get_product = "select * from settings";
                                $run_p = mysqli_query($con,$get_product);

                                while($row = mysqli_fetch_array($run_p))
                                {
                                    $id = $row['id'];
                                    $app_version = $row['app_version'];
                                    $email = $row['email'];
                                   
                                    $privacy_policy = $row['privacy_policy'];
                                   
                                    
                                    
                                    
                                    $i++;

                                    ?>



                            <tr>
                                <td><?php echo $id;  ?> </td>
                                <td><?php echo $app_version;  ?> </td>


                                <td><?php echo $email;  ?> </td>
                                <td><?php echo $privacy_policy;  ?> </td>

                                <td>
                                    <a href="index.php?edit_setting=<?php echo $id; ?>">
                                        <i class="fa fa-pencil fa-2x"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_setting=<?php echo $id; ?>">
                                        <i class="fa fa-trash-o fa-2x"></i>
                                    </a>
                                </td>


                            </tr>
                            <?php  } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>



</div>





<?php
if(isset($_POST['submit']))
{
   
    
    
    $s_appversion = $_POST['app_version'];
    
    $s_email = $_POST['email'];
    $s_privacy = $_POST['privacy_policy'];
  
    
   
    $inset_products = "insert into settings(app_version,email,privacy_policy) values('$s_appversion','$s_email','$s_privacy')";

    $run_product = mysqli_query($con,$inset_products);

    if($run_product)
    {
        $_SESSION['status'] = "All settings Are Saved !!";
        echo "<script> window.open('index.php?settings','_self')</script>";
    }
}
?>

<?php  } ?>