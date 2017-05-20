<?php

    $redis = new \Redis();
    $redis->connect('127.0.0.1', 7200);

    $redis->delete("string1");

    $redis->set("string1","value1");

    $var = $redis->get("string1");

    print_r($var);

    $redis->set("string1","99");

    $redis->incr("string1",1);

    $var = $redis->get("string1");

    print_r($var);