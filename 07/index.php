<?php
error_reporting(-1);
require_once 'classes/Product.php';
function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}
$book=new Product('three mushket',20,null,100);
$notebook=new Product('Dell','intel');
debug($book);
debug($notebook);
echo  $notebook->getProduct('notebook');
echo  $notebook->getProduct('notebook');