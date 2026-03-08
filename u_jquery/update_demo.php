<?php
 $student_id=$_GET['student_id'];
$conn=mysqli_connect("localhost","root","","student_info");
$student_data=mysqli_query($conn,"select*from student_s where student_id=$student_id")
$student_row=mysqli_fetch_array($student_data)

if(isset($_POST['submit']))
{
    $student_name=$_POST['student_name'];
    $student_email=$_POST['student_email'];
    $student_number=$_POST['student_number'];
    $student_address=$_POST['student_address'];
    $query=mysqli_query($conn,"update into student_s (student_name='$student_name',student_email='$student_email',student_number='$student_number',student_address='$student_address')where='$student_id'");
    if($query)
    {
        echo "Data update succefully";
    }
}


?>

<html>
<head>
     <title>demo</title>
</head>
<body>
    <form action="" method="post"> 
    student_name<input type="text" name="student_name" value="<?php echo $student_row['student_name'];?>"><br>
    student_email<input type="text" name="student_email" value="<?php echo $student_row['student_email'];?>"><br>
    student_number<input type="text" name="student_number" value="<?php echo $student_row['student_nnumber'];?>"><br>
    student_address<input type="textarea" name="student_address"><?php echo $student_row['student_address'];?></textarea><Br>
    <input type="submit" name="submit">
  </form>