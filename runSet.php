<?php
/**
 * set
 */
$redis = new \Redis();
$redis->connect('127.0.0.1', 7200);

$redis->delete("set1");


$redis->sAdd("set1","A1");
$redis->sAdd("set1","A2");
$redis->sAdd("set1","A3");
$redis->sAdd("set1","A4");
$redis->sAdd("set1","A5");


$val = $redis->sCard("set1");

// print_r($val);

$val = $redis->sMembers("set1");

print_r($val);

// $redis->sAdd("set2",[1,2,3,4,5]);

// $getAll = $redis->sMembers("set2");

// print_r($getAll);