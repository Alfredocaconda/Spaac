<?php

class CategoriaModel{
    public $id_categoria ,$nome_categoria,$tipo_categoria;
    public $linhas;
    
    public function save(){
        include 'Dao/CategoriaDao.php';
        $dados=new CategoriaDao();
        if (empty($this->id_categoria )) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
        
    }
    public function listar(){
        include 'Dao/CategoriaDao.php';
        $dados=new CategoriaDao();
       $this->linhas= $dados->select();

    }
    public function listarId(int $id_categoria ){
        include 'Dao/CategoriaDao.php';
        $dados=new CategoriaDao();
        $obj=$dados->selectId($id_categoria );
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new CategoriaModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new CategoriaModel();
        }*/
    }
    public function delete(int $id_categoria ){
        include 'Dao/CategoriaDao.php';
        $dados=new CategoriaDao();
        $dados->delete($id_categoria );
    } 
}
?>