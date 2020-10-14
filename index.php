<?php
require_once 'Bicycle.php';
require_once 'Truke.php';

//$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();

$truke1 = new Truke('white', 4, 100);

//var_dump($truke1);

echo $truke1->forward();

echo $truke1->brake();

$truke1->setLoading(20);

echo $truke1->isFull();
