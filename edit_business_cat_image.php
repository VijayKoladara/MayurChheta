<?php
if(!isset($_SESSION['admin_username']))
{
    echo "<script> window.open('login.php','_self')  </script>";
}
else
{
    if(isset($_GET['edit_business_cat_image']))
    {
        $get_id = $_GET['edit_business_cat_image'];

        $find_records = "select * from business_category_images where id='$get_id'";
        $run_records = mysqli_query($con,$find_records);

        $row = mysqli_fetch_array($run_records);

        $get_post_name = $row['post_name'];
        $old_image = $row['image_thumb'];
        $get_status = $row['status'];
    }




?>




<div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa a-money fa-w"></i> Update Business Category Images
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">Select Categories</label>
                        <select name="category_name" id="" class="form-control">

                            <?php
                                    $get_p_cats = "select * from upcoming_category";
                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                    while($row = mysqli_fetch_array($run_p_cats)){

                                        
                                        $cat_title = $row['category_name'];

                                        echo " <option value='$cat_title'>$cat_title </option> ";

                                    }


                                ?>
                        </select>

                    </div>



                    <div class="form-group">
                        <label for="" class="col-md-3">Post Name </label>
                        <input type="text" name="post_name" id="" class="form-control"
                            value="<?php echo $get_post_name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Image Thumb </label>
                        <input type="file" name="image_thumb" id="" class="form-control" 
                            accept="image/png, image/gif, image/jpeg">
                    </div>



                    <div class="form-group">
                        <label for="" class="col-md-3">Status</label>
                        <select class="form-select form-control" name="category_status">

                            <option value="publish" <?php
                                    if($get_status == "publish")
                                    {
                                        echo "selected";
                                    }
                                ?>>Publish</option>
                            <option value="drafts" <?php
                                    if($get_status == "draft")
                                    {
                                        echo "selected";
                                    }
                                ?>>Draft</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Update Upcoming Category Images" name="submit"
                            class="btn btn-primary form-control">

                    </div>


                </form>

            </div>

        </div>

    </div>




</div>





<?php
if(isset($_POST['submit']))
{
   
    $category_name = $_POST['category_name'];
   $category_status = $_POST['category_status'];
   $post_name = $_POST['post_name'];
   
  
   $new_image = $_FILES['image_thumb']['name'];    

   if($new_image != '')
   {
        $update_filename = $_FILES['image_thumb']['name'];
   }else
   {
        $update_filename = $old_image;
   }

  
       $query = "update business_category_images SET category_name='$category_name',post_name='$post_name',image_thumb='$update_filename',status='$category_status' WHERE id='$get_id'";
       $run_query = mysqli_query($con,$query);

       if($run_query)
       {
           if($_FILES['image_thumb']['name']!='')
           {
               move_uploaded_file($_FILES['image_thumb']['tmp_name'],"slide_images/".$_FILES['image_thumb']['name']);
               unlink("slide_images/".$old_image);
           }
           echo "<script> alert('Business Category Image Updated Successfully!') </script>";
           echo "<script> window.open('index.php?insert_business_category_image','_self') </script>";
       }
       else
       {
        echo "<script> alert('Something Wrong Happen! Please Try again') </script>";
        echo "<script> window.open('index.php?insert_business_category_image','_self') </script>";
       }
    
    
}
?>

<?php  } ?>