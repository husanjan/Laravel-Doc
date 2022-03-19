<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}
$book=new Book('Three cat',20,200);
debug($book);
echo $book->getProduct('book');
echo $book->getProduct();

