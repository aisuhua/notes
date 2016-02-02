<?php
header('Content-Type:text/html;charset=utf-8');

//关闭错误输出到页面
ini_set('display_errors', 0);
//
//报告所有 PHP 错误
error_reporting(-1);


//自定义异常处理
set_exception_handler(function($exception) {

    //在这里，统一处理异常

    echo get_class($exception) .': '. $exception->getMessage();
});

new PDO('mysql:dbname=testdb;host=127.0.0.1', 'root', 'wrong_passwd');

//throw new Exception('我是异常');






