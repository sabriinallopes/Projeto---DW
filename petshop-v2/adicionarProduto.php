<?php
    require("./php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
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
        <?php
                $conexao = Conexao::conectar();
                $consulta=$conexao->query("SELECT * FROM tbIdadeAnimal");
                $consulta2=$conexao->query("SELECT * FROM tbFabricante");
                $consulta3=$conexao->query("SELECT * FROM tbCategoriaProduto");
                $consulta4=$conexao->query("SELECT * FROM tbPorteAnimal");
                $consulta5=$conexao->query("SELECT * FROM tbEspecie");
                $consulta->execute();
                $consulta2->execute();
                $consulta3->execute();
                $consulta4->execute();
                $consulta5->execute();
        ?>
            <form method="POST" action="./php/cadastro_produto.php">

            
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar Produto</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nameprod">Nome</label>
                        <input id="nameprod" type="text" name="nameprod" maxlength="30" required>
                    </div>
                    <div class="input-box">
                        <label for="peso">Peso</label>
                        <input id="pesos" type="text" name="pesoProd" maxlength="10" required>
                    </div>

                    <div class="input-box">
                        <label for="idade">Idade</label>
                        <select id="idade" type="form-select" name="idade" maxlength="20" required>
                            <?php while ($coluna = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $coluna['idIdadeAnimal'];?>" name="idade"><?php echo $coluna['descIdade'];?></option>                     
                           <?php }?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="valor">Valor</label>
                        <input id="valor" type="text" name="valorProd" maxlength="8" required>
                    </div>

                    <div class="input-box">
                        <label for="especie">Fabricante</label>
                        <select id="fabricante" type="form-select" name="fabricante" maxlength="14" required>
                            <?php while ($coluna = $consulta2->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $coluna['idFabricante']?>"><?php echo $coluna['nomeFabricante'];?></option>                     
                           <?php }?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="especie">Categoria</label>
                        <select id="categoria" type="form-select" name="categoria" maxlength="14" required>
                            <?php while ($coluna = $consulta3->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $coluna['idCategoriaProduto'];?>"><?php echo $coluna['descCategoria'];?></option>                     
                           <?php }?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="categoria">Espécie</label>
                        <select id="especie" type="form-select" name="especie" maxlength="20" required>
                            <?php while ($coluna = $consulta5->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $coluna['idEspecie'];?>"><?php echo $coluna['descEspecie'];?></option>                     
                           <?php }?>
                        </select>
                    </div>

                    <div class="input-box">
                        <label for="categoria">Porte</label>
                        <select id="porte" type="form-select" name="porte" maxlength="20" required>
                            <?php while ($coluna = $consulta4->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $coluna['idPorteAnimal'];?>"><?php echo $coluna['descPorte'];?></option>                     
                           <?php }?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="descricao">Descrição</label>
                        <textarea rows="3" cols="70" id="descricao" type="text" name="descricao" required></textarea>
                    </div>
                    <div class="input-box">
                        <label for="imagem">Imagem</label>
                        <input id="imagem" type="file" name="image" required>
                    </div>
                </div>

            <?php
            
            ?>

                <div class="continue-button">
                    <button type="submit" class="btn-login">Cadastrar Produto</button>
                </div>
        </div>

        </form>
    </div>
    </div>
</body>

</html>