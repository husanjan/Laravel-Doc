<?php
class Car
{
    public  $color;
    public  $wheels;
    public  $speed;
    public  $brand;
    const TEST_CAR='Prototype';
    const TEST_CAR_Speed=300;
    public  static $countCar=0;
    public function __construct($color,$wheels=4,$speed,$brand)
    {
        $this->color=$color;
        $this->wheels=$wheels;
        $this->speed=$speed;
        $this->brand=$brand;

        self::$countCar++;
    }

     public static function getCount()
     {
     return self::$countCar;
     }
     public function Test()
     {
         echo "Hello World !!!";
     }
     public  function getCarInfo()
     {
         return  "<h3> O moem avto:</h3>
                   Mark:{$this->brand}<br> 
                    Color:{$this->color}<br>
                     Count {$this->wheels}<br>
                     Speed:{$this->speed}<br>
                    ";
     }
    public  function getPrototypeInfo()
    {
        return  "<h3> info test:</h3>
                   name:{$this->brand}".self::TEST_CAR."<br> 
                   Speed:{$this->speed}".self::TEST_CAR_Speed."<br> 
                  
                    ";
    }



}