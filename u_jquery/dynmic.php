<html>
    <!DOCTYPE html>
    
    <head>
       
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            Number<input type="text" name="number">
            <input type="submit" name="submit">
        </form>
    </body>
    </html>
    <?php
    if(isset($_POST['submit']))
    {
        $number=$_POST['number'];
        if($number%2==0)
        {
            echo"even";
        }
        else{
            echo "odd";
        }
    
    
    }
    ?>