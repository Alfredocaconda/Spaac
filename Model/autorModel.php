<?php

class autorModel{
    public $id_autor,$instituicao_vinculado,$nacionalidade_autor,$grau_academico,$id_usuario,$telefone;
    public $linhas;
    
    public function save(){
        include 'Dao/autorDao.php';
        $dados=new autorDao();
        if (empty($this->id_autor)) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
        
        
    }
    public function listar(){
        include 'Dao/autorDao.php';
        $dados=new autorDao();
       $this->linhas= $dados->select();

    }
    public function listarId(int $id_autor){
        include 'Dao/autorDao.php';
        $dados=new autorDao();
        $obj=$dados->selectId($id_autor);
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new autorModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new autorModel();
        }*/
    }
    public function delete(int $id_autor){
        include 'Dao/autorDao.php';
        $dados=new autorDao();
        $dados->delete($id_autor);
    } 
}
?>