<?php

class FuncionarioController{

public static function index(){
    if(isset($_SESSION[''])){

    }
    include "Model/FuncionarioModel.php";
    $model=new FuncionarioModel();
    $model->listar();
    Middleware::auth();
    include 'View/principal/principal2.php';
}
    public static function form(){
        Middleware::auth();
    include 'View/Modules/usuario/formusuario.php';
} 
public static function save(){
    include "Model/FuncionarioModel.php";
    $model=new FuncionarioModel();
    //$model->id_Funcionario =$_POST['id_Funcionario'];
    $model->nome_Funcionario=$_POST['nome'];
    $model->tipo_Funcionario=$_POST['tipo'];
    $model->telefone=$_POST['telefone'];
    $model->instituicao_vinculado=$_POST['instituicao'];
    $model->formacao_academica=$_POST['formacao'];
    $model->nacionalidade=$_POST['nacionalidade'];
    $model->grau_academico=$_POST['grau'];
    $model->email_Funcionario=$_POST['email'];
    $model->senha_Funcionario=$_POST['senha'];
    $model->save();
    header("Location: /principal");
}
public static function delete(){
    include "Model/FuncionarioModel.php";
    
    $model=new FuncionarioModel();
    $model->delete((int) $_GET['id_Funcionario']);
    header("Location: /Funcionario");

}
}
?>