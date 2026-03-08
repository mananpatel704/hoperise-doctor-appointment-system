<?php
    include('common/css.php');
$category_id=$_GET['category_id'];
$query=mysqli_query($conn,"delete from hs_category where category_id=$category_id");
    if($query)
    { 
        echo "Role Deleted";
        header("Location:display_category.php");
    }

?>
