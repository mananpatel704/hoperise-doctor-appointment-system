<?php
    include('common/css.php');
$doctor_id=$_GET['doctor_id'];
$query=mysqli_query($conn,"delete from hs_doctor where doctor_id=$doctor_id");
    if($query)
    { 
        echo "Role Deleted";
        header("Location:display_doctor.php");
    }

?>
