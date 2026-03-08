<?php
 
 $student_id=$_GET['student_id'];
$conn=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['loging']))
{
    $student_oldpassword=$_POST['student_oldpassword'];
    $student_newpassword=$_POST['student_newpassword'];
    $student_comfirmpassword=$_POST['student_comfirmpassword'];
    $query=mysqli_query($conn,"SELECT*FROM student_detail WHERE student_password='$student_oldpassword'");
    if(mysqli_num_rows($query)>0){
        if($emp_newpassword == $emp_comfirmpassword)
        {
            $query=mysqli_query($conn,"update student_detail set student_password='$student_comfirmpassword'WHERE student_id=$student_id");
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
        <input type="password" name="student_oldpassword"><br>
        newPassword:
        <input type="password" name="student_newpassword"><br>
        comfirmPassword:
        <input type="password" name="student_comfirmpassword"><br>

        <input type="submit" name="loging"><br>
        </form>
    </body>
    </html>