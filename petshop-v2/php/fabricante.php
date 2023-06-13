<?php
    class Fabricante{
        public function cadastrar($nome,$cnpj){
            $conexao = Conexao::conectar();
            $queryInsert = "insert into tbFabricante (nomeFabricante,cnpjFabricante) 
            Values ('".$nome."','".$cnpj."')";
            $conexao->exec($queryInsert);
        }
    }
?>