<?php
    class Produto{
        public function cadastrar($nomeProduto,$descProduto,$pesoProduto,$valorProduto,
        $imagem,$categoria,$porte,$fabricante,$especie,$idade){
            $conexao = Conexao::conectar();
            $queryInsert = "insert into tbProduto (nomeProduto,descProduto,pesoProduto,valorProduto,imagem,idCategoriaProduto,
            idPorteAnimal,idFabricante,idEspecie,idIdadeAnimal) 
            Values ('".$nomeProduto."','".$descProduto."','".$pesoProduto."','".$valorProduto."','".$imagem."','".$categoria."','".$porte."','"
            .$fabricante."','".$especie."','".$idade."')";
            $conexao->exec($queryInsert);
        }
        public function listar($id){
            $conexao = Conexao::conectar();
            $queryDelete = "SEELCT *  FROM tbProduto WHERE idProduto ='$id'";
            $conexao->exec($queryDelete);
        }
   
    }
?>