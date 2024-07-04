<?php

class FuncionarioModel{
    public $id_Funcionario,$nome_Funcionario,$tipo_Funcionario,$email_Funcionario,$senha_Funcionario,$telefone
    ,$instituicao_vinculado,$formacao_academica,$nacionalidade,$grau_academico;
    public $linhas;
    
    public function save(){
        include 'Dao/FuncionarioDao.php';
        $dados=new FuncionarioDao();
        if (empty($this->id_Funcionario )) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
    }
    public function listar(){
        include 'Dao/FuncionarioDao.php';
        $dados=new FuncionarioDao();
       $this->linhas= $dados->select();
    }
    public function listarId(int $id_Funcionario ){
        include 'Dao/FuncionarioDao.php';
        $dados=new FuncionarioDao();
        $obj=$dados->selectId($id_Funcionario );
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new FuncionarioModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new FuncionarioModel();
        }*/
    }
    public function delete(int $id_Funcionario ){
        include 'Dao/FuncionarioDao.php';
        $dados=new FuncionarioDao();
        $dados->delete($id_Funcionario );
    } 
}
?>