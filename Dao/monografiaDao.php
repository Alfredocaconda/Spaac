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
        palavra_chave,ficheiro,data_submissao,capa,id_usuario,id_categoria) 
        values (?,?,?,?,?,?,?,?,?)";
        $valor=$this->conexao->prepare($sql);
        $data_actual=date("Y-m-d");
        $valor->bindValue(1,$model->titulo_monografia);
        $valor->bindValue(2,$model->instituicao_ensino);
        $valor->bindValue(3,$model->resumo_monografia);
        $valor->bindValue(4,$model->palavra_chave);
        $valor->bindValue(5,$model->ficheiro);
        $valor->bindValue(6,$data_actual);
        $valor->bindValue(7,$model->capa);
        $valor->bindValue(8,$model->id_usuario);
        $valor->bindValue(9,$model->id_categoria);
        $valor->execute();
    }
    public function update(monografiaModel $model){
        $sql="UPDATE monografia SET titulo_monografia=?,instituicao_ensino=?,resumo_monografia=?,palavra_chave=?
         ,ficheiro=?,data_submissao=?,capa=?,id_usuario=?,id_categoria=?
        WHERE id_monografia=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->titulo_monografia);
        $valor->bindValue(2,$model->instituicao_ensino);
        $valor->bindValue(3,$model->resumo_monografia);
        $valor->bindValue(4,$model->palavra_chave);
        $valor->bindValue(5,$model->ficheiro);
        $valor->bindValue(6,$model->capa);
        $data_actual=date("Y-m-d");
        $valor->bindValue(7,$data_actual);
        $valor->bindValue(8,$model->id_usuario);
        $valor->bindValue(9,$model->id_categoria);
        $valor->bindValue(10,$model->id_monografia);
        $valor->execute();
    }
    public function update_admin(monografiaModel $model){
        $sql="UPDATE monografia SET estado=?,data_submissao=? WHERE id_monografia=?";
        $valor=$this->conexao->prepare($sql);
        $valor->bindValue(1,$model->aprovar);
        $data_actual=date("Y-m-d");
        $valor->bindValue(2,$data_actual);
        $valor->bindValue(3,$model->id_monografia);
        $valor->execute();
    }
    public function select($nome){
        $valor=null;
        if($nome == ""){
            $sql="SELECT * FROM vmonografia where estado='aprovado'";
            $valor=$this->conexao->prepare($sql);
        }else{
            $sql="SELECT * FROM vmonografia where estado='aprovado' and nome_usuario like ? or titulo_monografia like ? or palavra_chave like ?";
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
            $sql="SELECT * FROM vmonografia";
            $valor=$this->conexao->prepare($sql);
        }else{
            $sql="SELECT * FROM vmonografia where nome_usuario like ? or titulo_monografia like ? or palavra_chave like ?";
            $valor=$this->conexao->prepare($sql);
            $pesquisar = "%$nome%"; 
            $valor->bindValue(1,$pesquisar);
            $valor->bindValue(2,$pesquisar);
            $valor->bindValue(3,$pesquisar);
        }
        $valor->execute();
        return $valor->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectId(int $id_monografia ){
        include_once "Model/monografiaModel.php";
       $sql="SELECT * FROM vmonografia where id_monografia=?";
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