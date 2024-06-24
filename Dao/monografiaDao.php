<?php
#class que acessa ao banco de dados
class monografiaDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(monografiaModel $model){
        $sql="INSERT INTO monografia (titulo_monografia,instituicao_ensino,resumo_monografia,
        palavra_chave,ficheiro,data_submissao,data_avaliacao,data_publicacao,capa,id_autor,id_categoria) 
        values (?,?,?,?,?,?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo_monografia);
        $valor->bindValue(2,$model->instituicao_ensino);
        $valor->bindValue(3,$model->resumo_monografia);
        $valor->bindValue(4,$model->palavra_chave);
        $valor->bindValue(5,$model->ficheiro);
        $valor->bindValue(6,$model->capa);
        $valor->bindValue(7,$model->data_submissao);
        $valor->bindValue(8,$model->data_avaliacao);
        $valor->bindValue(9,$model->data_publicacao);
        $valor->bindValue(10,$model->id_autor);
        $valor->bindValue(11,$model->id_categoria);
        $valor->execute();
    }
    public function update(monografiaModel $model){
        $sql="UPDATE monografia SET titulo_monografia=?,instituicao_ensino=?,resumo_monografia=?,palavra_chave=?
         ,ficheiro=?,data_submissao=?,data_avaliacao=?,data_publicacao=?,capa=?,id_autor=?,id_categoria=?
        WHERE id_monografia=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo_monografia);
        $valor->bindValue(2,$model->instituicao_ensino);
        $valor->bindValue(3,$model->resumo_monografia);
        $valor->bindValue(4,$model->palavra_chave);
        $valor->bindValue(5,$model->ficheiro);
        $valor->bindValue(6,$model->capa);
        $valor->bindValue(7,$model->data_submissao);
        $valor->bindValue(8,$model->data_avaliacao);
        $valor->bindValue(9,$model->data_publicacao);
        $valor->bindValue(10,$model->id_autor);
        $valor->bindValue(11,$model->id_categoria);
        $valor->bindValue(12,$model->id_monografia);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM vmonografia";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_monografia ){
        include_once "Model/monografiaModel.php";
       $sql="SELECT * FROM vmonografias where id_monografia=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_monografia );
        $valor->execute();
        return $valor->fetchObject("monografiaModel");
    }
    public function delete(int $id_monografia ){
        $sql="DELETE FROM vmonografia WHERE id_monografia=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_monografia );
        $valor->execute();
    }
   
}
?>