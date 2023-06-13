<?php
    class Cliente{
        public function cadastrar($nome,$cpf,$telefone,$email,$senha){
            $conexao = Conexao::conectar();
            $queryInsert = "insert into tbCliente (nomeCliente,cpfCliente,telefoneCliente,emailLogin,senhaLogin,idPerfilAcesso) 
            Values ('".$nome."','".$cpf."','".$telefone."','".$email."','".$senha."',2)";
            $conexao->exec($queryInsert);
        }

        public function listar($id){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbCliente c (nomeCliente,cpfCliente,telefoneCliente,emailLogin,senhaLogin,idPerfilAcesso)
            INNER JOIN tbEnderecoCliente e ON c.idCliente=e.idCliente
            WHERE idCliente = $id";
            $conexao->exec($queryInsert);
        }
    }
?>