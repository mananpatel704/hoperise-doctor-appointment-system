<html>
    <head>
       
        <title>sum</title>
    </head>
    <body>
        <form action="" method="post">
    <input type="text" name="num1" class="a"> 
    <input type="text" name="num2" class="b">
    <input type="submit"name="submit">
    </form>
    </body>
    </html>
<?php
if(isset($_POST['submit']))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
add($num1,$num2);
}
function add($a,$b)
{
$sum=$a+$b;
echo $sum;
}
?>


