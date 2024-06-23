<?php

class RevisaoController{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
public static function index(){
    include "Model/RevisaoModel.php";
    $model=new RevisaoModel();
    $model->listar();
    Middleware::auth();
    include 'View/Modules/Revisao/listarRevisao.php';
}
public static function form(){
    include "Model/RevisaoModel.php";
    $model=new RevisaoModel();
    if (isset($_GET['id_Revisao']))
    $model= $model->listarId((int) $_GET['id_Revisao']);
    Middleware::auth();
    include 'View/Modules/Revisao/formRevisao.php';
} 
public static function save(){
    include "Model/RevisaoModel.php";
    $model=new RevisaoModel();
    $model->id_revisao=$_POST['id_revisao'];
    $model->data_revisao=$_POST['data_revisao'];
    $model->comentario=$_POST['comentario'];
    $model->decisao=$_POST['decisao'];
    $model->id_revisor=$_POST['id_revisor'];
    $model->id_monografia=$_POST['id_monografia'];
    $model->id_artigo_cientif=$_POST['id_artigo_cientif'];
    $model->save();
    Middleware::auth();
    header("Location: /Revisao");
}
public static function delete(){
    include "Model/RevisaoModel.php";
    
    $model=new RevisaoModel();
    $model->delete((int) $_GET['id_Revisao']);
    Middleware::auth();
    header("Location: /Revisao");
}
}
?>