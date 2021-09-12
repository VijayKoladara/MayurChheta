<?php
if(!isset($_SESSION['admin_username']))
{
    echo "<script> window.open('login.php','_self')  </script>";
}
else
{

    $get_records = "select * from settings where id=1";
    $run_records = mysqli_query($con,$get_records);

    $row = mysqli_fetch_array($run_records);

    $get_appversion = $row['app_version'];
    $get_email = $row['email'];
    $get_privacypolicy = $row['privacy_policy'];
?>




<div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-12">
    <?php

if(isset($_SESSION['status']))
{
    ?>
<div class="alert alert-success" role="alert" id="message">
    <?php echo $_SESSION['status']; ?>

</div>
<?php

unset($_SESSION['status']);
}

?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa a-money fa-w"></i> Settings
                </h3>
            </div>

            <div class="panel-body">
               
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">App Version</label>
                        <input type="text" name="app_version" id="" class="form-control" value="<?php echo $get_appversion;  ?>" required>
                    </div>





                    <div class="form-group">
                        <label for="" class="col-md-3">Email</label>
                        <input type="email" name="email" id="" class="form-control" value="<?php echo $get_email; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Privacy Policy</label>
                        <input type="text" name="privacy_policy" id="" class="form-control" value="<?php echo $get_privacypolicy; ?>" required>
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Save" name="submit" class="btn btn-primary form-control">

                    </div>


                </form>

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
  
    
   
    $update_setting = "update settings set app_version='$s_appversion',email='$s_email',privacy_policy='$s_privacy' where id=1";

    $run_product = mysqli_query($con,$update_setting);

    if($run_product)
    {
        $_SESSION['status'] = "Settings Saved !!";
        echo "<script> window.open('index.php?settings','_self')</script>";
    }
}
?>

<?php  } ?>