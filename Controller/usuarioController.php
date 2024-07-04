<?php

class usuarioController{

public static function index(){
    if(isset($_SESSION[''])){

    }
    include "Model/usuarioModel.php";
    $model=new usuarioModel();
    $model->listar();
    Middleware::auth();
    include 'View/principal/principal2.php';
}
public static function form(){
    include 'View/Modules/login/usuario.php';
} 
public static function save(){
    include "Model/usuarioModel.php";
    $model=new usuarioModel();
    //$model->id_usuario =$_POST['id_usuario'];
    $model->nome_usuario=$_POST['nome'];
    $model->tipo_usuario=$_POST['tipo'];
    $model->telefone=$_POST['telefone'];
    $model->instituicao_vinculado=$_POST['instituicao'];
    $model->formacao_academica=$_POST['formacao'];
    $model->nacionalidade=$_POST['nacionalidade'];
    $model->grau_academico=$_POST['grau'];
    $model->email_usuario=$_POST['email'];
    $model->senha_usuario=$_POST['senha'];
    $model->save();
    header("Location: /principal");
}
public static function delete(){
    include "Model/usuarioModel.php";
    
    $model=new usuarioModel();
    $model->delete((int) $_GET['id_usuario']);
    header("Location: /usuario");

}
}
?>