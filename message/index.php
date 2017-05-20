<?php

/**
 * 扫描输出队列消息
 *
 */


$redis = new \Redis();
$redis->connect('127.0.0.1', 7200);


$value = $redis->lpop('list');
if ($value) {
    echo "出队的值".$value;
} else {
    echo "出队完成";
}

