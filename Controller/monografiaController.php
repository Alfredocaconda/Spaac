<?php

class monografiaController{

public static function index(){
   // isProtected();
    include "Model/monografiaModel.php";
    $model=new monografiaModel();
    $model->listar();
    include 'View/Modules/monografia/listarmonografia.php';
}
public static function form(){
    include "Model/monografiaModel.php";
    $model=new monografiaModel();
    if (isset($_GET['id_monografia']))
    $model= $model->listarId((int) $_GET['id_monografia']);
   // var_dump($model);
    include 'View/Modules/monografia/formmonografia.php';
} 
public static function save(){
    include "Model/monografiaModel.php";
    
    $model=new monografiaModel();
    $model->id_monografia=$_POST['id_monografia'];
    $model->titulo_monografia=$_POST['titulo_monografia'];
    $model->instituicao_ensino=$_POST['instituicao_ensino'];
    $model->resumo_monografia=$_POST['resumo_monografia'];
    $model->data_submissao=$_POST['data_submissao'];
    $model->data_avaliacao=$_POST['data_avaliacao'];
    $model->palavra_chave=$_POST['palavra_chave'];
    if((isset($_FILES['ficheiro']) && $_FILES['ficheiro']['error'] == 0) && (isset($_FILES['capa']) && $_FILES['capa']['error'] == 0)) {
        $ficheiro = $_FILES['ficheiro']['name'];
        $model->ficheiro=$_FILES['ficheiro']['tmp_name'];
        $model->ficheiro = '../MONOGRAFIAS/' . $ficheiro;
        move_uploaded_file($_FILES['ficheiro']['tmp_name'], $ficheiro);

        $capa = $_FILES['capa']['name'];
        $model->capa=$_FILES['capa']['tmp_name'];
        $model->capa = '../MONOGRAFIAS/' . $capa;
        move_uploaded_file($_FILES['capa']['tmp_name'], $capa);
    
   
    
    } else {
        $ficheiro = null; // Se nenhum arquivo foi enviado
    }
      
    
   
    $model->id_categoria=$_POST['id_categoria'];
    $model->id_autor=$_POST['id_autor'];
    $model->save();
    header("Location: /monografia");
}
public static function delete(){
    include "Model/monografiaModel.php";
    
    $model=new monografiaModel();
    $model->delete((int) $_GET['id_monografia']);
    header("Location: /monografia");

}
}
?>