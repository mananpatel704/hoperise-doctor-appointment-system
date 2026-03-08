<?php
    include('common/css.php');
    $doctor_id = $_GET['doctor_id'];
    $select_doctor = mysqli_query($conn, "SELECT * FROM hs_doctor WHERE doctor_id = $doctor_id");
    $doctor_row = mysqli_fetch_array($select_doctor);

    if (isset($_POST['submit'])) {
        // Form data
        $role_id = $_POST['role_id'];
        $category_id = $_POST['category_id'];
        $sub_category_id = $_POST['sub_category_id'];
        $service_id = $_POST['service_id'];
        $doctor_fname = $_POST['doctor_fname'];
        $doctor_mname = $_POST['doctor_mname'];
        $doctor_lname = $_POST['doctor_lname'];
        $doctor_email = $_POST['doctor_email'];
        $doctor_password = $_POST['doctor_password'];
        $doctor_phone = $_POST['doctor_phone'];
        $doctor_address = $_POST['doctor_address'];
        $doctor_dob = $_POST['doctor_dob'];
        $doctor_doj = $_POST['doctor_doj'];
        $doctor_gender = $_POST['doctor_gender'];

        // Check if a new image is uploaded
        if (!empty($_FILES['doctor_thumb']['name'])) {
            // New image uploaded
            $path = "uploads/";
            $doctor_thumb_org = $_FILES['doctor_thumb']['name'];
            $doctor_thumb_tmp = $_FILES['doctor_thumb']['tmp_name'];
            $imagepath = $path . $doctor_thumb_org;
            move_uploaded_file($doctor_thumb_tmp, $imagepath);
        } else {
            // No new image uploaded, retain the old image
            $doctor_thumb_org = $doctor_row['doctor_thumb'];
        }

        // Update the doctor data in the database
        $query = mysqli_query($conn, "UPDATE hs_doctor SET role_id = $role_id,  category_id = $category_id, sub_category_id = $sub_category_id, service_id = $service_id,doctor_fname = '$doctor_fname', doctor_mname = '$doctor_mname', doctor_lname = '$doctor_lname', doctor_email = '$doctor_email', doctor_password = '$doctor_password', doctor_phone = '$doctor_phone', doctor_address = '$doctor_address', doctor_dob = '$doctor_dob',  doctor_doj = '$doctor_doj', doctor_gender = '$doctor_gender',  doctor_thumb = '$doctor_thumb_org'   WHERE doctor_id = $doctor_id");

        if ($query) {
            echo "Doctor updated successfully!";
        } else {
            echo "Error updating doctor details!";
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
                <h1 class="page-title">doctor Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">doctor Form</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">doctor form</div>
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
                                                $category_data=mysqli_query($conn,"select * from hs_service");
                                                while($category_row=mysqli_fetch_array($category_data))
                                                {
                                                ?>
                                                <option value="<?php echo $category_row['service_id']; ?>"><?php echo $category_row['service_title']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Fname</label>
                                            <input class="form-control" type="text" placeholder="doctor fname" value="<?php echo $doctor_row['doctor_fname']; ?>" name="doctor_fname">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Mname</label>
                                            <input class="form-control" type="text" placeholder="doctor mname"value="<?php echo $doctor_row['doctor_mname']; ?>" name="doctor_mname">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Lname</label>
                                            <input class="form-control" type="text" placeholder="doctor lname"value="<?php echo $doctor_row['doctor_lname']; ?>" name="doctor_lname">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter email</label>
                                            <input class="form-control" type="email" placeholder="doctor email" value="<?php echo $doctor_row['doctor_email']; ?>" name="doctor_email">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Password</label>
                                            <input class="form-control" type="text" placeholder="doctor password"value="<?php echo $doctor_row['doctor_password']; ?>" name="doctor_password">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Phone</label>
                                            <input class="form-control" type="tel" placeholder="doctor phone" value="<?php echo $doctor_row['doctor_phone']; ?>" name="doctor_phone">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Address</label>
                                            <input class="form-control" type="text" placeholder="doctor address" value="<?php echo $doctor_row['doctor_address']; ?>" name="doctor_address">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Dob</label>
                                            <input class="form-control" type="date" placeholder="doctor dob" value="<?php echo $doctor_row['doctor_dob']; ?>" name="doctor_dob">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Doj</label>
                                            <input class="form-control" type="date" placeholder="doctor doj"value="<?php echo $doctor_row['doctor_doj']; ?>" name="doctor_doj">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label> Docter Gender</label>
                                            <input class="form-control" type="redio" placeholder="doctor gender" value="<?php echo $doctor_row['doctor_gender']; ?>" name="doctor_gender">

                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Docter Thumb</label>
                                            <input class="form-control" type="file" placeholder="doctor thumb"  value="<?php echo $doctor_row['doctor_thumb']; ?>" name="doctor_thumb">
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