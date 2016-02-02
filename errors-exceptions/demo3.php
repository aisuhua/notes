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

    $error = new myError([
        'type' => $code,
        'message' => $message,
        'file' => $file,
        'line' => $line,
        'isError' => true
    ]);

    ErrorHandler::handler($error);
}

//自定义异常处理
function exceptionHandler($exception) {

    $error = new myError([
        'type' => $exception->getCode(),
        'message' => $exception->getMessage(),
        'file' => $exception->getFile(),
        'line' => $exception->getLine(),
        'exception' => $exception,
        'isException' => true
    ]);

    ErrorHandler::handler($error);
}

//自定义致命错误处理
function shutdownHandler() {
    if(is_null($e = error_get_last()) === false) {

        $error = new myError($e);

        ErrorHandler::handler($error);
    }
}

/**
 * Class myError
 */
class myError
{
    protected $attributes;

    /**
     * Class constructor sets the attributes.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $defaults = [
            'type'        => -1,
            'message'     => 'No error message',
            'file'        => '',
            'line'        => '',
            'exception'   => null,
            'isException' => false,
            'isError'     => false,
        ];

        $options = array_merge($defaults, $options);

        foreach ($options as $option => $value) {
            $this->attributes[$option] = $value;
        }
    }

    /**
     * Magic method to retrieve the attributes.
     *
     * @param  string $method
     * @param  array  $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return isset($this->attributes[$method]) ? $this->attributes[$method] : null;
    }
}

/**
 * Class ErrorHandler
 */
class ErrorHandler
{
    public static function handler($error)
    {
        //在这里对错误进行统一处理

        var_dump($error);
        echo '<br><br>';
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












