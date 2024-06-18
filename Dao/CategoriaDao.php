<?php
#class que acessa ao banco de dados
class CategoriaDao{
    private $conexao;
    #contrutor de classes
    public function __construct(){
        $dados="mysql:host=localhost:3306;dbname=spaac";
        $this->conexao=new PDO($dados,'root','');
    }
    public function insert(CategoriaModel $model){
        $sql="INSERT INTO categoria (nome_categoria,tipo_categoria) values (?,?)";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_categoria);
        $valor->bindValue(2,$model->tipo_categoria);
        $valor->execute();
    }
    public function update(CategoriaModel $model){
        $sql="UPDATE categoria SET nome_categoria=?,tipo_categoria=? WHERE id_categoria=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->nome_categoria);
        $valor->bindValue(2,$model->tipo_categoria);
        $valor->bindValue(3,$model->id_categoria );
        $valor->execute();
    }
    public function select(){
        $sql="SELECT * FROM categoria";
        $valor=$this->conexao->prepare($sql);
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_categoria ){
        include_once "Model/CategoriaModel.php";
        $sql="SELECT * FROM categoria WHERE id_categoria=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_categoria );
        $valor->execute();
        return $valor->fetchObject("CategoriaModel");
    }
    public function delete(int $id_categoria ){
        $sql="DELETE FROM categoria WHERE id_categoria=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1, $id_categoria );
        $valor->execute();
    }
   
}
?>