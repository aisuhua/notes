<?php
header('Content-Type:text/html;charset=utf-8');

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

register_shutdown_function('myShutdownHandler');
set_error_handler('myErrorHandler');
set_exception_handler('myExceptionHandler');

//自定义错误处理
function myErrorHandler($code, $message, $file, $line) {
    echo ' Code: '.$code .', Message: '.$message .', File: ' . $file .', Line: ' . $line . '<br>';
}

//自定义异常处理
function myExceptionHandler($exception) {
    var_dump($exception);
};

//自定义致命错误处理
function myShutdownHandler() {
    if(is_null($e = error_get_last()) === false) {
        var_dump($e);
    }
};

$a['bbb'];

$a / 100;

$a + $b;

class Sample
{
    public function method()
    {
        echo 'not static method';
    }
}

Sample::method();

new A();



throw new Exception('错误');



echo 'suhua';
exit;




$arr1 = [1, 2, 3];
$arr2 = [3, 4];

$diff = array_diff($arr2, $arr1);

//if(empty(array_diff($arr2, $arr1))) {
//    echo '为空！';
//} else {
//    echo '不为空！';
//}













