<?php

class Error404Controller{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
    public static function index(){
        include "View/Error/404_error.php";
    }
    public static function dashboard(){
        Middleware::auth();
        include "View/Modules/dashboard/dashboard.php";
    }
}
?>