<?php
header('Content-Type:text/html;charset=utf-8');

//报告所有 PHP 错误
error_reporting(-1);

//关闭错误输出到页面
ini_set('display_errors', 0);

set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');

//自定义错误处理
function errorHandler($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
};

//自定义异常处理
function exceptionHandler($exception) {
   var_dump($exception);

    echo '<br><br>';
}



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












