<?php
require './vendor/autoload.php';

use SimpleExcel\SimpleExcel;

header('Content-Type: text/html;charset=utf-8');

// instantiate new object (will automatically construct the parser & writer type as XML)
$excel = new SimpleExcel('csv');

// load an XML file from server to be parsed
$excel->parser->loadFile('files/002.csv');

// get complete array of the table
$field = $excel->parser->getField();

// get specific array from the specified row (3rd row)
$row = $excel->parser->getRow(3);

$column = $excel->parser->getColumn(2);

//获取第二行第一列的数据，则 A2 单元格
$cell = $excel->parser->getCell(2,1);

//$excel->convertTo('JSON');
//$excel->writer->addRow([
//    '支付服务',
//    'http://www.baidu.com',
//    '异常 50秒',
//    '修改，删除'
//]);

//首先必须传入需要导出的数据
$excel->writer->setData(
    $excel->parser->getField()
);

//可以添加一些行数据
$excel->writer->addRow([
    '支付服务',
    'http://www.baidu.com',
    '异常 50秒',
    '修改，删除'
]);

//第二个参数为保存路径，默认直接输出浏览器，也就是浏览器进行下载
$excel->writer->saveFile('example', 'tmp/tmp.csv');

