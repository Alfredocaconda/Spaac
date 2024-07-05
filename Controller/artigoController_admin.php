<?php

class artigoController_admin{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
public static function index(){
    include "Model/artigoModel.php";
    $model=new artigoModel();
    $model->listar_admin("");
    Middleware::auth();
    include 'View/Modules/Artigo_admin/listarartigo.php';
}

public static function form(){
    include "Model/artigoModel.php";
    $model=new artigoModel();
    if (isset($_GET['id_artigo']))
    $model= $model->listarId((int) $_GET['id_artigo']);
    Middleware::auth();
    include 'View/Modules/Artigo_admin/formartigo.php';
} 
public static function save(){
    include "Model/artigoModel.php";
    $model=new artigoModel();
    $model->id_artigo=$_POST['id_artigo'];
    $model->titulo=$_POST['titulo'];
    $model->resumo=$_POST['resumo'];
    $model->volume=$_POST['volume'];
    $model->data_submissao=$_POST['data_submissao'];
    $model->palavra_chave=$_POST['palavra_chave'];
    $model->id_categoria=$_POST['id_categoria'];
    $model->id_usuario=$_POST['id_usuario'];
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
    $model->save();
    Middleware::auth();
    header("Location: /artigo_admin");
    }
}
public static function update(){
    include "Model/artigoModel.php";
    
    $model=new artigoModel();
    $model->id_artigo=$_POST['id_artigo'];
    $model->aprovar=$_POST['aprovar'];
    $model->update_admin();
    Middleware::auth();
    header("Location: /artigo_admin");
    
}
public static function delete(){
    include "Model/artigoModel.php";
    $model=new artigoModel();
    $model->delete((int) $_GET['id_artigo']);
    Middleware::auth();
    header("Location: /artigo_admin");
}
}
?>