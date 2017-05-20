<?php

$redis = new \Redis();
$redis->connect('127.0.0.1', 7200);


$arr = [
    'h',
    'e',
    'l',
    'l',
    'o',
    'w',
    'o',
    'r',
    'l',
    'd'
];


foreach($arr as $item){
    $redis->rPush('list',$item);
}

