<?php

class RevisaoController{

public static function index(){
    include "Model/RevisaoModel.php";
    $model=new RevisaoModel();
    $model->listar();
    include 'View/Modules/Revisao/listarRevisao.php';
}
public static function form(){
    include "Model/RevisaoModel.php";
    $model=new RevisaoModel();
    if (isset($_GET['id_Revisao']))
    $model= $model->listarId((int) $_GET['id_Revisao']);
   // var_dump($model);
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
    header("Location: /Revisao");
}
public static function delete(){
    include "Model/RevisaoModel.php";
    
    $model=new RevisaoModel();
    $model->delete((int) $_GET['id_Revisao']);
    header("Location: /Revisao");
}
}
?>