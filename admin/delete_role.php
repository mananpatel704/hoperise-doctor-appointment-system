<?php
    include('common/css.php');
$role_id=$_GET['role_id'];
$query=mysqli_query($conn,"delete from hs_role where role_id=$role_id");
    if($query)
    { 
        echo "Role Deleted";
        header("Location:display_role.php");
    }

?>
