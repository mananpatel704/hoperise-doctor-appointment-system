<?php
if(isset($_POST['submit']))
{
    $id1name=$_POST['id1name'];
    $id2name=$_POST['id2name'];
    $id1email=$_POST['id1email'];
    $id2email=$_POST['id2email'];
    $id1contact=$_POST['id1contact'];
    $id2contact=$_POST['id2contact'];

?>
<html>
    <head>
        <title>Resume</title>
        <style>
            th{
                color: blue;
                font-size: 25px;
                font-weight: 800;
                background-color: skyblue;
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            td{
                background-color: aquamarine;
            }
        </style>
    </head>
    <body>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <tr>
                <td>1</td>
                <td class="setid1name"><?php if($id1name){ echo $id1name; } else { echo "ABC"; }?></td>
                <td class="setid1email"><?php if($id1email){echo $id1email; } else{ echo "abc@gmail.com";}?></td>
                <td class="setid1contact"><?php if($id1contact){echo $id1contact;}else{echo "9898989898";}?></td>
            </tr>
            <tr>
                <td>2</td>
                <td class="setid2name"><?php if($id2name){ echo $id2name; } else { echo "ABC"; }?></td>
                <td class="setid2email"><?php if($id2email){echo $id2email;}else{echo "abc@gmail.com";}?></td>
                <td class="setid2contact"><?php if($id2contact){echo $id2contact;}else{echo "9898989898";}?></td>
            </tr>
        </table>
        <?php
}
        ?>
        <form action="" method="post">
        Id1 Name<input type="text" class="getid1name" name="id1name"><br>
        Id2 Name<input type="text" class="getid2name" name="id2name"><br>
        Id1 Email<input type="text" class="getid1email" name="id1email"><br>
        Id2 Email<input type="text" class="getid2email" name="id2email"><br>
        Id1 Contact<input type="text" class="getid1contact" name="id1contact"><br>
        Id2 Contact<input type="text" class="getid2contact" name="id2contact"><br>
        <input type="submit" class="submit" name="submit"><br>
        </form>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
        <script>
            $('.submit').click(function ()
             {
                var getid1name = $(".getid1name").val();
                var getid2name = $(".getid2name").val();
                var getid1email = $(".getid1email").val();
                var getid2email= $(".getid2email").val();
                var getid1contact = $(".getid1contact").val();
                var getid2contact= $(".getid2contact").val();
            
                $(".setid1name").text(getid1name);
                $(".setid2name").text(getid2name);
                $(".setid1email").text(getid1email);
                $(".setid2email").text(getid2email);
                $(".setid1contact").text(getid1contact);
                $(".setid2contact").text(getid2contact);
                
             });
        </script>
    </body>
</html>