<?php
$conn=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['submit']))
{
    $student_name=$_POST['student_name'];
    $student_email=$_POST['student_email'];
    $student_number=$_POST['student_number'];
    $student_address=$_POST['student_address'];
    $query=mysqli_query($conn,"insert into student_s (student_name,student_email,student_number,student_address)value('$student_name','$student_email',$student_number,'$student_address')");
    if($query)
    {
        echo "Data Inserted succefully";
    }
}
$student_data=mysqli_query($conn,"select*from student_s");
?>
<html>
<head>
     <title>demo</title>
</head>
<body>
    <form action="" method="post"> 
    student_name<input type="text" name="student_name"><br>
    student_email<input type="text" name="student_email"><br>
    student_number<input type="text" name="student_number"><br>
    student_address<textarea name="student_address"></textarea><Br>
    <input type="submit" name="submit">
  </form>
  <table border="1">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>number</th>
        <th>address</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    <?php
    while($student_row=mysqli_fetch_array($student_data))
    {
    ?>
    <tr> 
        <td><?php echo $student_row['student_name'];?></td>
        <td><?php echo $student_row['student_email'];?></td>
        <td><?php echo $student_row['student_number'];?></td>
        <td><?php echo $student_row['student_address'];?></td>
        <td><a href="delete_demo.php?student_id=<?php echo $student_row['student_id'];?>">delete</a></td>
        <td><a href="edit_demo.php?student_id=<?php echo $student_row['student_id'];?>">edit</a></td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>