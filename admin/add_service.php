<?php
    include('common/css.php');
if(isset($_POST['submit']))
{
    $category_id=$_POST['category_id'];
    $sub_category_id=$_POST['sub_category_id'];
    $service_title=$_POST['service_title'];
    $service_description=$_POST['service_description'];
    // $service_thumb=$_POST['service_thumb'];

    $path="uploads/";
    $service_thumb_org=$_FILES['service_thumb']['name'];
    $service_thumb_tmp=$_FILES['service_thumb']['tmp_name'];
    $imagepath=$path.$service_thumb_org;
    move_uploaded_file($service_thumb_tmp,$imagepath);

    $query=mysqli_query($conn,"insert into hs_service (category_id,sub_category_id,service_title,service_description,service_thumb) values ($category_id,$sub_category_id,'$service_title','$service_description','$service_thumb_org')");
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
                <h1 class="page-title">Service</h1>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Service </div>
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
                                            <label>Category Name</label>
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
                                            <label>Sub_Category Name</label>
                                            <select class="form-control" name="sub_category_id">
                                                <?php
                                                $category_data=mysqli_query($conn,"select * from hs_sub_category");
                                                while($category_row=mysqli_fetch_array($category_data))
                                                {
                                                ?>
                                                <option value="<?php echo $category_row['sub_category_id']; ?>"><?php echo $category_row['sub_category_title']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Service Title</label>
                                            <input class="form-control" type="text" placeholder="service Title" name="service_title">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Service Desription</label>
                                            <input class="form-control" type="text" placeholder="service desription" name="service_description">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Service Thumb</label>
                                            <input class="form-control" type="file" placeholder="service thumb" name="service_thumb">
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