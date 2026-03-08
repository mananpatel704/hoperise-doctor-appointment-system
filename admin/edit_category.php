<?php
    include('common/css.php');
    $category_id = $_GET['category_id'];

    $select_category = mysqli_query ($conn, "SELECT * FROM hs_category WHERE category_id = $category_id");
    $category_row = mysqli_fetch_array($select_category);

    if (isset($_POST['submit'])) {
        $category_title = $_POST['category_title'];
        $category_description = $_POST['category_description'];

        // Check if a new file is uploaded
        if (!empty($_FILES['category_thumb']['name'])) {
            $path = "uploads/";
            $category_thumb_org = $_FILES['category_thumb']['name'];
            $category_thumb_tmp = $_FILES['category_thumb']['tmp_name'];
            $imagepath = $path . $category_thumb_org;

            // Move the uploaded file to the server's directory
            move_uploaded_file($category_thumb_tmp, $imagepath);

            // Update the database with the new image and other details
            $query = mysqli_query($conn, "UPDATE hs_category SET category_title='$category_title', category_description='$category_description', category_thumb='$category_thumb_org' WHERE category_id = $category_id");
        } 
        else {
            // If no new image is uploaded, use the old image
            $category_thumb_org = $category_row['category_thumb']; // Retain the old image

            // Update the database without changing the image
            $query = mysqli_query($conn, "UPDATE hs_category SET category_title='$category_title', category_description='$category_description', category_thumb='$category_thumb_org' WHERE category_id = $category_id");
        }

        if ($query) {
            echo "Category updated successfully.";
        } else {
            echo "Error updating category.";
        }
    }
?>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <?php
            include('common/header.php');
        ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php
            include('common/sidebar.php');
        ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Category Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Category Form</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Category Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">Option 1</a>
                                        <a class="dropdown-item">Option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Category Title</label>
                                            <input class="form-control" type="text" placeholder="Category Title" value="<?php echo $category_row['category_title']; ?>" name="category_title">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Category Description</label>
                                            <input class="form-control" type="text" placeholder="Category Description" value="<?php echo $category_row['category_description']; ?>" name="category_description">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Category Thumb</label>
                                            <input class="form-control" type="file" placeholder="Category Thumb" name="category_thumb">
                                            <small>Current Image: <?php echo $category_row['category_thumb']; ?></small>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-default" name="submit" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                        <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                        <div class="wrap-1">
                            <div class="wrap-2">
                                <div>
                                    <img src="./assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                                </div>
                                <div class="color-white" style="margin-left:40px;">
                                    <h1 class="font-bold">ADMINCA</h1>
                                    <p class="font-16">Save your time, choose the best</p>
                                    <ul class="list-unstyled">
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                        <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                    </ul>
                                </div>
                            </div>
                            <div style="flex:1;">
                                <div class="d-flex justify-content-end wrap-3">
                                    <div class="adminca-banner-b m-r-20">
                                        <img src="./assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                    <div class="adminca-banner-b m-r-10">
                                        <img src="./assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                                </div>
                                <div class="dev-img">
                                    <img src="./assets/img/adminca-banner/sprite.png" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                include('common/footer.php');
            ?>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php
        include('common/configue_panel.php');
    ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <?php
        include('common/preloader.php');
    ?>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
   <?php
    include('common/main_footer.php');
   ?>
</body>
