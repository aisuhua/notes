<?php

//判断数组里是否存在用户提交的 ID

//$post_dirty_id = '1092';
$post_dirty_id = '1092 ORDER BY #1';

$safe_arr = [
    987 => '小明',
    1092 => '汤姆',
    1256 => '奥立升'
];

if(in_array($post_dirty_id, array_keys($safe_arr), true)) {

    echo 'find me';

} else {

    echo 'do not find me';

}

//输出结果：do not find me，但是这个结果并非我们需要的，我们不需要判断类型，只需要判断值是否相等即可




