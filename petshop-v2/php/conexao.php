<?php

    session_start();
    
    Class Conexao {
  
            public static function Conectar(){
                $conexao = new PDO("mysql:host=localhost;dbname=bdpetshop","root", "");
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexao->exec("SET CHARACTER SET utf8");
                return $conexao; 
            }
    }
?>