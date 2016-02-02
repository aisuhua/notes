<?php
header('Content-Type:text/html;charset=utf-8');

error_reporting(-1);
ini_set('display_errors', 0);

register_shutdown_function('shutdownHandler');
set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');

//自定义错误处理
function errorHandler($code, $message, $file, $line) {

    //在这里，对错误进行后续处理。比如：写日志、发邮件等等

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

//$a['bbb'];

echo $a;

echo 100 / 0;

//$a + $b;

class Sample
{
    public function method()
    {
        //not static method
    }
}

Sample::method();

new Dummy();

throw new Exception('Uncaught Exception');

echo "Not Executed\n";




exit;




$arr1 = [1, 2, 3];
$arr2 = [3, 4];

$diff = array_diff($arr2, $arr1);

//if(empty(array_diff($arr2, $arr1))) {
//    echo '为空！';
//} else {
//    echo '不为空！';
//}













