<?php
 $emp_id=$_GET['emp_id'];
$conn=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['loging']))
{
    $emp_oldpassword=$_POST['emp_oldpassword'];
    $emp_newpassword=$_POST['emp_newpassword'];
    $emp_comfirmpassword=$_POST['emp_comfirmpassword'];
    $query=mysqli_query($conn,"SELECT*FROM employ_table WHERE emp_password='$emp_oldpassword'");
    if(mysqli_num_rows($query)>0){
        if($emp_newpassword == $emp_comfirmpassword)
        {
            $query=mysqli_query($conn,"update employ_table set emp_password='$emp_comfirmpassword'WHERE emp_id=$emp_id");
        if($query)
        {
            echo "Data update succefully";
        }
        }
    }
    else{
        echo"incorrect password ";
    }
}
?>

<html>
    
    <head>
  
        <title>change password</title>
    </head>
    <body>
    <form action=""method="post">
        oldpassword:
        <input type="password" name="emp_oldpassword"><br>
        newPassword:
        <input type="password" name="emp_newpassword"><br>
        comfirmPassword:
        <input type="password" name="emp_comfirmpassword"><br>

        <input type="submit" name="loging"><br>
        </form>
    </body>
    </html>