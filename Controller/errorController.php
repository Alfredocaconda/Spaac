<?php

class Error404Controller{
    public static function index(){
        include "View/Error/404_error.php";
    }
    public static function dashboard(){
        include "View/Modules/dashboard/dashboard.php";
    }
}
?>