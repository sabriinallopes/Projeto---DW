<?php
    include_once "conexao.php";
    include_once "venda.php";

    try{
        $conexao = Conexao::conectar();
        $dataVenda = "SELECT NOW()";
        $conexao->exec($dataVenda);

        $idCliente = $_SESSION['idUsuario'];
        $id = $_POST['id'];
        $qtd = $_POST['qtd'];
        $valor = $_POST['valor'];

        $venda = newVenda();
        
        $venda->cadastrar($id,$valorTotal,$qtdProduto,$idProduto);
        echo "<script>alert('Compra realizada!')</script>";
        //header("Location:../adicionarProduto.php");        

    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());
    }

?>