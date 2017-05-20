<?php
/**
 * 排序
 */
    $redis = new \Redis();
    $redis->connect('127.0.0.1', 7200);

    $redis->delete("zset");

    $redis->zAdd("zset",9,"pop");
    $redis->zAdd("zset",8,"lolo");
    $redis->zAdd("zset",8,"go");

    $val = $redis->zRange("zset",0,-1);

    print_r($val);

    $res = $redis->zRevRange("zset",0,-1);

    print_r($res);
