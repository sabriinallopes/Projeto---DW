<?php
    class Categoria{
        public function cadastrar($nome){
            $conexao = Conexao::conectar();
            $queryInsert = "insert into tbCategoriaProduto (descCategoria) 
            Values ('".$nome."')";
            $conexao->exec($queryInsert);
        }

        public function deletar($id){
            $conexao = Conexao::conectar();
            $queryDelete = "DELETE FROM tbCategoriaProduto WHERE idCategoriaProduto ='$id'";
            $conexao->exec($queryDelete);
        }
    }
?>