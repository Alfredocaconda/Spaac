<?php
#class que acessa ao banco de dados
class artigoDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(artigoModel $model){
        $data_actual=date("Y-m-d");
        $sql="INSERT INTO artigo_cientifico (titulo,resumo,volume,data_submissao,
        palavra_chave,ficheiro,capa,id_usuario,id_categoria) 
        values (?,?,?,?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo);
        $valor->bindValue(2,$model->resumo);
        $valor->bindValue(3,$model->volume);
        $valor->bindValue(4,$data_actual);
        $valor->bindValue(5,$model->palavra_chave);
        $valor->bindValue(6,$model->ficheiro);
        $valor->bindValue(7,$model->capa);
        $valor->bindValue(8,$model->id_usuario);
        $valor->bindValue(9,$model->id_categoria);
        $valor->execute();
    }
    public function update(artigoModel $model){
        $sql="UPDATE artigo_cientifico SET titulo=?,resumo=?,volume=?,data_submissao=?
         ,data_avaliacao=?,palavra_chave=?,data_publicacao=?,ficheiro=?,capa=?,id_usuario=?,id_categoria=?
        WHERE id_artigo_cientifico=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo);
        $valor->bindValue(2,$model->resumo);
        $valor->bindValue(3,$model->volume);
        $data_actual=date("Y-m-d");
        $valor->bindValue(4,$data_actual);
        $valor->bindValue(6,$model->palavra_chave);
        $valor->bindValue(8,$model->ficheiro);
        $valor->bindValue(9,$model->capa);
        $valor->bindValue(10,$model->id_usuario);
        $valor->bindValue(11,$model->id_categoria);
        $valor->bindValue(12,$model->id_artigo);
        $valor->execute();
    }
    public function update_admin(artigoModel $model){
        $sql="UPDATE artigo_cientifico SET estado=?,data_submissao=? WHERE id_artigo_cientifico=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->aprovar);
        $data_actual=date("Y-m-d");
        $valor->bindValue(2,$data_actual);
        $valor->bindValue(3,$model->id_artigo);
        $valor->execute();
    }
    public function select($nome){
        $valor=null;
        if($nome==""){
            $sql="SELECT * FROM vartigo where estado='aprovado'";
            $valor=$this->conexao->prepare($sql);
        }else{
            $sql="SELECT * FROM vartigo where estado='aprovado' and  nome_usuario like ? or titulo like ? or palavra_chave like ?";
            $valor=$this->conexao->prepare($sql);
            $pesquisar = "%$nome%"; 
            $valor->bindValue(1,$pesquisar);
            $valor->bindValue(2,$pesquisar);
            $valor->bindValue(3,$pesquisar);
        }
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function select_admin($nome){
        $valor=null;
        if($nome == ""){
            $sql="SELECT * FROM vartigo";
            $valor=$this->conexao->prepare($sql);
        }else{
            $sql="SELECT * FROM vartigo where nome_usuario like ? or titulo like ? or palavra_chave like ?";
            $valor=$this->conexao->prepare($sql);
            $pesquisar = "%$nome%"; 
            $valor->bindValue(1,$pesquisar);
            $valor->bindValue(2,$pesquisar);
            $valor->bindValue(3,$pesquisar);
        }
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
        
    }
    public function selectId(int $id_artigo ){
        include_once "Model/artigoModel.php";
       $sql="SELECT * FROM vartigo where id_artigo_cientifico=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_artigo );
        $valor->execute();
        return $valor->fetchObject("artigoModel");
    }
    public function delete(int $id_artigo ){
        $sql="DELETE FROM vartigo WHERE id_artigo_cientifico=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_artigo );
        $valor->execute();
    }
   
}
