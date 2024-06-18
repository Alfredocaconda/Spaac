<?php

class RevisaoModel{
    public $id_revisao,$data_revisao,$comentario,$decisao,$id_revisor,$id_monografia,$id_artigo_cientif;
    public $linhas;
    
    public function save(){
        include 'Dao/RevisaoDao.php';
        $dados=new RevisaoDao();
        if (empty($this->id_revisao)) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
    }
    public function listar(){
        include 'Dao/RevisaoDao.php';
        $dados=new RevisaoDao();
       $this->linhas= $dados->select();
    }
    public function listarId(int $id_revisao){
        include 'Dao/RevisaoDao.php';
        $dados=new RevisaoDao();
        $obj=$dados->selectId($id_revisao);
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new RevisaoModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new RevisaoModel();
        }*/
    }
    public function delete(int $id_revisao){
        include 'Dao/RevisaoDao.php';
        $dados=new RevisaoDao();
        $dados->delete($id_revisao);
    } 
}
?>