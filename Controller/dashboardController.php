<?php
class dashboardController {
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
    public static function dashboard(){
        include "Model/monografiaModel.php";
        $model=new monografiaModel();
        $model->listar();
        Middleware::auth();
        include "View\Modules\dashboard\dashboard.php";
    }
}
?>