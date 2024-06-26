<?php

class ArquivoController{
    
    public static function arquivo(){
        include "Model/artigoModel.php";
            $model=new artigoModel();
            $idarquivo=$_GET['id'];
           $model->listarId($idarquivo);
           include "View/arquivos/lista.php";
    }
}
?>