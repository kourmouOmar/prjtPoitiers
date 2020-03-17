<?php
 class database{
    private static $dbName='test_ajax';
    private static $dbHost='localhost';
    private static $dbUsername='root';
    private static $dbPassword='';
    private static $cont=null;

    public function __construct() { die('Init function is not allowed');}

    public static function connect(){ self::$cont=new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName,self::$dbUsername,self::$dbPassword);
        return self::$cont;
    }

    public static function disconnect(){self::$cont=null;}
}
?>