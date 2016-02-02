<?php

//报告所有 PHP 错误
error_reporting(-1);

//自定义错误处理
set_error_handler(function($errno, $errstr, $errfile, $errline) {

    //在这里对错误进行处理

    echo $errstr;
});








