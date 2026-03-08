<?php
    include('common/css.php');
$sub_category_id=$_GET['sub_category_id'];
$query=mysqli_query($conn,"delete from hs_sub_category where sub_category_id=$sub_category_id");
    if($query)
    { 
        echo "Role Deleted";
        header("Location:display_sub_category.php");
    }

?>
