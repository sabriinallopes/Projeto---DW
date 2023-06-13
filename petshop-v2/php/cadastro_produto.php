<?php
    include_once "conexao.php";
    include_once "produto.php";

    try{
        $nomeProduto = $_POST['nameprod'];
        $descProduto = $_POST['descricao'];
        $pesoProduto = $_POST['pesoprod'];
        $valorProduto = $_POST['valorprod'];
        $imagem = $_POST['image'];
        $categoria = $_POST['categoria'];
        $porte = $_POST['porte'];
        $fabricante = $_POST['fabricante'];
        $especie = $_POST['especie'];
        $idade = $_POST['idade'];

        $produto = new Produto();
        $conexao = Conexao::conectar();

        
        $produto->cadastrar($nomeProduto,$descProduto,$pesoProduto,$valorProduto,
        $imagem,$categoria,$porte,$fabricante,$especie,$idade);
        echo "<script>alert('Cadastro realizado')</script>";
        header("Location:../adicionarProduto.php");        

    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());
    }

?>