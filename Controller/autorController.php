<?php

class autorController{

public static function index(){
   // isProtected();
    include "Model/autorModel.php";
    $model=new autorModel();
    $model->listar();
    include 'View/Modules/autor/listarautor.php';
}
public static function form(){
    include "Model/autorModel.php";
    $model=new autorModel();
    if (isset($_GET['id_autor']))
    $model= $model->listarId((int) $_GET['id_autor']);
   // var_dump($model);
    include 'View/Modules/autor/formautor.php';
} 
public static function save(){
    include "Model/autorModel.php";
    
    $model=new autorModel();
    $model->telefone=$_POST['telefone'];
    $model->id_autor=$_POST['id_autor'];
    $model->instituicao_vinculado=$_POST['instituicao_vinculado'];
    $model->nacionalidade_autor=$_POST['nacionalidade_autor'];
    $model->grau_academico=$_POST['grau_academico'];
    $model->id_usuario=$_POST['id_usuario'];
    $model->save();
    header("Location: /autor");
}
public static function delete(){
    include "Model/autorModel.php";
    
    $model=new autorModel();
    $model->delete((int) $_GET['id_autor']);
    header("Location: /autor");

}
}
?>