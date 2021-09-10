<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1.collapse">
            <span class="sr-only"> Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="index.php?dashboard" class="navbar-brand" style="color:white">Mayur Chheta's Personal Panel</a>
        <a href="index.php?dashboard" class="navbar-brand" style="color:white">Welcome <?php echo $_SESSION['admin_username'];?></a>

        

    </div>







    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i>&nbsp;Dashboard
                </a>
            </li>
            <li>
                <a href="index.php?slider_page">
                    <i class="fa fa-fw fa-cog"></i>&nbsp; Slider Page
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-arrow-down"></i>&nbsp; Categories &nbsp; <i class="fas fa-arrow-down"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#upcoming">
                    <i class="fas fa-list"></i></i>&nbsp;Upcoming
                    <i class="fa fa-angle-right pull-right"></i>
                </a>




                <ul class="collapse" id="upcoming">
                    <li>
                        <a href="index.php?insert_up_cat"><i class="fa fa-circle-o"></i>&nbsp;Add New Category</a>
                    </li>
                    <li>
                        <a href="index.php?insert_up_image"><i class="fa fa-circle-o"></i>&nbsp;Add Category Image</a>
                    </li>


                </ul>

            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#business">
                    <i class="fas fa-list"></i></i>&nbsp;Business
                    <i class="fa fa-angle-right pull-right"></i>
                </a>




                <ul class="collapse" id="business">
                    <li>
                        <a href="index.php?insert_business_category"><i class="fa fa-circle-o"></i>&nbsp;Add New
                            Category</a>
                    </li>
                    <li>
                        <a href="index.php?insert_business_category_image"><i class="fa fa-circle-o"></i>&nbsp;Add
                            Category Image</a>
                    </li>


                </ul>

            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#general">
                    <i class="fas fa-list"></i>&nbsp;General
                    <i class="fa fa-angle-right pull-right"></i>
                </a>




                <ul class="collapse" id="general">
                    <li>
                        <a href="index.php?insert_general_category"><i class="fa fa-circle-o"></i>&nbsp;Add New
                            Category</a>
                    </li>
                    <li>
                        <a href="index.php?insert_general_category_image"><i class="fa fa-circle-o"></i>&nbsp;Add
                            Category Image</a>
                    </li>


                </ul>

            </li>



            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i> Logout
                </a>
            </li>
        </ul>

    </div>

</nav>