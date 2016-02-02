<?php

//判断数组里是否存在用户提交的 ID

$post_dirty_id = '1092';
//$post_dirty_id = '1092 ORDER BY #1';

$safe_arr = [
    987 => '小明',
    1092 => '汤姆',
    1256 => '奥立升'
];

if(isset($safe_arr[$post_dirty_id])) {

    echo 'find me';

} else {

    echo 'do not find me';

}

//输出结果：do not find me，这是正确的结果




