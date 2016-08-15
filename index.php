<?php  

include("./lib/op.php");

echo("index page php <br>");

$obj1 = new Op;

$obj2 = $obj1->getValue("ppp");

$obj3 = $obj1->var1;

$obj1->setvalue("new value for var1");

$obj4 = $obj1->var1;

echo("obj2 value of ". $obj2 ."<br> obj3 ". $obj3 ."<br> obj4 after set ". $obj4);


?>