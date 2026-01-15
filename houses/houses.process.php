<?php

$house1 = new House("2020-01-15", 3, 120);
$house2 = new House("2019-06-30", 4, 150);
$house3 = new House("2021-03-22", 2, 90);
$houses = [$house1, $house2, $house3];

foreach ($houses as $house) {
    $house->display();
}