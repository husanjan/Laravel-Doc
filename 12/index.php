<?php

use clases\interfaces\IGadget;
use clases\{NoteBookProduct,Book};


error_reporting(-1);
   function autoloder1($class)
   {
        $class=str_replace("\\",'/',$class);
       echo  $file=__DIR__."/{$class}.php";


         if (file_exists($file))
         {
             require_once $file;
         }

    }
//function autoloder2($class)
//{
//    var_dump( $class);exit;
//    $file=__DIR__."/app/interfaces{$class}.php";
//    require_once $file;
//}
spl_autoload_register('autoloder1',true);
//spl_autoload_register('autoloder2',true);



function debug($data)
{
    echo '<pre>'.print_r($data,1).'</pre>';
}

/**
 * @param IGadget $product
 */
function offerCase(IGadget $product)
{
    echo "<p>Predlagaem Chexol for gadget{$product->getName}</p>";
}

$book=new  Book('Three Cat',20,1000);
$book=new  NoteBookProduct('Three Cat',20,1000);
//offerCase($notebook);

debug($book);
echo $book->getProduct();
//class A{};
//class  B extends A{};
//class C{};
//$a=new A;
//$b=new B;
//$c=new C;

//var_dump($notebook instanceof IGadget);
//var_dump($b instanceof B);
//var_dump($c instanceof C);

