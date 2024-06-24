<?php

class artigoModel{
    public $id_artigo,$titulo,$resumo,$caminho_destino,
    $volume,$data_submissao,$data_avaliacao,$palavra_chave,$ficheiro,$id_autor,
    $id_categoria,$data_publicacao,$capa;
    public $linhas;
    
    public function save(){
        include 'Dao/artigoDao.php';
        $dados=new artigoDao();
        if (empty($this->id_artigo)) {
            # code...
            $dados->insert($this);
        } else {
            # code...
            $dados->update($this);
        }
        
        
    }
    public function listar(){
        include 'Dao/artigoDao.php';
        $dados=new artigoDao();
       $this->linhas= $dados->select();

    }
    public function listarId(int $id_artigo){
        include 'Dao/artigoDao.php';
        $dados=new artigoDao();
        $obj=$dados->selectId($id_artigo);
        #codigo para nao receber id desconhecidos
        
        return ($obj) ? $obj :new artigoModel(); #operador ternario
       /* if($obj){
            return $obj;
        }else{
            return new artigoModel();
        }*/
    }
    public function delete(int $id_artigo){
        include 'Dao/artigoDao.php';
        $dados=new artigoDao();
        $dados->delete($id_artigo);
    } 
}
