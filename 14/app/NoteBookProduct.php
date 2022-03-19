<?php

namespace   app;
 use wfm\interfaces\IGadget;
 use wfm\Product;
 use wfm\traits\TColor;


 class  NoteBookProduct extends Product implements IGadget
 {
       use TColor;
      public $cpu;


      public function __construct($name,$price,$cpu)
      {

           parent::__construct($name,$price);
          $this->cpu=$cpu;


      }
       public function getProduct()
       {
           $out= parent::getProduct(); // TODO: Change the autogenerated stub
           $out.="Cpu {$this->cpu}<br>";
       }
       public function getCase()
       {
           // TODO: Implement getCase() method.

       }

     public function getCpu()
      {
          return $this->cpu;
          // TODO: Change the autogenerated stub
      }
      public function addProduction($name, $price,$numPages=0)
      {
          // TODO: Implement addProduction() method.
          var_dump($name);
          var_dump($price);
          var_dump($numPages);
      }
 }