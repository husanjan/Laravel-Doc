<?php
namespace wfm\traits;
trait TSingleton{
    private static $instanse=null;
    private function __construct()
    {

    }
    public static function getInstance()
    {
        if (self::$instanse===null)
        {
            self::$instanse=new self();
        }
        return self::$instanse;
    }
}