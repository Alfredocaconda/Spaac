<?php

class artigoController{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }

public static function index(){
   // isProtected();
    include "Model/artigoModel.php";
    $model=new artigoModel();
    $model->listar();
    Middleware::auth();
    include 'View/Modules/artigo/listarartigo.php';
}
public static function form(){
    include "Model/artigoModel.php";
    $model=new artigoModel();
    if (isset($_GET['id_artigo']))
    $model= $model->listarId((int) $_GET['id_artigo']);
    Middleware::auth();
    include 'View/Modules/artigo/formartigo.php';
} 
public static function save(){
    include "Model/artigoModel.php";
    
    $model=new artigoModel();
    $model->id_artigo=$_POST['id_artigo'];
    $model->titulo=$_POST['titulo'];
    $model->resumo=$_POST['resumo'];
    $model->volume=$_POST['volume'];
    $model->data_submissao=$_POST['data_submissao'];
    $model->data_avaliacao=$_POST['data_avaliacao'];
    $model->palavra_chave=$_POST['palavra_chave'];
    $model->data_publicacao=$_POST['data_publicacao'];
    if((isset($_FILES['ficheiro']) && $_FILES['ficheiro']['error'] == 0)) {
    $ficheiro =$_FILES['ficheiro']['name'];
    $model->ficheiro=$_FILES['ficheiro']['tmp_name'];
    $model->ficheiro='../ARTIGOS/'.$ficheiro;
    move_uploaded_file($_FILES['ficheiro']['tmp_name'],$ficheiro);
   
    if ( (isset($_FILES['capa']) && $_FILES['capa']['error'] == 0)) {
    $nomecapa=$_FILES['capa']['name'];
    $model->capa=$_FILES['capa']['tmp_name'];
    $model->capa='../ARTIGOS/'.$nomecapa;
    move_uploaded_file($_FILES['capa']['tmp_name'],$nomecapa);
} else{
    $ficheiro = null; // Se nenhum arquivo foi enviado
}
  
    $model->id_categoria=$_POST['id_categoria'];
    $model->id_autor=$_POST['id_autor'];
    $model->save();
    Middleware::auth();
    header("Location: /artigo");
    
    }
}
public static function delete(){
    include "Model/artigoModel.php";
    $model=new artigoModel();
    $model->delete((int) $_GET['id_artigo']);
    Middleware::auth();
    header("Location: /artigo");

}
}
?>