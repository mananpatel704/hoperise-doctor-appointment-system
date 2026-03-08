<?php
 $student_id=$_GET['student_id'];
$conn=mysqli_connect("localhost","root","","student_info");
$query=mysqli_query($conn,"delete from student_s where student_id=$student_id");
if($query){
    //deleted data;
    header("Location:insted_demo.php");
}
$student_data=mysqli_query($conn,"select*from student_id");
?>
