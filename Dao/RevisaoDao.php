<?php
#class que acessa ao banco de dados
class RevisaoDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(RevisaoModel $model){
        $sql="INSERT INTO revisao (data_revisao,comentario,decisao,id_revisor,id_monografia,id_artigo_cientif) 
        values (?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->data_revisao);
        $valor->bindValue(2,$model->comentario);
        $valor->bindValue(3,$model->decisao);
        $valor->bindValue(4,$model->id_revisor);
        $valor->bindValue(5,$model->id_monografia);
        $valor->bindValue(5,$model->id_artigo_cientif);
        $valor->execute();
    }
    public function update(RevisaoModel $model){
        $sql="UPDATE revisao SET data_revisao=?,comentario=?,decisao=?,id_revisor=?,
        id_monografia=?,id_artigo_cientif=? WHERE id_revisao=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->data_revisao);
        $valor->bindValue(2,$model->comentario);
        $valor->bindValue(3,$model->decisao);
        $valor->bindValue(4,$model->id_revisor);
        $valor->bindValue(5,$model->id_monografia);
        $valor->bindValue(6,$model->id_artigo_cientif);
        $valor->bindValue(7,$model->id_revisao);
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM revisao";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_revisao){
        include_once "Model/RevisaoModel.php";
        $sql="SELECT * FROM revisao WHERE id_revisao=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_revisao);
        $valor->execute();
        return $valor->fetchObject("RevisaoModel");
    }
    public function delete(int $id_revisao){
        $sql="DELETE FROM revisao WHERE id_revisao=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_revisao);
        $valor->execute();
    }
   
}
?>