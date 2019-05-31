<?php

include "../Model/user.php";

$diary1 = new Diary("test1", "test1");
$diary2 = new Diary("test2", "test2");
$diary3 = new Diary("test3", "test3");

$diary = array($diary1, $diary2, $diary3);
// print_r($diary);
$user = new User("test", "test@test.com", "testpw");

echo $user->printUser();
echo "<br>";

$setID = "setID";
$setEmail = "setEmail";
$setPw = "setPw";
$user->setID($setID);
$user->setEmail($setEmail);
$user->setPassword($setPw);
$user->setDiary($diary);
echo $user->printUser();

$user->addDiary("test4", "test4");
echo $user->printUser();