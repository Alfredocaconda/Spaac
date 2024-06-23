<?php

class usuarioController{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
public static function index(){
    
    include "Model/usuarioModel.php";
    $model=new usuarioModel();
    $model->listar();
    include 'View/principal/principal2.php';
}
public static function form(){
    include "Model/usuarioModel.php";
    $model=new usuarioModel();
    if (isset($_GET['id_usuario ']))
    $model= $model->listarId((int) $_GET['id_usuario ']);
    Middleware::auth();
    include 'View/Modules/usuario/formusuario.php';
} 
public static function save(){
    include "Model/usuarioModel.php";
    
    $model=new usuarioModel();
    $model->id_usuario =$_POST['id_usuario '];
    $model->nome_usuario=$_POST['nome'];
    $model->tipo_usuario=$_POST['tipo'];
    $model->email_usuario=$_POST['email'];
    $model->senha_usuario=$_POST['senha'];
    $model->save();
    Middleware::auth();
    header("Location: /usuario");
}
public static function delete(){
    include "Model/usuarioModel.php";
    
    $model=new usuarioModel();
    $model->delete((int) $_GET['id_usuario ']);
    Middleware::auth();
    header("Location: /usuario");

}
}
?>