<?php
 $emp_id=$_GET['emp_id'];
$conn=mysqli_connect("localhost","root","","student_info");
$query=mysqli_query($conn,"delete from employ_table where emp_id=$emp_id");
if($query){
    //deleted data;
    header("Location:employ.php");
}
$emp_data=mysqli_query($conn,"select*from emp_id");

?>
