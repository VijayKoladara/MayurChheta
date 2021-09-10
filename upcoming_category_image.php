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
                        <i class="fa a-money fa-w"></i> Insert Upcoming Category Images
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
                            <input type="text" name="post_name" id="" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-3">Image Thumb </label>
                            <input type="file" name="image_thumb" id="" class="form-control" required
                                accept="image/png, image/gif, image/jpeg">
                        </div>



                        <div class="form-group">
                            <label for="" class="col-md-3">Status</label>
                            <select class="form-select form-control" name="category_status">

                                <option value="publish">Publish</option>
                                <option value="draft">Drafts</option>
                            </select>
                        </div>

                       

                        <div class="form-group">
                            <input type="submit" value="Insert Upcoming Category Images" name="submit"
                                class="btn btn-primary form-control">

                        </div>


                    </form>

                </div>

            </div>

        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <i class="fa a-money fa-w"></i> View Upcoming Categories Images
                    </h3>
                </div>

                <div class="panel-body">
                <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>CATEGORY NAME</th>
                                    <th>POST NAME</th>
                                    <th>IMAGE THUMB</th>
                                    <th>STATUS</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                      
                                </tr>
                            
                            </thead>

                            <tbody>
                                <!-- Display Products -->
                                <?php
                                $i=0;
                                $get_product = "select * from upcoming_category_images";
                                $run_p = mysqli_query($con,$get_product);

                                while($row = mysqli_fetch_array($run_p))
                                {
                                    $category_id = $row['id'];
                                    $category_name = $row['category_name'];
                                    $post_name = $row['post_name'];
                                    $image_thumb = $row['image_thumb'];
                                    $status = $row['status'];
                                   
                                    
                                    
                                    
                                    $i++;

                                    ?> 
                             

                                 
                                <tr>
                                    <td><?php echo $category_id;  ?>  </td>
                                    <td><?php echo $category_name;  ?>  </td>
                                    <td><?php echo $post_name;  ?>  </td>
                                    <td><img src="slide_images/<?php echo $image_thumb;  ?>" alt="" class="img-responsive" width="50" height="50">  </td>
                                    <td><?php echo $status;  ?>  </td>
                                    
                                    <td>
                                            <a href="index.php?edit_upcoming_image=<?php echo $category_id; ?>">
                                            <i class="fa fa-pencil fa-2x"></i> 
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?delete_upcoming_image=<?php echo $category_id; ?>">
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
   
    
    
    $category_name = $_POST['category_name'];
    
    $category_status = $_POST['category_status'];
    $post_name = $_POST['post_name'];
    

    // Image Uploading

    $image_thumb = $_FILES['image_thumb']['name'];
    

    $tmp_name = $_FILES['image_thumb']['tmp_name'];
    

    move_uploaded_file($tmp_name,"slide_images/$image_thumb");
   
    $inset_products = "insert into upcoming_category_images(category_name,post_name,image_thumb,status) values('$category_name','$post_name','$image_thumb','$category_status')";

    $run_product = mysqli_query($con,$inset_products);

    if($run_product)
    {
        echo "<script> alert('Upcoming Category Image Inserted!')</script>";
        echo "<script> window.open('index.php?insert_up_image','_self')</script>";
    }
}
?>

<?php  } ?>