<?php
$username=$_GET["username"];
$pwd=$_GET["pwd"];
$price=$_GET["price"];
$age=$_GET["age"];

if($price=="200") {
    $pet = "狗";
}
elseif ($price=="150"){
    $pet = "猫";
}
elseif ($price=="180"){
    $pet = "兔";
}
elseif ($price=="60"){
    $pet = "鹦鹉";
}

if(isset($_GET["vip"]))
{
    $vip=$_GET["vip"];
    $price=$price*0.8;
    echo "{$username}({$pwd})购买了{$pet}{$age}岁，价格={$price}元。";
}
else
{
    echo "{$username}({$pwd})购买了{$pet}{$age}岁，价格={$price}元。";
}
echo "</br>";
?>
