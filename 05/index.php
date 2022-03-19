<?php

require_once '05/classes/File.php';
$file=new File(__DIR__.'/file.txt');
$file->write('str 1');
$file->write('str 2');
$file->write('str 3');
$file->write('str 4');
$file->write('str 5');
$file->write('str 6');
$file->write('str 7');
$file->write('str 8');
