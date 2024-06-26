<?php

class RevisorController{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
public static function index(){
   // isProtected();
    include "Model/RevisorModel.php";
    $model=new RevisorModel();
    $model->listar();
    Middleware::auth();
    include 'View/Modules/Revisor/listarRevisor.php';
}
public static function form(){
    include "Model/RevisorModel.php";
    $model=new RevisorModel();
    if (isset($_GET['id_revisor']))
    $model= $model->listarId((int) $_GET['id_revisor']);
    Middleware::auth();
    include 'View/Modules/Revisor/formRevisor.php';
} 
public static function save(){
    include "Model/RevisorModel.php";
    $model=new RevisorModel();
    $model->id_revisor=$_POST['id_revisor'];
    $model->nome_revisor=$_POST['nome_revisor'];
    $model->instituicao_revisor=$_POST['instituicao_revisor'];
    $model->email_revisor=$_POST['email_revisor'];
    $model->id_usuario=$_POST['id_usuario'];
    $model->save();
    Middleware::auth();
    header("Location: /Revisor");
}
public static function delete(){
    include "Model/RevisorModel.php";
    
    $model=new RevisorModel();
    $model->delete((int) $_GET['id_revisor']);
    Middleware::auth();
    header("Location: /Revisor");

}
}
?>