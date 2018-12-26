<?php

use Workerman\Worker;

require_once './Autoloader.php';

$json_worker = new Worker('JsonNL://127.0.0.1:2345');
$json_worker->onMessage = function ($conn, $data) {
    echo $data . PHP_EOL;
    $conn->send(['status' => true, 'msg' => 'success']);
};

Worker::runAll();
