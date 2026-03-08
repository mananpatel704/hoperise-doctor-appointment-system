<?php
    include('common/css.php');
if(isset($_POST['submit']))
{
    $category_id=$_POST['category_id'];
    $sub_category_title=$_POST['sub_category_title'];
    $sub_category_description=$_POST['sub_category_description'];
    // $sub_category_thumb=$_POST['sub_category_thumb'];
    
    $path="uploads/";
    $sub_category_thumb_org=$_FILES['sub_category_thumb']['name'];
    $sub_category_thumb_tmp=$_FILES['sub_category_thumb']['tmp_name'];
    $imagepath=$path.$sub_category_thumb_org;
    move_uploaded_file($sub_category_thumb_tmp,$imagepath);

    $query=mysqli_query($conn,"insert into hs_sub_category (category_id,sub_category_title,sub_category_description,sub_category_thumb) values ($category_id,'$sub_category_title','$sub_category_description','$sub_category_thumb_org')");
    if($query)
    { 
        echo "Role Inserted";
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
                <h1 class="page-title">Sub_Category</h1>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Sub_Category </div>
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
                                <form action="" method="post"  enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-sm-12 form-group">
                                            <label>Category name</label>
                                            <select class="form-control" name="category_id">
                                                <?php
                                                $category_data=mysqli_query($conn,"select * from hs_category");
                                                while($category_row=mysqli_fetch_array($category_data))
                                                {
                                                ?>
                                                <option value="<?php echo $category_row['category_id']; ?>"><?php echo $category_row['category_title']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Sub_Category Title</label>
                                            <input class="form-control" type="text" placeholder="sub_category Title" name="sub_category_title">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Sub_Category Desription</label>
                                            <input class="form-control" type="text" placeholder="sub_category desription" name="sub_category_description">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Sub_Category Thumb</label>
                                            <input class="form-control" type="file" placeholder="sub_category thumb" name="sub_category_thumb">
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