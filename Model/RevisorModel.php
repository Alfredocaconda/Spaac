<?php

class RevisorModel{
    public $id_revisor,$nome_revisor,$instituicao_revisor,$email_revisor,$id_usuario;
    public $linhas;
    
    public function save(){
        include 'Dao/RevisorDao.php';
        $dados=new RevisorDao();
        if (empty($this->id_revisor)) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
    }
    public function listar(){
        include 'Dao/RevisorDao.php';
        $dados=new RevisorDao();
       $this->linhas= $dados->select();
    }
    public function listarId(int $id_revisor ){
        include 'Dao/RevisorDao.php';
        $dados=new RevisorDao();
        $obj=$dados->selectId($id_revisor );
        #codigo para nao receber id desconhecidos
        return ($obj) ? $obj :new RevisorModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new RevisorModel();
        }*/
    }
    public function delete(int $id_revisor ){
        include 'Dao/RevisorDao.php';
        $dados=new RevisorDao();
        $dados->delete($id_revisor );
    } 
}
?>