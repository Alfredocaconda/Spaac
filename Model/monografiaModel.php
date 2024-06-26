<?php

class monografiaModel{
    public $id_monografia,$titulo_monografia,$instituicao_ensino,$resumo_monografia,
    $palavra_chave,$ficheiro,$data_submissao,$data_avaliacao,$id_autor,$id_categoria,$data_publicacao, $capa;
    public $linhas;
    
    public function save(){
        include 'Dao/monografiaDao.php';
        $dados=new monografiaDao();
        if (empty($this->id_monografia)) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
        
        
    }
    public function listar(){
        include 'Dao/monografiaDao.php';
        $dados=new monografiaDao();
       $this->linhas= $dados->select();

    }
    public function listarId(int $id_monografia){
        include 'Dao/monografiaDao.php';
        $dados=new monografiaDao();
        $obj=$dados->selectId($id_monografia);
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new monografiaModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new monografiaModel();
        }*/
    }
    public function delete(int $id_monografia){
        include 'Dao/monografiaDao.php';
        $dados=new monografiaDao();
        $dados->delete($id_monografia);
    } 
}
?>