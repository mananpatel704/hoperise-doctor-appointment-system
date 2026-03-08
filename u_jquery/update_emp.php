<?php
 $emp_id=$_GET['emp_id'];
$conn=mysqli_connect("localhost","root","","student_info");
$emp_data=mysqli_query($conn,"select * from employ_table where emp_id=$emp_id");
$emp_row=mysqli_fetch_array($emp_data);

if(isset($_POST['submit']))
{
    $emp_fname=$_POST['emp_fname'];
    $emp_lname=$_POST['emp_lname'];
    $emp_email=$_POST['emp_email'];
    $emp_password=$_POST['emp_password'];
    $emp_contact=$_POST['emp_contact'];
    $emp_address=$_POST['emp_address'];
    $emp_designation=$_POST['emp_designation'];
    $emp_gender=$_POST['emp_gender'];
    $emp_hobby=$_POST['emp_hobby'];
    $implode_hobby=implode(",",$emp_hobby);
    $emp_doj=$_POST['emp_doj'];
    $emp_dob=$_POST['emp_dob'];
    $query=mysqli_query($conn,"SELECT*FROM employ_table WHERE emp_email='$emp_email' AND emp_id!=$emp_id");
    if(mysqli_num_rows($query)>0){
        echo "error(email  is allready accsed)";
    }
    else{
        $query=mysqli_query($conn,"update employ_table set emp_fname='$emp_fname',emp_lname='$emp_lname',emp_email='$emp_email',emp_contact=$emp_contact,emp_address='$emp_address',emp_designation='$emp_designation',emp_gender='$emp_gender',emp_hobby='$implode_hobby',emp_doj='$emp_doj',emp_dob='$emp_dob'where emp_id=$emp_id");
        if($query)
        {
            echo "Data update succefully";
        }
    
}
}
$emp_data=mysqli_query($conn,"select*from employ_table");

?>
<html>
<head>
     <title>employ_table</title>
</head>
<body>
<form action="" method="post"> 
    emp_FName<input type="text" placeholder="FName"name="emp_fname" value='<?php echo $emp_row['emp_fname'];?>'><br>
    emp_LName<input type="text" placeholder="LName"name="emp_lname" value='<?php echo $emp_row['emp_lname'];?>'><br>
    emp_Email<input type="text" placeholder="Email" name="emp_email" value='<?php echo $emp_row['emp_email'];?>'><br>
    emp_Password<input type="text" placeholder="Password" name="emp_password" value='<?php echo $emp_row['emp_password'];?>'><br>
    emp_Contact<input type="text"placeholder="Contact"name="emp_contact" value='<?php echo $emp_row['emp_contact'];?>'><br>
    emp_Addresss<textarea  placeholder="Address" name="emp_address"  value='<?php echo $emp_row['emp_address'];?>'></textarea><Br>
    emp_designation<select name="emp_designation">
    <option value="Manager" <?php if($emp_row['emp_designation']=='Manager'){echo "selected";}?>>Manager</option>
        <option  value="HR" <?php if($emp_row['emp_designation']=='HR'){echo "selected";}?>>HR</option>
        <option  value="Developer" <?php if($emp_row['emp_designation']=='Developer'){echo "selected";}?>>Developer</option>
</select><br>
    emp_gender:<input type="radio" name="emp_gender" value="male" <?php if($emp_row['emp_gender']=='male'){echo "checked";}?>>Male
    <input type="radio" name="emp_gender" value="female" <?php if($emp_row['emp_gender']=='female'){echo "checked";}?>>Female<br>
    <?php
    $explode_hobby=explode(",",$emp_row['emp_hobby']);
    ?>
    emp_hobby:<input type="checkbox" name="emp_hobby[]"value="badmention" <?php if(in_array('badmention',$explode_hobby)){echo "checked";}?>>Badmention
                <input type="checkbox" name="emp_hobby[]" value="music"  <?php if(in_array('music',$explode_hobby)){echo "checked";}?>>Music
               <input type="checkbox" name="emp_hobby[]" value="travling"  <?php if(in_array('travling',$explode_hobby)){echo "checked";}?>>Travling<br>
    emp_doj<input type="date" name="emp_doj"><br>
    emp_dob<input type="date" name="emp_dob"><br>
   
    <input type="submit" name="submit">
  </form>
  </body>
</html>