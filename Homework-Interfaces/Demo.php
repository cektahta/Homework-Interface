<?php
require_once 'autoload.php';
use Climate\ClimateInfo;
use Cities\City;
use Cities\MajorCity;
use Tourist\TouristGuide;

$climate = new ClimateInfo(40,30);
$climate2 = new ClimateInfo(-5,42);
$Kazanlak = new City('Kazanlak','Abc',$climate2);
$Kazanlak->setIndex('0');
$StaraZagora = new MajorCity('StaraZagora','AAA',$climate,50000);
$StaraZagora->setIndex('1');

$tourist = new TouristGuide(4);

$tourist->addCity($Kazanlak);

$tourist->unknownMethod(false);








