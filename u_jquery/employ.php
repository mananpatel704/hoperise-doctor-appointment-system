<?php
$conn=mysqli_connect("localhost","root","","student_info");
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
    $query=mysqli_query($conn,"SELECT*FROM employ_table WHERE emp_email='$emp_email'");
    if(mysqli_num_rows($query)>0){
        echo "error(email  is allready accsed)";
    }
    else{
        //echo "insert into employ_table (emp_fname,emp_lname,emp_email,emp_number,emp_address,emp_designation,emp_gender,emp_hobby,emp_doj,emp_dob)value('$emp_fname',$emp_lname','$emp_email',$emp_number,'$emp_address','$emp_designation','$emp_gender','$emp_hobby','$emp_doj','$emp_dob')";
    $query=mysqli_query($conn,"insert into employ_table (emp_fname,emp_lname,emp_email,emp_password,emp_contact,emp_address,emp_designation,emp_gender,emp_hobby,emp_doj,emp_dob) values ('$emp_fname','$emp_lname','$emp_email','$emp_password',$emp_contact,'$emp_address','$emp_designation','$emp_gender','$implode_hobby','$emp_doj','$emp_dob')");
    if($query)
    {
        echo "Data Inserted succefully";
    }
}    
}
$emp_data=mysqli_query($conn,"select*from employ_table");
?>
<html>
<head>
     <title>emplot_table</title>
</head>
<body>
    <form action="" method="post"> 
    emp_fname<input type="text" name="emp_fname"><br>
    emp_lname<input type="text" name="emp_lname"><br>
    emp_email<input type="text" name="emp_email"><br>
    emp_password<input type="text" name="emp_password"><br>
    emp_contact<input type="text" name="emp_contact"><br>
    emp_addresss<textarea name="emp_address"></textarea><Br>
    emp_designation:<select name="emp_designation">
        <option value="Manager">Manager</option>
        <option value="HR">HR</option>
        <option value="Developer">Developer</option>
</select><br>
    emp_gender:<input type="radio" name="emp_gender" value="male">Male
    <input type="radio" name="emp_gender" value="female">Female<br>
    emp_hobby:<input type="checkbox" name="emp_hobby[]" value="badmention">Badmention
                <input type="checkbox" name="emp_hobby[]" value="music">Music
               <input type="checkbox" name="emp_hobby[]" value="travlin">Travling<br>
    emp_doj<input type="date" name="emp_doj"><br>
    emp_dob<input type="date" name="emp_dob"><br>
    <input type="submit" name="submit">
  </form>
  <table border="1">
    <tr>
        <th>fname</th>
        <th>lname</th>
        <th>email</th>
        <th>password</th>
        <th>contact</th>
        <th>address</th>
        <th>designation</th>
        <th>gender</th>
        <th>hobby</th>
        <th>doj</th>
        <th>dob</th>
        <th>update</th>
        <th>delete</th>
        <th>change password</th>
    </tr>
    <?php
    while($emp_row=mysqli_fetch_array($emp_data))
    {
    ?>
    <tr> 
        <td><?php echo $emp_row['emp_fname'];?></td>
        <td><?php echo $emp_row['emp_lname'];?></td>
        <td><?php echo $emp_row['emp_email'];?></td>
        <td><?php echo $emp_row['emp_password'];?></td>
        <td><?php echo $emp_row['emp_contact'];?></td>
        <td><?php echo $emp_row['emp_address'];?></td>
        <td><?php echo $emp_row['emp_designation'];?></td>
        <td><?php echo $emp_row['emp_gender'];?></td>
        <td><?php echo $emp_row['emp_hobby'];?></td>
        <td><?php echo $emp_row['emp_doj'];?></td>
        <td><?php echo $emp_row['emp_dob'];?></td>
        <td><a href="update_emp.php?emp_id=<?php echo $emp_row['emp_id'];?>">update</a></td>
        <td><a href="delete_emp.php?emp_id=<?php echo $emp_row['emp_id'];?>">delete</a></td>  
        <td><a href="change_password.php?emp_id=<?php echo $emp_row['emp_id'];?>">change password</a></td>   
    </tr>

    
    <?php
    }
    ?>
    </table>
</body>
</html>