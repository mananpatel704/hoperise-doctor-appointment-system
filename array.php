<?php
$product =[
    1=>["name"=>"laptop","price"=>50000],
    2=>["name"=>"phone","price"=>2000],
    3=>["name"=>"headphone","price"=>1000],
    4=>["name"=>"keybord","price"=>500]
];
$cart =[];
$cart[]=$product[1];
$cart[]=$product[4];
echo "<h3> avalible product </h3>";
foreach ($product as $id => $product)
{
echo $id ," . " ,$product["name"] , " . " ,$product["price"] , "<br>";
}
echo "<hr>";
echo "<h3> carts itmes </h3>";
$total = 0;
foreach ($cart as $id=> $items)
    {
        echo $items["name"],".",$items["price"],"<br>";
        $total+=$items["price"];
    }
    echo "<hr>";
    $searchItem = "laptop";
    $names= array_column($cart,"name");
    if(in_array($searchItem,$names))
        {
            echo "the itme is: $searchItem <br>";
        }
        else{
            echo "the itme is not found: $searchItem <br>";
        }
        array_pop($cart);

echo "<hr>";
echo "removeing first itmes:";
foreach($cart as $items)
    {
        echo $items["name"] ,"<br>";
    }
?>