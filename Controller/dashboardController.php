<?php
    include "Model/middleware.php";
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
        include "Model/artigoModel.php";
        $monografia=new monografiaModel();
        $artigo=new artigoModel();
        #chamando as fucnoes das 
        $monografia->listar("");
        $artigo->listar("");
        Middleware::auth();
        include "View\Modules\dashboard\dashboard.php";
    }
    public static function admin(){
        include "Model/monografiaModel.php";
        include "Model/artigoModel.php";
        $monografia=new monografiaModel();
        $artigo=new artigoModel();
        #chamando as fucnoes das 
        $monografia->listar("");
        $artigo->listar("");
        Middleware::auth();
        include "View/principal/admin.php";
    }
}
?>