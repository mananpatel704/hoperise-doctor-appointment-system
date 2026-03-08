<?php
    $conn=mysqli_connect("localhost","root","","hoperise");
    if(isset($_POST['submit']))
    {
        $admin_username=$_POST['admin_username'];
        $admin_email=$_POST['admin_email'];
        $admin_password=$_POST['admin_password'];
        
        $admin_thumb_org=$_FILES["admin_thumb"]["name"];
        $admin_thumb_tmp=$_FILES["admin_thumb"]["tmp_name"];
        $target_file="uploads/".$admin_thumb_org;

        move_uploaded_file($admin_thumb_tmp, $target_file);

        $role_id=$_POST['role_id'];
        
        $email_query=mysqli_query($conn,"select * from hs_admin where admin_email='$admin_email'");
        
        if(mysqli_num_rows($email_query)>0)

        {
                echo "Email already taken";
        }
        else
        {
            
            $query=mysqli_query($conn,"insert into hs_admin(admin_username,admin_email,admin_password,admin_thumb,role_id)values('$admin_username','$admin_email','$admin_password','$admin_thumb_org',$role_id)");
            if($query)
            {
                echo "Data inserted";
            }
            else{
                echo "Data Can not be inserted";
            }
        }
    }
    $role_data=mysqli_query($conn,"select * from hs_role");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Hope Rise Medical | Register</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="./assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.php">Hope Rise Medical</a>
        </div>
        <form  action="" method="post" enctype="multipart/form-data">
            <h2 class="login-title">Sign Up</h2>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input class="form-control" type="text" name="admin_username" placeholder="User Name" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="admin_email" placeholder="Email" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="admin_password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="file" name="admin_thumb" placeholder="Thumb">
            </div>
            <div class="form-group">
                <!-- <input class="form-control" type="" name="role_id" placeholder="Role Id"> -->
                <select  class="form-control" type="number" name="role_id" placeholder="Role Id">
                    <?php
                        while($role_row=mysqli_fetch_array($role_data))
                        {
                    ?>
                    <tr>
                            <td><option value="<?php echo $role_row['role_id'];?>"></td>
                            <td><?php echo $role_row['role_title'];?></td>
                            </option>
                   </tr>
                   <?php
                    }
                   ?>
                </select>
            </div>
            <div class="form-group text-left">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox" name="agree">
                    <span class="input-span"></span>I agree the terms and policy</label>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit" name="submit">Sign up</button>
                <!-- <input type="submit" class="btn btn-info btn-block" name="submit"> -->
            </div>
            
            <div class="text-center">Already a member?
                <a class="color-blue" href="login.php">Login here</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#register-form').validate({
                errorClass: "help-block",
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2
                    },
                    last_name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        confirmed: true
                    },
                    password_confirmation: {
                        equalTo: password
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>