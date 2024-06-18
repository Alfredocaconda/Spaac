<?php

class usuarioModel{
    public $id_usuario,$nome_usuario,$tipo_usuario,$email_usuario,$senha_usuario;
    public $linhas;
    
    public function save(){
        include 'Dao/usuarioDao.php';
        $dados=new usuarioDao();
        if (empty($this->id_usuario )) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
    }
    public function listar(){
        include 'Dao/usuarioDao.php';
        $dados=new usuarioDao();
       $this->linhas= $dados->select();
    }
    public function listarId(int $id_usuario ){
        include 'Dao/usuarioDao.php';
        $dados=new usuarioDao();
        $obj=$dados->selectId($id_usuario );
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new usuarioModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new usuarioModel();
        }*/
    }
    public function delete(int $id_usuario ){
        include 'Dao/usuarioDao.php';
        $dados=new usuarioDao();
        $dados->delete($id_usuario );
    } 
}
?>