<?php

class App
{
    protected $nowPath;
    protected $nowMethod;
    protected static $routes = [];

    public function __construct()
    {
        //url bilgisi alma path ve GET/POST değerlerini yakalama
        $this->nowPath = $_SERVER['REQUEST_URI'];  //URL bilgisi
        $this->nowMethod = $_SERVER['REQUEST_METHOD'];  // GET yada POST

        $this->startRoute();
    }


    public static function getAction($link, $path, $auth = false, $area = null)
    {
        // route.php den gelen işlemler 
        self::$routes[] = ['GET', $link, $path, $auth, $area];
    }


    public static function postAction($link, $path, $auth = false, $area = null)
    {
        // route.php den gelen işlemler 
        self::$routes[] = ['POST', $link, $path, $auth, $area];
    }


    public function startRoute()
    {
        //tüm methodları dönderecek

        foreach (self::$routes as $routes) {
            print_r($routes);
        }
    }
}
