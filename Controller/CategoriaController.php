<?php

class CategoriaController{

public static function index(){
   // isProtected();
    include "Model/CategoriaModel.php";
    $model=new CategoriaModel();
    $model->listar();
    include 'View/Modules/Categoria/listar_categoria.php';
}
public static function form(){
    include "Model/CategoriaModel.php";
    $model=new CategoriaModel();
    if (isset($_GET['id_categoria']))
    $model= $model->listarId((int) $_GET['id_categoria']);
   // var_dump($model);
    include 'View/Modules/Categoria/formCategoria.php';
} 
public static function save(){
    include "Model/CategoriaModel.php";
    
    $model=new CategoriaModel();
    $model->id_categoria=$_POST['id_categoria'];
    $model->nome_categoria=$_POST['nome_categoria'];
    $model->tipo_categoria=$_POST['tipo_categoria'];
    $model->save();
    header("Location: /categoria");
}
public static function delete(){
    include "Model/CategoriaModel.php";
    
    $model=new CategoriaModel();
    $model->delete((int) $_GET['idcategoria']);
    header("Location: /categoria");

}
}
?>