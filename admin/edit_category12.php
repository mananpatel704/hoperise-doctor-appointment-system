<?php
include('common/css.php');
$category_id = $_GET['category_id'];

// Get category data
$select_category = mysqli_query($conn, "SELECT * FROM hs_category WHERE category_id = $category_id");
$category_row = mysqli_fetch_array($select_category);
$thumbDir = 'thumb/';
$uploadDir = 'images/';

// Ensure directories exist
if (!is_dir($thumbDir)) {
    mkdir($thumbDir, 0777, true);
}

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_POST['submit'])) {
    // Get the submitted category data
    $category_title = $_POST['category_title'];
    $category_description = $_POST['category_description'];
    $category_thumb = $_FILES["category_thumb"]["name"]; // For the thumbnail image

    // Handle the category thumbnail update
    if (empty($category_thumb)) {
        // No new thumbnail, keep the existing one
        $category_thumb = $category_row['category_thumb'];
    } else {
        // Delete the old thumbnail if a new one is uploaded
        if (!empty($category_row['category_thumb'])) {
            unlink("thumb/" . $category_row['category_thumb']);
        }
        // Upload the new thumbnail image
        $thumbPath = $thumbDir . $category_thumb;
        move_uploaded_file($_FILES["category_thumb"]["tmp_name"], $thumbPath);
    }

    // Handle other images if provided
    $uploadedImages = [];
    if (!empty($_FILES['category_thumb']['name'][0])) {
        // Delete old images if new ones are uploaded
        $oldImageUrls = explode(',', $category_row['category_thumb']);
        foreach ($oldImageUrls as $oldImageUrl) {
            $oldImageUrl = trim($oldImageUrl);
            if (!empty($oldImageUrl)) {
                unlink("images/" . $oldImageUrl); // Delete old images from the `images/` folder
            }
        }

        // Upload new images
        foreach ($_FILES['category_thumb']['name'] as $key => $val) {
            $path = $uploadDir . $val;
            move_uploaded_file($_FILES['category_thumb']["tmp_name"][$key], $path);
            $uploadedImages[] = $val; // Add uploaded image name to the array
        }
    } else {
        // No new images, keep the existing ones
        $uploadedImages = explode(',', $category_row['category_thumb']);
    }

    // Update the database (optional part of your code)
    $category_thumb = implode(',', $uploadedImages); // Update category_thumb field with new image names (if any)
    $update_query = "UPDATE hs_category SET 
        category_title = '$category_title', 
        category_description = '$category_description', 
        category_thumb = '$category_thumb'
        WHERE category_id = $category_id";
    mysqli_query($conn, $update_query);

    // Optionally, you can redirect after the update (e.g., to the category page or the edit form)
    // header("Location: category_edit.php?category_id=$category_id");




    // $path="uploads/";
    // $category_thumb_org=$_FILES['category_thumb']['name'];
    // $category_thumb_tmp=$_FILES['category_thumb']['tmp_name'];
    // $imagepath=$path.$category_thumb_org;
    // move_uploaded_file($category_thumb_tmp,$imagepath); 

    $query=mysqli_query($conn,"update hs_category set category_title='$category_title',category_description='$category_description',category_thumb='$category_thumb' where category_id=$category_id");
    if($query)
    { 
        echo "category Updated";
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
                <h1 class="page-title">category Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">category Form</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">category form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>category Title</label>
                                            <input class="form-control" type="text" placeholder="category Title" value="<?php echo $category_row['category_title']; ?>" name="category_title">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>category Desription</label>
                                            <input class="form-control" type="text" placeholder="category desription" value="<?php echo $category_row['category_description']; ?>" name="category_description">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>category Thumb</label>
                                            <input class="form-control" type="file" placeholder="category thumb" value="<?php echo $category_row['category_thumb']; ?>" name="category_thumb">
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