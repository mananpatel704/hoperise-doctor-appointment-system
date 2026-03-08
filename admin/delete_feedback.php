<?php
    include('common/css.php');
$feedback_id=$_GET['feedback_id'];
$query=mysqli_query($conn,"delete from hs_feedback where feedback_id=$feedback_id");
    if($query)
    { 
        echo "contact Deleted";
        header("Location:feedback.php");
    }

?>
