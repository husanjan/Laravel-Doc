<?php


error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/i3D.php';
require_once 'classes/iGadget.php';

require_once 'classes/BookProduct.php';
require_once 'classes/NoteBookProduct.php';
;

function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}
function offerCase(IGadget $product)
{
      echo "<p>Predlagaem Chexol this gadjet{$product->getName}</p>";
}
$book=new Book('Three Cat',20,1000);
$notebook=new NoteBookProduct('Dell',1000,'intel');
offerCase($notebook);
debug($book);
echo $book->getProduct();
class A{};
class  B extends A{};
class C{};
$a=new A;
$b=new B;
$c=new C;
var_dump($notebook instanceof IGadget);
//var_dump($b instanceof B);
//var_dump($c instanceof C);

