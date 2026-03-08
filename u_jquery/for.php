<html>
   
   
    <head>
        
        <title>Document</title>
    </head>
    <body>
    <form action="" method="get">
            Number<input type="text" name="number1">
            Number<input type="text" name="number2">
            <input type="submit" name="submit">
        </form>
    </body>
    </html>



<?php

if(isset($_REQUEST['submit']))
{
    $number=$_REQUEST['number1'];
    $number=$_REQUEST['number2'];
    for($i=0;$i<=10;$i++)
{
     echo "<br>".$i." ";
}
   


}
// for($i=0;$i<=10;$i++)
// {
//     echo $i." ";
// }
?>