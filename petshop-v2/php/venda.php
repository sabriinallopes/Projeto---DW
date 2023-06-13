<?php
    require("conexao.php");

    class Venda{
        public function cadastrar($id,$valorTotal,$qtdProduto,$idProduto){
            $conexao = Conexao::conectar();
            $idUser = $_SESSION['idUsuario;'];
            $queryInsert = "insert into tbVenda (dataVenda,idCliente,valorTotal,idProduto,qtdProduto) 
            Values ('".$dataVenda."','".$idUser."','".$valorTotal."','".$idProduto."','".$qtdProduto."')";
            $conexao->exec($queryInsert);
        }
    }
?>