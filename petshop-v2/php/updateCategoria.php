<?php
    include_once "conexao.php";
    include_once "categoria.php";

    try{
        $id = $_GET['id'];
        $categoria = new Categoria();
        $conexao = Conexao::conectar();
        $categoria->deletar($id);
  
        header("Location:../editarCategoria.php");
    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());

    }

?>