<?php
    require('./php/conexao.php');
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>

    <!--ICONE PAGINA WEB-->
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3047/3047928.png" />

    <!--REFERENCIAS-->
    <!-- Chamando o arquivo CSS-->
    <link rel="stylesheet" href="./css/desc.css">
    <link rel="stylesheet" href="./css/styles.css">


    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Habilitar a fonte-->
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>

    <!--Habilitar os ícones-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--DEIXA TODA PÁGINA RESPONSIVA-->
    <div class="container-fluid">

        <!--INICÍO DO MENU SUPERIOR-->
        <nav class=" navbar navbar-expand-lg navbar-light" style="background-color:#FBE292;">
            <a class="navbar-brand" href="index.html"><i class="fa-solid fa-shield-dog fa-2xl" style="color:#FFAC42;"
                    alt="" width="30" height="24" class="d-inline-block align-text-top"></i>
                <a class="navbar-brand" href="index.html">PETSHOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicío</a>
                        </li>

                        <li class="nav-item">
                            <a href="login.html" rel="" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <span class="visuallyhidden">Entrar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.html">Sobre nós</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--FIM DO MENU SUPERIOR-->

        <!--INICIO BARRA DE ATALHOS-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #FBE292;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex w-100">
                    <input class="form-control me-2" type="search" placeholder="Buscar no PetShop" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav ms-auto mb-lg-">
                    <li class="nav-item">
                        <a href="carrinho.html" rel="" class="nav-link">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="visuallyhidden">Carrinho</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--FIM BARRA DE ATALHOS-->

        <!--INICIO DO MENU SECUNDÁRIO-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #FBE292;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cachorros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="racao.html">Ração</a></li>
                            <li><a class="dropdown-item" href="Pest_Ossos.html">Pestiscos e Ossos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gatos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="racaoGatos.html">Ração</a></li>
                            <li><a class="dropdown-item" href="pesticos.html">Pestiscos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


        <!--Inicio Descrição produto-->
        <div class="produtoDesc">

        <?php 
            $conexao = Conexao::conectar();
            $consulta=$conexao->query("SELECT * FROM tbProduto WHERE idProduto = $id");
        
            while($prod = $consulta->fetch(PDO::FETCH_ASSOC)){

                $nome = $prod['nomeProduto'];
                $descricao = $prod['descProduto'];
                $valor = $prod['valorProduto'];
                $peso = $prod['pesoProduto'];
                $imagem = $prod['imagem'];
                
            }?>

            <div class="image">
            <img src='./src/<?php echo $imagem?>' class='product-thumb'></div>
            <section>

                <table class="prodDesc">
                    <thead class="cabeDesc">

                        <tr>
                            <th></th>
                        </tr>
                        <tr>

                            <th><br>Produto<br><br></th>
                            <td class="nome"><?php echo $nome?></td>
                            <th></th>
                        </tr>
                        <tr>

                            <th>Descrição<br><br></th>
                            <td class="descricao"><?php echo $descricao?><br></td>
                        </tr>
                        <tr>

                            <th><br>Peso<br><br></th>
                            <td class="peso"><?php echo $peso?><br></td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <td class="preco">R$<?php echo $valor?></td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </div>
        <div><button class="btnAddCart">Adicionar ao Carrinho</button></div>
        <!--Fim Descrição produto-->

        <!-- Criação do Foolder/Rodapé-->
        <footer>
            <div id="footer_content">
                <div id="footer_contacts">
                    <h1>PetShop</h1>
                    <p>Só quem é apaixonado por animais sabe: a relação de amor e cumplicidade que temos com nossos
                        bichinhos de estimação é um vínculo único! Por essa razão, não medimos esforços para oferecer o
                        que
                        há de melhor para trazer ainda mais alegria e qualidade de vida. Rações, acessórios e brinquedos
                        estão na nossa listinha de prioridades; e tudo isso você encontra em nosso Pet Shop online.</p>

                    <div id="footer_social_media">
                        <a class="footer-link" id="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a class="footer-link" id="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a class="footer-link" id="whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <ul class="footer-list">
                    <li>
                        <h3>Institucional</h3>
                    </li>
                    <li>
                        <a href="sobre.html" class="footer-link">Sobre o PetShop</a>
                    </li>
                    <li>
                        <a>Trabalhe Conosco</a>
                    </li>
                    <li>
                        <a>Canal de Denúncias</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <h3>Nossas Políticas</h3>
                    </li>
                    <li>
                        <a>Entrega e Frete</a>
                    </li>
                    <li>
                        <a>Pagamento e Reembolso</a>
                    </li>
                    <li>
                        <a>Trocas e Devoluções</a>
                    </li>
                    <li>
                        <a>Campanhas e Promoções</a>
                    </li>
                    <li>
                        <a>Política de Privacidade</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <h3>Atendimento</h3>
                    </li>
                    <li>
                        <a ">Meus Pedidos</a>
                </li>
                <li>
                    <a >Meu Cadastro</a>
                </li>
                <li>
                    <a >Fale Conosco</a>
                </li>
                <li>
                    <a >Ouvidoria</a>
                </li>
            </ul>

            <div id=" footer_subscribe">
                            <h5>Cadastre-se e receba nossas promoções e novidades antes de todo mundo.</h5>

                            <div id="input_group">
                                <input type="email" id="email">
                                <button>
                                    <i class="fa-regular fa-envelope"></i>
                                </button>
                            </div>
            </div>
    </div>

    <div id="footer_copyright">
        &#169
        2023 Todos os direitos reservados
    </div>
    </footer>
    </div>
    <!-- fim do Foolder/Rodapé-->

    <!-- JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="carrinho.js"></script>

</body>

</html>