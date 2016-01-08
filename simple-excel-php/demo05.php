<?php
require './vendor/autoload.php';

use SimpleExcel\SimpleExcel;

//header('Content-Type: text/html;charset=utf-8');

$excel = new SimpleExcel('csv');

$excel->parser->loadFile('files/002-no-bom.csv');

$field = $excel->parser->getField();

//首先必须传入需要导出的数据
$excel->writer->setData(
    $excel->parser->getField()
);

/**
 * 防止出现中文乱码情况（主要是针对那些没有带 BOM 头的UTF-8文件）
 * 一般使用 Office 编辑的 csv 文件不存在该问题
 *
 * @link http://extjs.org.cn/fatjames/archives/472
 * @link http://www.dewen.io/q/1708/
 */
print(chr(0xEF).chr(0xBB).chr(0xBF));

//第二个参数为保存路径，默认直接输出浏览器，也就是浏览器进行下载
$excel->writer->saveFile('example', '');

