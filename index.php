<?php

include "MyList.php";
include "myListTest.php";

$listData = new myListTest();
$listData->add(0, 1);
$listData->add(1, 2);
$listData->add(1, 3);

print_r($listData->getMyList());
$listData->remove(1);
print_r($listData->getMyList());
$listData->clearList();
print_r($listData->getMyList());
