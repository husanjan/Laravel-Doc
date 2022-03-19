<?php


class Product
{
    public $name;
    public $price;

    public function __construct($name,$price)
    {
        $this->name=$name;
        $this->price=$price;


    }

    public function getProduct()
    {
        $out="<hr><b>O tovare:</b><br>  Name :{$this->name}<br> 
         Price:{$this->price}<br>";

        return $out;
    }
    public  function getPrice()
    {
        return $this->price;
    }
    public  function getName()
    {
        return $this->name;
    }





}