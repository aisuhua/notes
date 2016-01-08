<?php
require './vendor/autoload.php';

use SimpleExcel\SimpleExcel;

header('Content-Type: text/html;charset=utf-8');

// instantiate new object (will automatically construct the parser & writer type as XML)
$excel = new SimpleExcel('csv');

$content = file_get_contents('files/002.csv');

/**
 * 将内容编码转换成 UTF-8
 */
if (mb_detect_encoding($content, "UTF-8, ISO-8859-1, GBK") != "UTF-8")
{
    $content = iconv("gbk", "utf-8", $content);
}

$excel->parser->loadString($content);

// load an XML file from server to be parsed
//$excel->parser->loadFile('files/003.csv');

// get complete array of the table
$field = $excel->parser->getField();

print_r($field);
