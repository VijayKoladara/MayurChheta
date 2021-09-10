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
                    <i class="fa a-money fa-w"></i> Insert Slider
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="" class="col-md-3">Slide Name</label>
                        <input type="text" name="slide_name" id="" class="form-control" required>
                    </div>





                    <div class="form-group">
                        <label for="" class="col-md-3">Slide Image </label>
                        <input type="file" name="slide_img" id="" class="form-control" required
                            accept="image/png, image/gif, image/jpeg">
                    </div>



                    <div class="form-group">
                        <label for="" class="col-md-3">URL TYPE</label>
                        <select class="form-select form-control" name="slide_urltype">

                            <option value="inbound">Inbound</option>
                            <option value="Outbound">OutBound</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">URL</label>
                        <input type="url" name="slide_url" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3">Status</label>
                        <select class="form-select form-control" name="slide_status">

                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Insert Slider" name="submit" class="btn btn-primary form-control">

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
   
    $slide_name = $_POST['slide_name'];
    
    $slide_urltype = $_POST['slide_urltype'];
    $slide_url = $_POST['slide_url'];
    $slide_status = $_POST['slide_status'];
    

    // Image Uploading

    $slide_img = $_FILES['slide_img']['name'];
    

    $tmp_name = $_FILES['slide_img']['tmp_name'];
    

    move_uploaded_file($tmp_name,"slide_images/$slide_img");
   
    $inset_products = "insert into slides(slide_name,slide_image,slide_url_type,slide_url,slide_status) values('$slide_name','$slide_img','$slide_urltype','$slide_url','$slide_status')";

    $run_product = mysqli_query($con,$inset_products);

    if($run_product)
    {
        echo "<script> alert('Slide Inserted!')</script>";
        echo "<script> window.open('index.php?dashboard')</script>";
    }
}
?>

<?php  } ?>