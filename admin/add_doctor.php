<?php
    include('common/css.php');
if(isset($_POST['submit']))
{
    
    $role_id=$_POST['role_id'];
    $category_id=$_POST['category_id'];
    $sub_category_id=$_POST['sub_category_id'];
    $service_id=$_POST['service_id'];
    $doctor_fname=$_POST['doctor_fname'];
    $doctor_mname=$_POST['doctor_mname'];
    $doctor_lname=$_POST['doctor_lname'];
    $doctor_email=$_POST['doctor_email'];
    $doctor_password=$_POST['doctor_password'];
    $doctor_phone=$_POST['doctor_phone'];
    $doctor_address=$_POST['doctor_address'];
    $doctor_dob=$_POST['doctor_dob'];
    $doctor_doj=$_POST['doctor_doj'];
    $doctor_gender=$_POST['doctor_gender'];
    // $doctor_thumb=$_POST['doctor_thumb'];

    $path="uploads/";
    $doctor_thumb_org=$_FILES['doctor_thumb']['name'];
    $doctor_thumb_tmp=$_FILES['doctor_thumb']['tmp_name'];
    $imagepath=$path.$doctor_thumb_org;
    move_uploaded_file($doctor_thumb_tmp,$imagepath);

    $query=mysqli_query($conn,"insert into hs_doctor (role_id,category_id,sub_category_id,service_id,doctor_fname,doctor_mname,doctor_lname,doctor_email,doctor_password,doctor_phone,doctor_address,doctor_dob,doctor_doj,doctor_gender,doctor_thumb) values ($role_id,$category_id,$sub_category_id,$service_id,'$doctor_fname','$doctor_mname','$doctor_lname','$doctor_email','$doctor_password','$doctor_phone','$doctor_address','$doctor_dob','$doctor_doj','$doctor_gender','$doctor_thumb_org')");
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
                <h1 class="page-title">Doctor</h1>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Doctor </div>
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
                                            <label>Role Id</label>
                                            <select class="form-control" name="role_id">
                                                <?php
                                                $category_data=mysqli_query($conn,"select * from hs_role");
                                                while($category_row=mysqli_fetch_array($category_data))
                                                {
                                                ?>
                                                <option value="<?php echo $category_row['role_id']; ?>"><?php echo $category_row['role_title']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                       <div class="col-sm-12 form-group">
                                            <label>category name</label>
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
                                            <label>sub_category name</label>
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
                                            <label>Service name</label>
                                            <select class="form-control" name="service_id">
                                                <?php
                                                $service_data=mysqli_query($conn,"select * from hs_service");
                                                while($service_row=mysqli_fetch_array($service_data))
                                                {
                                                ?>
                                                <option value="<?php echo $service_row['service_id']; ?>"><?php echo $service_row['service_title']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Fname</label>
                                            <input class="form-control" type="text" placeholder="doctor fname" name="doctor_fname">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Mname</label>
                                            <input class="form-control" type="text" placeholder="doctor mname" name="doctor_mname">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Lname</label>
                                            <input class="form-control" type="text" placeholder="doctor lname" name="doctor_lname">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Email</label>
                                            <input class="form-control" type="email" placeholder="doctor email" name="doctor_email">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Password</label>
                                            <input class="form-control" type="text" placeholder="doctor password" name="doctor_password">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Phone</label>
                                            <input class="form-control" type="tel" placeholder="doctor phone" name="doctor_phone">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Address</label>
                                            <textarea class="form-control" placeholder="doctor address" name="doctor_address" rows="4" cols="10"></textarea>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Dob</label>
                                            <input class="form-control" type="date" placeholder="doctor dob" name="doctor_dob">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Doj</label>
                                            <input class="form-control" type="date" placeholder="doctor doj" name="doctor_doj">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label> Docter Gender</label>
                                            <input class="form-control" type="radio" name="doctor_gender" value="male">Male
                                            <input class="form-control" type="radio" name="doctor_gender" value="female">Female
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Thumb</label>
                                            <input class="form-control" type="file" placeholder="doctor thumb" name="doctor_thumb">
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