<?php

class monografiaController_admin{
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }

public static function index(){
   // isProtected();
    include "Model/monografiaModel.php";
    $model=new monografiaModel();
    $model->listar_admin("");
    Middleware::auth();
    include 'View/Modules/Monografia_admin/listarmonografia.php';
}
public static function form(){
    include "Model/monografiaModel.php";
    $model=new monografiaModel();
    if (isset($_GET['id_monografia']))
    $model= $model->listarId((int) $_GET['id_monografia']);
    Middleware::auth();
    include 'View/Modules/Monografia_admin/formmonografia_update.php';
} 
public static function save(){
    include "Model/monografiaModel.php";
    
    $model=new monografiaModel();
    $model->id_monografia=$_POST['id_monografia'];
    $model->titulo_monografia=$_POST['titulo_monografia'];
    $model->instituicao_ensino=$_POST['instituicao_ensino'];
    $model->resumo_monografia=$_POST['resumo_monografia'];
    $model->data_submissao=$_POST['data_submissao'];
    $model->palavra_chave=$_POST['palavra_chave'];
    $model->id_categoria=$_POST['id_categoria'];
    $model->id_usuario=$_POST['id_usuario'];
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
    $model->save();

    Middleware::auth();
    header("Location: /monografia_admin_");
}
public static function update(){
    include "Model/monografiaModel.php";
    $model=new monografiaModel();
    $model->id_monografia=$_POST['id_monografia'];
    $model->aprovar=$_POST['aprovar'];
    $model->update_admin();
    Middleware::auth();
    header("Location: /monografia_admin_");
}
public static function delete(){
    include "Model/monografiaModel.php";
    
    $model=new monografiaModel();
    $model->delete((int) $_GET['id_monografia']);
    Middleware::auth();
    header("Location: /monografia_admin_");

}
}
?>