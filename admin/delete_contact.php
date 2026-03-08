<?php
    include('common/css.php');
$hs_id=$_GET['hs_id'];
$query=mysqli_query($conn,"delete from hs_contact where hs_id=$hs_id");
    if($query)
    { 
        echo "contact Deleted";
        header("Location:display_contact.php");
    }

?>
