<?php
session_start();
if(isset($_SESSION['admin_id']))
    {
        header("Location:index.php");
    }
    $conn=mysqli_connect("localhost","root","","hoperise");
    if(isset($_POST['submit']))
    {
        
        $admin_email=$_POST['admin_email'];
        $admin_password=$_POST['admin_password'];
        $role_title=$_POST['role_title'];
        if($role_title=='admin')
        {
            $email_query=mysqli_query($conn,"select * from hs_admin where admin_email='$admin_email' AND admin_password='$admin_password'");
            if(mysqli_num_rows($email_query)>0)
            {
                $email_row=mysqli_fetch_array($email_query);
                $_SESSION['admin_id']=$email_row['admin_id'];
                $_SESSION['admin_username']=$email_row['admin_username'];
                $_SESSION['role_id']=$email_row['role_id'];
                $_SESSION['admin_email']=$email_row['admin_email'];
                header("Location:index.php");
            }
            else
            {
                echo "Password Incorrect";
            }
        }
        else
        {
            $email_query=mysqli_query($conn,"select * from hs_doctor where doctor_email='$admin_email' AND doctor_password='$admin_password'");
            if(mysqli_num_rows($email_query)>0)
            {
                $email_row=mysqli_fetch_array($email_query);
                $_SESSION['admin_id']=$email_row['doctor_id'];
                $_SESSION['admin_username']=$email_row['doctor_fname']." ".$email_row['doctor_lname'];
                $_SESSION['role_id']=$email_row['role_id'];
                $_SESSION['admin_email']=$email_row['doctor_email'];
                header("Location:index.php");
            }
            else
            {
                echo "Password Incorrect";
            }
        }
    }
        
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Hope Rise Medical | Login</title>
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
        <form  action="" method="post">
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="admin_email" placeholder="Email" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="admin_password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <select class="form-control" name="role_title">
                        <?php
                        $select_role=mysqli_query($conn,"select * from hs_role");
                        while($select_row=mysqli_fetch_array($select_role))
                        {
                        ?>
                        <option value="<?php echo $select_row['role_title']; ?>"><?php echo $select_row['role_title']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="forgot_password.php">Forgot password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit" name="submit">Login</button>
            </div>
            
            <div class="text-center">Not a member?
                <a class="color-blue" href="register.php">Create accaunt</a>
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
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
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