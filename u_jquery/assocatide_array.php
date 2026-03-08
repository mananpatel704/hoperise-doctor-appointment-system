<?php
// $a=array(10,20,30,40);
$a=array("abc"=>10,"def"=>20);
print_r($a);
{
    foreach($a as $key=> $value)
    echo  "my nam is ".$key."my age is".$value."<br>";
}

?>