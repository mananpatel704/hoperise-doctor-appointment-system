<?php
    include('common/css.php');
$service_id=$_GET['service_id'];
$query=mysqli_query($conn,"delete from hs_service where service_id=$service_id");
    if($query)
    { 
        echo "Role Deleted";
        header("Location:display_service.php");
    }

?>
