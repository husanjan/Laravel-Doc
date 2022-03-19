<?php
namespace   clases;

abstract class Product
{
    public $name;
    public $price;
    public $discount=0;



    public function __construct($name,$price)
    {
        $this->name=$name;
        $this->price=$price;


    }

    public function getProduct()
    {


        return "<hr> <b>O Tovare:</b><br>
         NAimenovanie:{$this->name}<br>
         Price Ckidki:{$this->getPrice()}<br>
";
    }
    public  function getName()
    {
        return $this->name;
    }
    public  function getPrice()
    {
        return $this->price-($this->discount/100*$this->price);
    }
       public function getDiscount():int
       {
           return $this->discount;
       }
     public function setDiscount(int $discount)
     {
         $this->discount=$discount;
     }
     abstract protected function addProduction($name,$price);





}