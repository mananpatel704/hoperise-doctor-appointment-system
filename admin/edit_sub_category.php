<?php
    include('common/css.php');
    $sub_category_id = $_GET['sub_category_id'];

    // Fetch the existing sub-category details
    $select_sub_category = mysqli_query($conn, "SELECT * FROM hs_sub_category WHERE sub_category_id = $sub_category_id");
    $sub_category_row = mysqli_fetch_array($select_sub_category);

    if (isset($_POST['submit'])) {
        $category_id = $_POST['category_id'];
        $sub_category_title = $_POST['sub_category_title'];
        $sub_category_description = $_POST['sub_category_description'];

        // Check if a new image is uploaded
        if (!empty($_FILES['sub_category_thumb']['name'])) {
            $path = "uploads/";
            $sub_category_thumb_org = $_FILES['sub_category_thumb']['name'];
            $sub_category_thumb_tmp = $_FILES['sub_category_thumb']['tmp_name'];
            $imagepath = $path . $sub_category_thumb_org;

            // Move the uploaded file to the server's directory
            move_uploaded_file($sub_category_thumb_tmp, $imagepath);

            // Update the database with the new image
            $query = mysqli_query($conn, "UPDATE hs_sub_category SET category_id = $category_id, sub_category_title = '$sub_category_title', sub_category_description = '$sub_category_description', sub_category_thumb = '$sub_category_thumb_org' WHERE sub_category_id = $sub_category_id");
        } else {
            // If no new image is uploaded, use the old image
            $sub_category_thumb_org = $sub_category_row['sub_category_thumb']; // Retain the old image

            // Update the database without changing the image
            $query = mysqli_query($conn, "UPDATE hs_sub_category SET category_id = $category_id, sub_category_title = '$sub_category_title', sub_category_description = '$sub_category_description', sub_category_thumb = '$sub_category_thumb_org' WHERE sub_category_id = $sub_category_id");
        }

        if ($query) {
            echo "Sub-category updated successfully.";
        } else {
            echo "Error updating sub-category.";
        }
    }
?>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <?php include('common/header.php'); ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php include('common/sidebar.php'); ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Sub-category Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Sub-category Form</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Sub-category Form</div>
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
                                            <label>Category Name</label>
                                            <select class="form-control" name="category_id">
                                                <?php
                                                    // Fetch all categories for the select input
                                                    $category_data = mysqli_query($conn, "SELECT * FROM hs_category");
                                                    while ($category_row = mysqli_fetch_array($category_data)) {
                                                ?>
                                                <option value="<?php echo $category_row['category_id']; ?>" <?php echo ($category_row['category_id'] == $sub_category_row['category_id']) ? 'selected' : ''; ?>>
                                                    <?php echo $category_row['category_title']; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Sub-category Title</label>
                                            <input class="form-control" type="text" placeholder="Sub-category Title" value="<?php echo $sub_category_row['sub_category_title']; ?>" name="sub_category_title">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Sub-category Description</label>
                                            <input class="form-control" type="text" placeholder="Sub-category Description" value="<?php echo $sub_category_row['sub_category_description']; ?>" name="sub_category_description">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Sub-category Thumb</label>
                                            <input class="form-control" type="file" name="sub_category_thumb">
                                            <small>Current Image: <?php echo $sub_category_row['sub_category_thumb']; ?></small>
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
            </div>
            <?php include('common/footer.php'); ?>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include('common/configue_panel.php'); ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <?php include('common/preloader.php'); ?>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <?php include('common/main_footer.php'); ?>
</body>
