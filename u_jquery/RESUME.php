<?php
if(isset($_POST['submit']))
{
    $Id1phone=$_POST['Id1phone'];
    $Id1Email=$_POST['Id1Email'];
    $Id1Address=$_POST['Id1Address'];
    $Id1SchoolName1=$_POST['Id1SchoolName1'];
    $Id1SchoolName2=$_POST['Id1SchoolName2'];
    $Id1SchoolName3=$_POST['Id1SchoolName3'];
    $Id1duration1=$_POST['Id1duration1'];
    $Id1duration2=$_POST['Id1duration2'];
    $Id1duration3=$_POST['Id1duration3'];
    $Id1description1=$_POST['Id1description1'];
    $Id1description2=$_POST['Id1description2'];
    $Id1description3=$_POST['Id1description3'];
    $Id2YOURNAME=$_POST['Id2YOURNAME'];
    $Id2UI=$_POST['Id2UI'];
    $Iddescription=$_POST['Iddescription'];
    $Id2WORKName1=$_POST['Id2WORKName1'];
    $Id2WORKName2=$_POST['Id2WORKName2'];
    $Id2WORKName3=$_POST['Id2WORKName3'];
    $Id2duration1=$_POST['Id2duration1'];
    $Id2duration2=$_POST['Id2duration2'];
    $Id2duration3=$_POST['Id2duration3'];
    $Id2description1=$_POST['Id2description1'];
    $Id2description2=$_POST['Id2description2'];
    $Id2description3=$_POST['Id2description3'];
    $Id2skill=$_POST['Id2skill'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;


        }

        h2 {
            color: blue;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }

        .left_section {

            background-color: #ede6e6c5;
            color: black;
            border-radius: 10px;
            padding: 40px 50px 40px;
            font-weight: 500px;
        }

        .right_section {
            background-color: #F8F9FA;
            color: black;
            border-radius: 10px;
            padding: 30px;
            font-weight: 500px;
        }



        img {

            height: 200px;
            width: 200px;
            border-radius: 50%;
            align-items: center;
            flex-direction: row;



        }

        h1 {
            color: blue;
            font-size: 50px;
            font-family: 'Times New Roman', Times, serif;
        }

        .phone,
        .Email,
        .Address {
            font-weight: bold;

        }

        .imgline:before,
        .imgline:after,
        .textline:after {
            content: "";
            flex: 1 1;
            border-bottom: 15px solid blue;
            margin: auto;
        }

        .imgline {
            display: flex;
            flex-direction: row;
        }

        .textline {
            display: flex;
            flex-direction: row;
            padding-top: 80px;
        }

        p {
            margin-top: -7px;
            margin-bottom: 0rem;

        }
        ul{
            columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
        }
    </style>
</head>

<body>





    <div class="container">


        <div class="row pt-5">
            <div class="col-4 left_section">
                <div class="">
                    <div class="imgline">
                        <img src="data:image/jpeg;base64,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"
                            alt=" ">
                    </div>
                    <h2> CONTACT</h2>
                    <p>
                    <div class="phone">Phone</div><span class="setid1phone"><?php if($Id1phone){ echo $Id1phone; } else { echo "2316547895"; }?></span></p>
                    <p>
                    <div class="Email">Email</div><span class="setid1Email"><?php if($Id1Email){echo $Id1Email;}else{ echo "apna@gmail.com";}?></span></p>
                    <p>
                    <div class="Address">Address</div><span class="setid1Address">
                        <p><?php if($Id1Address){echo $Id1Address;} else{echo "else715 Arlington avenue,Oak ridge,Tn 35785";}?></p>
                    </span><br>

                    <h2>EDUCATION</h2>

                    <tr class="education-list">
                        <td>
                            <div style="font-weight: bold;"><span class="setid1SchoolName1"><?php if($Id1SchoolName1){echo $Id1SchoolName1;}else{echo "School Name 1";}?></span></div>
                            <P class="setid1duration1"><?php if($Id1duration1){echo $Id1duration1;}else{ echo "June 2008 - Dec 2014";}?></P>
                            <P class="setid1description1"><?php if($Id1description1){echo $Id1description1;} else{echo "Lorem ipsum dolor: sit amet consectet
                                gelit. it ellentesque eleife ornare ipsun sit amet consectet.";}?></P><br>
                        </td>
                        <td>
                            <div style="font-weight: bold;"><span class="setid1SchoolName2"><?php if($Id1SchoolName2){echo $Id1SchoolName2;}else{echo "School Name 2";}?></span></div>
                            <P class="setid1duration2"><?php if($Id1duration2){echo $Id1duration2;}else{ echo "June 2008 - Dec 2014";}?></P>
                            <P class="setid1description2"><?php if($Id1description2){echo $Id1description2;} else{echo "Lorem ipsum dolor: sit amet consectet
                                gelit. it ellentesque eleife ornare ipsun sit amet consectet.";}?></P><br>
                        </td>
                        <td>
                            <div style="font-weight: bold;"><span class="setid1SchoolName3"><?php if($Id1SchoolName3){echo $Id1SchoolName3;}else{echo "School Name 3";}?></span></div>
                            <P class="setid1duration3"><?php if($Id1duration3){echo $Id1duration3;}else{ echo "June 2008 - Dec 2014";}?></P>
                            <P class="setid1description3"><?php if($Id1description3){echo $Id1description3;} else{echo "Lorem ipsum dolor: sit amet consectet
                                gelit. it ellentesque eleife ornare ipsun sit amet consectet.";}?></P><br>
                        </td>
                    </tr>

                    <h2>HOBBIES</h2>
                    <tr class="HOBBIESLIST"><span class="setid1hobbi">
                            <td>Photography Swimming</td><br>
                            <td>Music Driving</td><br>
                        </span>
                    </tr>
                </div>
            </div>

            <div class="col-8 right_section">

                <div class="">
                    <div class="textline">
                        <h1><span class="setid2YOURNAME"><?php if($Id2YOURNAME){echo $Id2YOURNAME;}else{echo "YOUR NAME";}?></span></h1>
                    </div>
                    <p class="setid2UI"><?php if($Id2UI){echo $Id2UI;}else{echo "Programmer";}?>/UI</p>
                    <h2>ABOUT ME</h2>
                    <p class="setiddescription"><?php if($Iddescription){echo $Iddescription;}else{echo "Or, keep it light and add a border for some added definition to the
                        boundaries of your content.
                        Be sure to look under the hood at the source HTML here as we've adjusted the alignment and
                        sizing of both column's content for equal-height.
                        Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be sure to look under the hood at the source HTML here as we've adjusted the alignment and
                        sizing of both column's content for equal-height.
                        Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be .";}?>

                    </p>

                    <h2>EXPERIENCE</h2>

                    <tr class="experience-list">
                        <td>
                            <div style="font-weight: bold;"><span class="setid2WORKName1"><?php if($Id2WORKName1){echo $Id2WORKName1;}else{echo "WORK Name 1";}?></span></div>
                            <P class="setid2duration1"><?php if($Id2duration1){echo $Id2duration1;}else{echo "June 2008 - Dec 2014";}?></P>
                            <P class="setid2description1"><?php if($Id2description1){echo $Id2description1;}else{echo "Lorem ipsum dolor: sit amet consectet
                                gelit. it ellentesque eleife ornare ipsun sit amet consectet";}?>.</P><br>
                        </td>
                        <td>
                            <div style="font-weight: bold;"><span class="setid2WORKName2"><?php if($Id2WORKName2){echo $Id2WORKName2;}else{echo "WORK Name 2";}?></span></div>
                            <P class="setid2duration2"><?php if($Id2duration2){echo $Id2duration2;}else{echo "June 2008 - Dec 2014";}?></P>
                            <P class="setid2description2"><?php if($Id2description2){echo $Id2description2;}else{echo "Lorem ipsum dolor: sit amet consectet
                                gelit. it ellentesque eleife ornare ipsun sit amet consectet";}?>.</P><br>
                        </td>
                        <td>
                            <div style="font-weight: bold;"><span class="setid2WORKName3"><?php if($Id2WORKName3){echo $Id2WORKName3;}else{echo "WORK Name 3";}?></span></div>
                            <P class="setid2duration3"><?php if($Id2duration3){echo $Id2duration3;}else{echo "June 2008 - Dec 2014";}?></P>
                            <P class="setid2description3"><?php if($Id2description3){echo $Id2description3;}else{echo "Lorem ipsum dolor: sit amet consectet
                                gelit. it ellentesque eleife ornare ipsun sit amet consectet";}?>.</P><br>
                        </td>
                    </tr>

                    <h2>SKILLS</h2>
                    <div class="row">
                        <div class="col">
                            <?php
                            $explode=explode(",",$Id2skill);
                            
                            ?>
                                <ul class="skills-list">
                                <?php if($Id2skill)
                                {
                                    foreach ($explode as $item) {
                                        ?>
                                        <li><?php echo $item; ?></li>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <li>PHOTOSHOP</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JAVA SCRPT</li>
                                    <li>DREAMVIWER</li>
                                    <li>ILLUSTRATOR</li>
                                    <li>PHOTOSHOP</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JAVA SCRPT</li>
                                    <li>DREAMVIWER</li>
                                    <li>ILLUSTRATOR</li>
                                    <?php
                                }
                                    ?>
                                </ul>
                        </div>
 
                    </div>

                    <h2>REFERENCE</h2>

                    <ul class="reference-list"><span class="setid2Referance">
                            <li>JEAN DAVID</li>
                            <li>Manget of techno media</li>
                            <li>contact +909394033093</li>

                    </ul></span>
                </div>
            </div>

        </div>
        <?php
}
        ?>
        <form action="" method="post">
         Id1 phone<input type="text" class="getid1phone" name="Id1phone"><br>
        Id1 Email<input type="text" class="getid1Email" name="Id1Email"><br>
        Id1 Address<input type="text" class="getid1Address" name=" Id1Address"><br>
        Id1 SchoolName1<input type="text" class="getid1SchoolName1" name=" Id1SchoolName1"><br>
        Id1 SchoolName2<input type="text" class="getid1SchoolName2" name="Id1SchoolName2"><br>
        Id1 SchoolName3<input type="text" class="getid1SchoolName3" name="Id1SchoolName3"><br>
        Id1 duration1<input type="text" class=" getid1duration1" name="Id1duration1"><br>
        Id1 duration2<input type="text" class=" getid1duration2" name="Id1duration2"><br>
        Id1 duration3<input type="text" class=" getid1duration3" name="Id1duration3"><br>
        Id1 description1<input type="text" class=" getid1description1" name="Id1description1"><br>
        Id1 description2<input type="text" class=" getid1description2" name="Id1description2"><br>
        Id1 description3<input type="text" class=" getid1description3" name="Id1description3"><br>
        Id1 hobbi<input type="text" class="getid1hobbi" name="Id1hobbi"><br>
        Id2 YOURNAME<input type="text" class="getid2YOURNAME" name="Id2YOURNAME"><br>
        Id2 UI<input type="text" class="getid2UI" name=" Id2UI"><br>
        Id description<input type="text" class=" getiddescription" name="Iddescription"><br>
        Id2 WORKName1<input type="text" class="getid2WORKName1" name="Id2WORKName1"><br>
        Id2 WORKName2<input type="text" class="getid2WORKName2" name="Id2WORKName2"><br>
        Id2 WORKName3<input type="text" class="getid2WORKName3" name="Id2WORKName3"><br>
        Id2 duration1<input type="text" class=" getid2duration1" name="Id2duration1"><br>
        Id2 duration2<input type="text" class=" getid2duration2" name="Id2duration2"><br>
        Id2 duration3<input type="text" class=" getid2duration3" name="Id2duration3"><br>
        Id2 description1<input type="text" class=" getid2description1" name="Id2description1"><br>
        Id2 description2<input type="text" class=" getid2description2" name="Id2description2"><br>
        Id2 description3<input type="text" class=" getid2description3" name="Id2description3"><br>
        Id2 skill<input type="text" class=" getid2skill" name="Id2skill"><br>
        Id2 Referance<input type="text" class=" getid2Referance" name=" Id2Referance"><br>
        <input type="submit" class="submit" name="submit"><br>
    </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $('.submit').click(function () {
            var getid1phone = $(".getid1phone").val();
            var getid1Email = $(".getid1Email").val();
            var getid1Address = $(".getid1Address").val();
            var getid1SchoolName1 = $(".getid1SchoolName1").val();
            var getid1SchoolName2 = $(".getid1SchoolName2").val();
            var getid1SchoolName3 = $(".getid1SchoolName3").val();
            var getid1duration1 = $(".getid1duration1").val();
            var getid1duration2 = $(".getid1duration2").val();
            var getid1duration3 = $(".getid1duration3").val();
            var getid1description1 = $(".getid1description1").val();
            var getid1description2 = $(".getid1description2").val();
            var getid1description3 = $(".getid1description3").val();
            var getid1hobbi = $(".getid1hobbi").val();
            var getid2YOURNAME = $(".getid2YOURNAME").val();
            var getid2UI = $(".getid2UI").val();
            var getiddescription = $(".getiddescription").val();
            var getid2WORKName1 = $(".getid2WORKName1").val();
            var getid2WORKName2 = $(".getid2WORKName2").val();
            var getid2WORKName3 = $(".getid2WORKName3").val();
            var getid2duration1 = $(".getid2duration1").val();
            var getid2duration2 = $(".getid2duration2").val();
            var getid2duration3 = $(".getid2duration3").val();
            var getid2description1 = $(".getid2description1").val();
            var getid2description2 = $(".getid2description2").val();
            var getid2description3 = $(".getid2description3").val();
            var getid2skill = $(".getid2skill").val();
            var skills = getid2skill.split(",");
            //alert(skills[1]);
            $(".skills-list").text("");
            $.each(skills, function(i, keyword){
                $(".skills-list").append("<li>"+keyword+"</li>");
});

            var getid2Referance = $(".getid2Referance").val();
            

            $(".setid1phone").text(getid1phone);
            $(".setid1Email").text(getid1Email);
            $(".setid1Address").text(getid1Address);
            $(".setid1SchoolName1").text(getid1SchoolName1);
            $(".setid1SchoolName2").text(getid1SchoolName2);
            $(".setid1SchoolName3").text(getid1SchoolName3);
            $(".setid1duration1 ").text(getid1duration1);
            $(".setid1duration2 ").text(getid1duration2);
            $(".setid1duration3 ").text(getid1duration3);
            $(".setid1description1").text(getid1description1);
            $(".setid1description2").text(getid1description2);
            $(".setid1description3").text(getid1description3);
            $(".setid1hobbi").text(getid1hobbi);
            $(".setid2YOURNAME").text(getid2YOURNAME);
            $(".setid2UI").text(getid2UI);
            $(".setiddescription").text(getiddescription);
            $(".setid2WORKName1").text(getid2WORKName1);
            $(".setid2WORKName2").text(getid2WORKName2);
            $(".setid2WORKName3").text(getid2WORKName3);
            $(".setid2duration1 ").text(getid2duration1);
            $(".setid2duration2 ").text(getid2duration2);
            $(".setid2duration3 ").text(getid2duration3);
            $(".setid2description1").text(getid2description1);
            $(".setid2description2").text(getid2description2);
            $(".setid2description3").text(getid2description3);
            $(".setid2skill").text(getid2skill);
            $(".setid2Referance").text(getid2Referance);
        });
    </script>
</body>

</html>