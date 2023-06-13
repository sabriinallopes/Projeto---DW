<?php
    include_once "conexao.php";
    include_once "cliente.php";

    try{

        $nomeCliente = $_POST['nome'];
        $cpfCliente = $_POST['cpf'];
        $telefoneCliente = $_POST['number'];
        $emailCliente = $_POST['email'];
        $senhaCliente = $_POST['password'];

        //$dataConvertida = implode("-",array_reverse(explode("/",$dataNascimento)));

        $cliente = new Cliente();
        $conexao = Conexao::conectar();

        $sql = $conexao->prepare("SELECT COUNT(idCliente) FROM tbCliente WHERE cpfCliente ='$cpfCliente'");
        $sql->execute();
        $row = $sql->fetchColumn();

        if ($row > 0){
            echo "<script>alert ('CPF já cadastrado!')</script>";
           //header("Location:../cadastro.html");

       } else {
            $cliente->cadastrar($nomeCliente,$cpfCliente,$telefoneCliente,$emailCliente,$senhaCliente);
            echo "<script>alert ('Cadastro realizado') </script>";
            header("Location:../login.html");
        }

        

    } catch (PDOException $e){
        echo ("Erro: ".$e->getMessage());
    }

?>