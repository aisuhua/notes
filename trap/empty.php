<?php
//以下代码会直接导致PHP解析错误

$arr1 = [1, 2, 3];
$arr2 = [3, 4];

if(empty(array_diff($arr1, $arr2))) { //解析错误

    echo 'empty';

} else  {

    echo 'not empty';

}

//低于 PHP 5.5 的版本会出现以下错误：
//Fatal error: Can't use function return value in write context in D:\www6\tutorials\trap\empty.php on line 7
