<?php

require_once 'config.php';


$obj2 = new PhysicalItem( "Prod2", 100);
$obj1 = new DigitalItem( "Prod1",50);
$obj3 = new WeightItem( "Prod3",100);
echo $obj1->proceeds(3) ."\n";
echo $obj2->proceeds(5) ."\n";
echo $obj3->proceeds(4.5) ."\n";

?>