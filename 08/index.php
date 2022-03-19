<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NoteBookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}
$book=new Book('Three cat',20,200);
$notebook=new  NoteBookProduct('Three sss',100,'Intel');
echo $book->getProduct('book');
echo $notebook->getProduct();
debug($notebook);