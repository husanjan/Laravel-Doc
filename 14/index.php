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
// offerCase($notebook);

//debug($book);
//debug($notebook);
//
//$mail=new \PHPMailer\PHPMailer\PHPMailer();
//debug($mail);
$a=new \app\A();
$b=new \app\B();
$a->getTest();
$b->getTest();