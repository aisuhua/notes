<?php
require './vendor/autoload.php';

use SimpleExcel\SimpleExcel;

$excel = new SimpleExcel('csv');

$content = file_get_contents('files/002.csv');

if (mb_detect_encoding($content, "UTF-8, ISO-8859-1, GBK") != "UTF-8") {
    $content = iconv("gbk", "utf-8", $content);
}

$excel->parser->loadString($content);

$field = $excel->parser->getField();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>读取文件内容示例</title>
</head>
<body>

    <table border="1" cellspacing="0" cellpadding="5">
        <?php

            $str = '';

            foreach($field as $key=>$value) {

                $str .= '<tr>';

                if ($key == 0) {//表头
                    foreach ($value as $val) {
                        $str .= '<th>' . $val . '</th>';
                    }
                } else {//表体
                    foreach ($value as $val) {
                        $str .= '<td>' . $val . '</td>';
                    }
                }

                $str .= '</tr>';
            }

            echo $str;
        ?>
    </table>

</body>
</html>

