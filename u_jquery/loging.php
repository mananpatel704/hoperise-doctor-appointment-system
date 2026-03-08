<?php
$conn=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['loging']))
{
    $emp_email=$_POST['emp_email'];
    $emp_password=$_POST['emp_password'];
    
    $query=mysqli_query($conn,"SELECT*FROM employ_table WHERE emp_email='$emp_email'AND emp_password='$emp_password'");
    if(mysqli_num_rows($query)>0){
        echo"email & password matched successfully";
    }
    else{
        echo"incorrect password & email";
    }
}
?>
<html>
    <head>  
        <title>Document</title>
    </head>
    <body>
    <form action=""method="post">
        Eamil:
        <input type="email" name="emp_email"><br>
        Password:
        <input type="password" name="emp_password"><br>
        <input type="submit" name="loging"><br>
        </form>
    </body>
    </html>