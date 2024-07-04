<?php
class principalController {
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
    public static function index(){
        include "Model/monografiaModel.php";
        include "Model/artigoModel.php";
        $monografia=new monografiaModel();
        $artigo=new artigoModel();
        #chamando as fucnoes das 
        if (isset($_POST['nome'])) {
            # code...
            $monografia->listar($_POST['nome']);
            $artigo->listar($_POST['nome']);
        } else {
            # code...
            $monografia->listar("");
            $artigo->listar("");
        }
        include "View/principal/principal.php";
    }
    public static function principal2(){
        include "Model/monografiaModel.php";
        include "Model/artigoModel.php";
        $monografia=new monografiaModel();
        $artigo=new artigoModel();
        #chamando as fucnoes das 
        if (isset($_POST['nome'])) {
            # code...
            $monografia->listar($_POST['nome']);
            $artigo->listar($_POST['nome']);
        } else {
            # code...
            $monografia->listar("");
            $artigo->listar("");
        }
        Middleware::auth();
        include "View/principal/principal2.php";
    }
}
?>