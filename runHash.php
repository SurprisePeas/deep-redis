<?php
/**
 * Hash 存储
 */
    $redis = new \Redis();
    $redis->connect('127.0.0.1', 7200);

    $redis->delete("hash1");


    $redis->hSet("class","name","element");
    $redis->hSet("class","age","20");
    $redis->hSet("class","sex","man");

    $val = $redis->hMGet("class",['sex','age','name']);

    print_r($val);