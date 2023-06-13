<?php
    require("./php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Fabricante</title>
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3047/3047928.png" />

    <link rel="stylesheet" href="./css/cadProduto.css">
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="https://img.freepik.com/vetores-gratis/gato-bonito-e-cachorro-brincando-juntos-ilustracao-em-vetor-icone-dos-desenhos-animados-icone-de-natureza-animal-isolado-plano_138676-7264.jpg?size=626&ext=jpg&ga=GA1.1.1718632352.1684362525&semt=sph"
                alt="">
        </div>
        <div class="form">
            <form method="POST" action="./php/cadastro_fabricante.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar Fabricante</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nameprod">Nome</label>
                        <input id="nameprod" type="text" name="nome" maxlength="30" required>
                    </div>
                </div>
                <div class="input-group">    
                    <div class="input-box">
                        <label for="cnpj">CNPJ</label>
                        <input id="cnpj" type="text" name="cnpj" maxlength="30" required>
                    </div>
                </div>    

                <div class="continue-button">
                    <button type="submit" class="btn-login">Cadastrar</button>
                </div>
        </div>

        </form>
    </div>
    </div>
</body>

</html>