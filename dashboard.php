<?php
if(!isset($_SESSION['admin_username']))
{
    echo "<script> window.open('login.php','_self')  </script>";
}
else
{

?>
<div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard
        </h1>

    </div>
    
</div>


<div class="row">

    <div class="col-lg-12">
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


        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title"></h3>
                <i class="fa fa-money fa-fw"></i> Available Slides
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Slide Name</th>
                                <th>Image</th>
                                <th>URL TYPE</th>
                                <th>URL</th>
                                <th>STATUS</th>
                                <th>EDIT</th>
                                <th>DELETE</th>

                            </tr>

                        </thead>

                        <tbody>
                            <!-- Display Products -->
                            <?php
                                $i=0;
                                $get_product = "select * from slides";
                                $run_p = mysqli_query($con,$get_product);

                                while($row = mysqli_fetch_array($run_p))
                                {
                                    $s_id = $row['id'];
                                    $s_name = $row['slide_name'];
                                    $s_image = $row['slide_image'];
                                    $s_urltype = $row['slide_url_type'];
                                    $s_url = $row['slide_url'];
                                    $s_status = $row['slide_status'];
                                    
                                    
                                    
                                    $i++;

                                    ?>



                            <tr>
                                <td><?php echo $s_name;  ?> </td>
                                <td><img src="slide_images/<?php echo $s_image;  ?>" alt="" class="img-responsive"
                                        width="50" height="50"> </td>
                                <td><?php echo $s_urltype;  ?> </td>
                                <td><?php echo $s_url;  ?> </td>
                                <td><?php echo $s_status;  ?> </td>
                                <td>
                                    <a href="index.php?edit_slide=<?php echo $s_id; ?>">
                                        <i class="fa fa-pencil fa-2x"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_slide=<?php echo $s_id; ?>">
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



<?php } ?>