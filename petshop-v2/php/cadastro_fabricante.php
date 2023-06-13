<?php
    include_once "conexao.php";
    include_once "fabricante.php";

    try{
        $nomeFabricante = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        
        $fabricante = new Fabricante();
        $conexao = Conexao::conectar();

        $fabricante->cadastrar($nomeFabricante,$cnpj);
        echo "<script>alert('Cadastro realizado')</script>";
        header("Location:../adicionarFabricante.php");        

    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());
    }

?>