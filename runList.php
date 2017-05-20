<?php
/**
 * list队列
 */
    $redis = new \Redis();
    $redis->connect('127.0.0.1', 7200);

    $redis->delete("list1");

    $redis->lPush("list1", "A");
    $redis->lPush("list1", "B");
    $redis->lPush("list1", "C");

    $val = $redis->lPop("list1");

    print_r($val);
