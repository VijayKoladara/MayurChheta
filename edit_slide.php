<?php
if(!isset($_SESSION['admin_username']))
{
    echo "<script> window.open('login.php','_self')  </script>";
}
else
{
?>

<?php

if(isset($_GET['edit_slide']))
{
    $get_id = $_GET['edit_slide'];

    $get_records = "select * from slides where id='$get_id'";
    $run_records = mysqli_query($con,$get_records);

    $row = mysqli_fetch_array($run_records);

    $slidename = $row['slide_name'];
    $slideurltype = $row['slide_url_type'];
    $slideurl = $row['slide_url'];
    $old_image = $row['slide_image'];

    
    
    
}

?>




<div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa a-money fa-w"></i> Edit Slider
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">Slide Name</label>
                        <input type="text" name="slide_name" id="" class="form-control"
                            value="<?php echo $slidename; ?>" required>
                    </div>





                    <div class="form-group">
                        <label for="" class="col-md-3">Slide Image </label>
                        <input type="file" name="slide_img" id="" class="form-control"
                            accept="image/png, image/gif, image/jpeg">

                    </div>



                    <div class="form-group">
                        <label for="" class="col-md-3">URL TYPE</label>
                        <select class="form-select form-control" name="slide_urltype">

                            <option value="inbound" <?php
                                if($slideurltype == "inbound")
                                {
                                    echo "selected";
                                }
                                
                            ?>>Inbound</option>
                            <option value="Outbound" <?php
                                if($slideurltype == "Outbound")
                                {
                                    echo "selected";
                                }
                                
                            ?>>OutBound</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">URL</label>
                        <input type="url" name="slide_url" id="" class="form-control" value="<?php echo $slideurl; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Status</label>
                        <select class="form-select form-control" name="slide_status">

                            <option value="publish" <?php
                                if($slideurltype == "publish")
                                {
                                    echo "selected";
                                }
                                
                            ?>>Publish</option>
                            <option value="draft" <?php
                                if($slideurltype == "draft")
                                {
                                    echo "selected";
                                }
                                
                            ?>>Draft</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Update Slider" name="submit" class="btn btn-primary form-control">

                    </div>


                </form>

            </div>

        </div>

    </div>
    <div class="col-lg-3">

    </div>


</div>





<?php
if(isset($_POST['submit']))
{
   $update_slide_name = $_POST['slide_name'];
   $update_slide_urltype = $_POST['slide_urltype'];
   $update_slideurl = $_POST['slide_url'];
   $update_slidestatus = $_POST['slide_status'];
   $new_image = $_FILES['slide_img']['name'];    

   if($new_image != '')
   {
        $update_filename = $_FILES['slide_img']['name'];
   }else
   {
        $update_filename = $old_image;
   }

  
       $query = "update slides SET slide_name='$update_slide_name',slide_image='$update_filename',slide_url_type='$update_slide_urltype',slide_url='$update_slideurl',slide_status='$update_slidestatus' WHERE id='$get_id'";
       $run_query = mysqli_query($con,$query);

       if($run_query)
       {
           if($_FILES['slide_img']['name']!='')
           {
               move_uploaded_file($_FILES['slide_img']['tmp_name'],"slide_images/".$_FILES['slide_img']['name']);
               unlink("slide_images/".$old_image);
           }
           $_SESSION['status'] = "Slider Updated Successfully !!";
           echo "<script> window.open('index.php?dashboard','_self') </script>";
       }
       else
       {
        echo "<script> alert('Something Wrong Happen! Please Try again') </script>";
        echo "<script> window.open('index.php?dashboard','_self') </script>";
       }
   
}
?>

<?php  } ?>