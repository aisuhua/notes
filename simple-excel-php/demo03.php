<?php
require './vendor/autoload.php';

use SimpleExcel\SimpleExcel;

//header('Content-Type: text/html;charset=utf-8');

$excel = new SimpleExcel('csv');

$excel->parser->loadFile('files/001.csv');

$field = $excel->parser->getField();

//首先必须传入需要导出的数据
$excel->writer->setData(
    $excel->parser->getField()
);

//第二个参数为保存路径，默认直接输出浏览器，也就是浏览器进行下载
$excel->writer->saveFile('example', '');
