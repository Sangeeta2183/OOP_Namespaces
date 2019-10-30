<?php

use VarAdd\result as a1;
use VarSub\result as a2;

require_once 'add.php';
require_once 'sub.php';

$VarResult = new a1();
$VarResult->sum(2,3);

$VarResult = new a2();
$VarResult->sub(5,2);
//$VarResult = new \VarAdd\result();
//$VarResult->sum(2,3);
//$VarResult1 = new \VarSub\result();
//$VarResult1->sub(5,3);



