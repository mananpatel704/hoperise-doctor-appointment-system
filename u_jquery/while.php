<html>
   
    <html lang="en">
    <head>
        
        <title>Document</title>
    </head>
    <body>
    <form action="" method="post">
            Number<input type="text" name="number1">
            Number<input type="text" name="number2">
            <input type="submit" name="submit">
        </form>
    </body>
    </html>



<?php

if(isset($_POST['submit']))
{
    $number=$_POST['number1'];
    $number=$_POST['number2'];

$i=0;
while ($i <=10) {

    echo $i." ";
    $i++;
}
}
?>