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
    public static function monografia(){
        include "Model/monografiaModel.php";
        $monografia=new monografiaModel();
        #chamando as fucnoes das 
        if (isset($_POST['nome'])) {
            # code...
            $monografia->listar($_POST['nome']);
        } else {
            # code...
            $monografia->listar("");
        }
        include "View/principal/monografia.php";
    }
    public static function artigo(){
        include "Model/artigoModel.php";
        $artigo=new artigoModel();
        #chamando as fucnoes das 
        if (isset($_POST['nome'])) {
            # code...
            $artigo->listar($_POST['nome']);
        } else {
            # code...
            $artigo->listar("");
        }
        include "View/principal/artigo.php";
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
    public static function monografia_admin(){
        include "Model/monografiaModel.php";
        $monografia=new monografiaModel();
        #chamando as fucnoes das 
        if (isset($_POST['nome'])) {
            # code...
            $monografia->listar($_POST['nome']);
        } else {
            # code...
            $monografia->listar("");
        }
        Middleware::auth();
        include "View/principal/monografia_admin.php";
    }
 
    public static function artigo_admin(){
        include "Model/artigoModel.php";
        $artigo=new artigoModel();
        #chamando as fucnoes das 
        if (isset($_POST['nome'])) {
            # code...
            $artigo->listar($_POST['nome']);
        } else {
            # code...
            $artigo->listar("");
        }
        Middleware::auth();
        include "View/principal/artigo_admin.php";
    }
}
?>