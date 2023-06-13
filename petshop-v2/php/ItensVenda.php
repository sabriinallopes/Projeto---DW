<?php
    include_once "conexao.php";
    include_once "produto.php";

    try{
        $id = $_GET['id'];
        $produto = new Produto();
        $conexao = Conexao::conectar();
        $produto->listar($id);
  
        header("Location:../editarCategoria.php");
    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());

    }

?>