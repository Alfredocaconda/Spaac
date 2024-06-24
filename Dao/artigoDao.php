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
        $sql="INSERT INTO artigo_cientifico (titulo,resumo,volume,data_submissao,
        data_avaliacao,palavra_chave,data_publicacao,ficheiro,capa,id_autor,id_categoria) 
        values (?,?,?,?,?,?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo);
        $valor->bindValue(2,$model->resumo);
        $valor->bindValue(3,$model->volume);
        $valor->bindValue(4,$model->data_submissao);
        $valor->bindValue(5,$model->data_avaliacao);
        $valor->bindValue(6,$model->palavra_chave);
        $valor->bindValue(7,$model->data_publicacao);
        $valor->bindValue(8,$model->ficheiro);
        $valor->bindValue(9,$model->capa);
        $valor->bindValue(10,$model->id_autor);
        $valor->bindValue(11,$model->id_categoria);
        $valor->execute();
    }
    public function update(artigoModel $model){
        $sql="UPDATE artigo_cientifico SET titulo=?,resumo=?,volume=?,data_submissao=?
         ,data_avaliacao=?,palavra_chave=?,data_publicacao=?,ficheiro=?,capa=?,id_autor=?,id_categoria=?
        WHERE id_artigo_cientifico=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo);
        $valor->bindValue(2,$model->resumo);
        $valor->bindValue(3,$model->volume);
        $valor->bindValue(4,$model->data_submissao);
        $valor->bindValue(5,$model->data_avaliacao);
        $valor->bindValue(6,$model->palavra_chave);
        $valor->bindValue(7,$model->data_publicacao);
        $valor->bindValue(8,$model->ficheiro);
        $valor->bindValue(9,$model->capa);
        $valor->bindValue(10,$model->id_autor);
        $valor->bindValue(11,$model->id_categoria);
        $valor->bindValue(12,$model->id_artigo);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM vartigo";
        $valor=$this->conexao->prepare($sql);
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
