<?php
//array()
// $cars=array("Volvo","BMW","Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
//array_chunk()
// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,2));
//aaray_combine()
// $fname=array("Peter","Ben","Joe");
// $age=array("35","37","43");
// $c=array_combine($fname,$age);
// print_r($c);
//array_diff()
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

// $result=array_diff($a1,$a2);
// print_r($result);
//array_merge()
// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_merge($a1,$a2));
// array_pop()
// $a=array("red","green","blue");
// array_pop($a);
// print_r($a);

//array_push()
// $a=array("red","green");
// array_push($a,"blue","yellow");
// print_r($a);
// array_rand()
// $a=array("red","green","blue","yellow","brown");
// $random_keys=array_rand($a,3);
// echo $a[$random_keys[0]]."<br>";
// echo $a[$random_keys[1]]."<br>";
// echo $a[$random_keys[2]];

//array_reverse()
// $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
// print_r(array_reverse($a));
//array_search()
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);
// array_slice()
// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,2));

//array_unique()
// $a=array("a"=>"red","b"=>"green","c"=>"red");
// print_r(array_unique($a));
//in_array()
// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// if (in_array("Glenn", $people))
//   {
//   echo "Match found";
//   }
// else
//   {
//   echo "Match not found";
//   }
//size_of()
$cars=array("Volvo","BMW","Toyota");
echo sizeof($cars);
?>