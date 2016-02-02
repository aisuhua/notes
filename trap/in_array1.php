<?php

//判断数组里是否存在用户所提交的用户 ID

//$post_dirty_id = '1092';
$post_dirty_id = '1092 ORDER BY #1';

$safe_arr = [
    987 => '小明',
    1092 => '汤姆',
    1256 => '奥立升'
];

if(in_array($post_dirty_id, array_keys($safe_arr))) {

    echo 'find me';

} else {

    echo 'do not find me';

}

//输出结果：find me，此结果明显错误




