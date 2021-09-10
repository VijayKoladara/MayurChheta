<?php

    session_start();
    include 'includes/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="container">
        <form action="" class="form-login" method="POST">
            <h2 class="form-login-heading text-primary text-center mb-2">Admin Login</h2>

            <input type="text" name="admin_username" id="" class="form-control" placeholder="Username" required="">

            <input type="password" name="admin_password" id="" class="form-control" placeholder="Password" required="">
            <br>
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">
                <i class="fa fa-sign-in"></i> Log in
            </button>
            <br>


        </form>

    </div>
</body>

</html>

<!-- Validate Data -->

<?php

    if(isset($_POST['admin_login']))
    {
        $admin_username = mysqli_real_escape_string($con,$_POST['admin_username']);
        $admin_password = mysqli_real_escape_string($con,$_POST['admin_password']);

        $get_admin = "select * from admin where username='$admin_username' AND password='$admin_password'";

        $run_admin = mysqli_query($con,$get_admin);

        $count = mysqli_num_rows($run_admin);

        if($count == 1)
        {
            $_SESSION['admin_username'] = $admin_username;
            $_SESSION['loggedin'] = true;
            echo "<script> alert('Your Are Successfully Logged in!')  </script>";
            echo "<script> window.open('index.php?dashboard','_self') </script>";
        }
        else
        {
           echo "<script> alert('Wrong Username Or Password!')  </script>";
        }


    }


?>