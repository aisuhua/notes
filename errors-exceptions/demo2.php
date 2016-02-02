<?php
header('Content-Type:text/html;charset=utf-8');

//关闭错误输出到页面
ini_set('display_errors', 0);

//报告所有 PHP 错误
error_reporting(-1);

register_shutdown_function('shutdownHandler');
set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');

//自定义错误处理
function errorHandler($code, $message, $file, $line) {

    //在这里，集中对错误进行后续处理。比如：写日志、发邮件等等

    echo ' Code: '.$code
        .', Message: '.$message
        .', File: ' . $file
        .', Line: ' . $line
        . '<br>';
}

//自定义异常处理
function exceptionHandler($exception) {
    errorHandler(
        $exception->getCode(),
        $exception->getMessage(),
        $exception->getFile(),
        $exception->getLine()
    );
}

//自定义致命错误处理
function shutdownHandler() {
    if(is_null($e = error_get_last()) === false) {
        errorHandler(
            $e['type'],
            $e['message'],
            $e['file'],
            $e['line']
        );
    }
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












