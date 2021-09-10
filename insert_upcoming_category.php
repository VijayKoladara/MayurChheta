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
                    <i class="fa a-money fa-w"></i> Insert Upcoming Category
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">CATEGORY NAME</label>
                        <input type="text" name="category_name" id="" class="form-control" required>
                    </div>





                    <div class="form-group">
                        <label for="" class="col-md-3">BG IMAGE </label>
                        <input type="file" name="category_img" id="" class="form-control" required
                            accept="image/png, image/gif, image/jpeg">
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Date </label>
                        <input type="date" name="category_date" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">App Version</label>
                        <input type="text" name="app_version" id="" class="form-control" required>
                    </div>



                    <div class="form-group">
                        <label for="" class="col-md-3">STATUS</label>
                        <select class="form-select form-control" name="category_status">

                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Insert Upcoming Category" name="submit"
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
                    <i class="fa a-money fa-w"></i> View Upcoming Categories
                </h3>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CATEGORY NAME</th>
                                <th>BG IMAGE</th>
                                <th>DATE</th>
                                <th>APP VERSION</th>
                                <th>STATUS</th>
                                <th>EDIT</th>
                                <th>DELETE</th>

                            </tr>

                        </thead>

                        <tbody>
                            <!-- Display Products -->
                            <?php
                                $i=0;
                                $get_product = "select * from upcoming_category";
                                $run_p = mysqli_query($con,$get_product);

                                while($row = mysqli_fetch_array($run_p))
                                {
                                    $s_id = $row['id'];
                                    $s_name = $row['category_name'];
                                    $s_image = $row['category_image'];
                                    $s_date = $row['date'];
                                    $app_version = $row['app_version'];
                                    $s_status = $row['status'];
                                   
                                    
                                    
                                    
                                    $i++;

                                    ?>



                            <tr>
                                <td><?php echo $s_id;  ?> </td>
                                <td><?php echo $s_name;  ?> </td>
                                <td><img src="slide_images/<?php echo $s_image;  ?>" alt="" class="img-responsive"
                                        width="50" height="50"> </td>
                                <td><?php echo $s_date;  ?> </td>
                                <td><?php echo $app_version;  ?> </td>
                                <td><?php echo $s_status;  ?> </td>

                                <td>
                                    <a href="index.php?edit_up_cat=<?php echo $s_id; ?>">
                                        <i class="fa fa-pencil fa-2x"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_up_cat=<?php echo $s_id; ?>">
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
    $category_date = $_POST['category_date'];
    $cat_app_version = $_POST['app_version'];
    

    // Image Uploading

    $category_img = $_FILES['category_img']['name'];
    

    $tmp_name = $_FILES['category_img']['tmp_name'];
    

    move_uploaded_file($tmp_name,"slide_images/$category_img");
   
    $inset_products = "insert into upcoming_category(category_name,category_image,date,app_version,status) values('$category_name','$category_img','$category_date','$cat_app_version','$category_status')";

    $run_product = mysqli_query($con,$inset_products);

    if($run_product)
    {
        echo "<script> alert('Upcoming Category Inserted!')</script>";
        echo "<script> window.open('index.php?insert_up_cat','_self')</script>";
    }
}
?>

<?php  } ?>