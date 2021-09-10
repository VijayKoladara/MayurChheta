<?php
if(!isset($_SESSION['admin_username']))
{
    echo "<script> window.open('login.php','_self')  </script>";
}
else
{
?>

<?php

if(isset($_GET['edit_general_cat']))
{
    $get_id = $_GET['edit_general_cat'];

    $get_records = "select * from general_category where id='$get_id'";
    $run_records = mysqli_query($con,$get_records);

    $row = mysqli_fetch_array($run_records);

    $update_cat_name = $row['category_name'];
    $old_image = $row['category_image'];
    
    $update_status = $row['status'];
    
    
    
    
}

?>




<div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa a-money fa-w"></i> Update Upcoming Category
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">Category Name</label>
                        <input type="text" name="category_name" id="" class="form-control"
                            value="<?php echo $update_cat_name; ?>">
                    </div>





                    <div class="form-group">
                        <label for="" class="col-md-3">Slide Image </label>
                        <input type="file" name="category_img" id="" class="form-control"
                            accept="image/png, image/gif, image/jpeg">

                    </div>


                    



                    
                    <div class="form-group">
                        <label for="" class="col-md-3">Status</label>
                        <select class="form-select form-control" name="category_status">

                            <option value="publish" <?php
                                if($update_status == "publish")
                                {
                                    echo "selected";
                                }
                                
                            ?>>Publish</option>
                            <option value="draft" <?php
                                if($update_status == "draft")
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
   $category_name = $_POST['category_name'];
   $category_status = $_POST['category_status'];
 
  
   $new_image = $_FILES['category_img']['name'];    

   if($new_image != '')
   {
        $update_filename = $_FILES['category_img']['name'];
   }else
   {
        $update_filename = $old_image;
   }

  
       $query = "update general_category SET category_name='$category_name',category_image='$update_filename',status='$category_status' WHERE id='$get_id'";
       $run_query = mysqli_query($con,$query);

       if($run_query)
       {
           if($_FILES['category_img']['name']!='')
           {
               move_uploaded_file($_FILES['category_img']['tmp_name'],"slide_images/".$_FILES['category_img']['name']);
               unlink("slide_images/".$old_image);
           }
           echo "<script> alert('General Category Updated Successfully!') </script>";
           echo "<script> window.open('index.php?insert_general_category','_self') </script>";
       }
       else
       {
        echo "<script> alert('Something Wrong Happen! Please Try again') </script>";
        echo "<script> window.open('index.php?insert_general_category','_self') </script>";
       }
   
}
?>

<?php  } ?>