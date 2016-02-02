<?php
header('Content-Type:text/html;charset=utf-8');

//报告所有 PHP 错误
error_reporting(-1);

//关闭错误输出到页面
ini_set('display_errors', 0);

//自定义错误处理
set_error_handler(function($errno, $errstr, $errfile, $errline) {

    //在这里对错误进行处理

    echo $errstr . '<br>';
});

register_shutdown_function(function() {

    if(is_null($e = error_get_last()) === false) {

        echo $e['message'] . '<br>';
    }
});



// E_NOTICE
echo $a;

// E_WARNING
echo 100 / 0;

class Sample
{
    public function method()
    {
        //not static method
    }
}

// E_STRICT
Sample::method();

// E_ERROR
new Dummy();

// Uncaught Exception
//throw new Exception('Uncaught Exception');

echo "这里不会被执行\n";

exit;












