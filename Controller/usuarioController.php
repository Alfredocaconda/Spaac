<?php

class usuarioController{

public static function index(){
    if(isset($_SESSION[''])){

    }
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
   // var_dump($model);
    include 'View/Modules/usuario/formusuario.php';
} 
public static function save(){
    include "Model/usuarioModel.php";
    
    $model=new usuarioModel();
    $model->id_usuario =$_POST['id_usuario '];
    $model->nome=$_POST['nome'];
    $model->tipo=$_POST['tipo'];
    $model->email=$_POST['email'];
    $model->senha=$_POST['senha'];
    $model->save();
    header("Location: /usuario");
}
public static function delete(){
    include "Model/usuarioModel.php";
    
    $model=new usuarioModel();
    $model->delete((int) $_GET['id_usuario ']);
    header("Location: /usuario");

}
}
?>