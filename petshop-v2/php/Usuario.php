<?php

    class Usuario{
        public function login($email,$senha){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT * FROM tbCliente WHERE emailLogin = :email AND senhaLogin = :senha";
            $querySelect = $conexao->prepare($querySelect);
            $querySelect->bindValue("email",$email);
            $querySelect->bindValue("senha",$senha);
            $querySelect->execute();

            if($querySelect->rowCount() > 0){
                $dado = $querySelect->fetch();
                //echo $dado['idCliente'];

                $_SESSION['idUsuario'] = $dado['idCliente'];

                return true;

            } else{

                return false;
            }
        }
    }

?>