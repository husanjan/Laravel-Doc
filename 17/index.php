<?php

use wfm\interfaces\IGadget;
use app\{NoteBookProduct,BookProduct};



error_reporting(-1);
require_once __DIR__.'/vendor/autoload.php';



function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}


function offerCase(IGadget $product)
{
    echo "<p>Predlagaem Chexol for gadget{$product->getName}</p>";
}

$book=new  BookProduct('Three Cat',20,1000);
$notebook=new  NoteBookProduct('Three Cat',20,1000);

 $a1=\app\A::getInstance();
$a2=\app\A::getInstance();
 var_dump($a1);
 var_dump($a2);

$b1=\app\B::getInstance();
$b1=\app\B::getInstance();
var_dump($b1);
var_dump($b1);





