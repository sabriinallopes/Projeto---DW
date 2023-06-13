<?php
    include_once "conexao.php";
    include_once "categoria.php";

    try{
        $nomeCategoria = $_POST['nome'];
        
        $categoria = new Categoria();
        $conexao = Conexao::conectar();

        $categoria->cadastrar($nomeCategoria);
        echo "<script>alert('Cadastro realizado')</script>";
        header("Location:../adicionarCategoria.php");        

    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());
    }

?>