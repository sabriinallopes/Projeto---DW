<?php
    require("./php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>

    <!--ICONE PAGINA WEB-->
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3047/3047928.png" />

    <!--REFERENCIAS-->

    <!-- Chamando o arquivo CSS-->
    <link rel="stylesheet" href="./css/style2.css">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--HABILITAR FONTE-->
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
    <!--HABILITAR ÍCONE-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--REFERENCIAS-->
</head>

<body>
    <!--DEIXAR TODA PÁG RESPONSIVA-->
    <div class="container-fluid">
        <!--INICÍO DO MENU SUPERIOR-->
        <nav class=" navbar navbar-expand-lg navbar-light" style="background-color:#FBE292">
            <a class="navbar-brand" href="index.html"><i class="fa-solid fa-shield-dog fa-2xl" style="color:#FFAC42;"
                    alt="" width="30" height="24" class="d-inline-block align-text-top"></i>
                <a class="navbar-brand" href="index.html">PETSHOP</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="indexAdmin.php">Inicío</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" rel="" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <span class="visuallyhidden">Meus Dados</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" rel="" class="nav-link">
                                <span class="visuallyhidden">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--FIM DO MENU SUPERIOR-->

        <!--INICIO BARRA DE ATALHOS-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FBE292;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex w-100">
                    <input class="form-control me-2" type="search" placeholder="Buscar no PetShop" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FBE292;">
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
                            Produto
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="adicionarFabricante.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#.php">Editar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Fabricante
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="adicionarFabricante.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#.php">Editar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categoria
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="adicionarCategoria.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="#.php">Editar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--FIM BARRA DE ATALHOS-->       
        <!-- Inicio carrosel-->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://royalpets.vteximg.com.br/arquivos/ids/238795/alimenta%C3%A7%C3%A3o-cachorro.png?v=637692957440270000" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        <!-- Fim carrosel-->

        

        <!--INICIO MIGALHA DE PÃO-->
        <ul class="breadcrumb">
            <li><a href="indexAdmin.php">Inicio</a></li>
            <li><a href="editarCategoria.php">Categoria</a></li>
            
        </ul>
        <!--FIM MIGALHA DE PÃO-->

        <!--INICIO PRODUTOS-->
        <section class="produtos">
            <div class="product-container">
                
                    <table class="table table-success table-striped">
                        <?php
                            $conexao = Conexao::conectar();
                            $consulta=$conexao->query("SELECT * FROM tbCategoriaProduto");

                            while ($coluna = $consulta->fetch(PDO::FETCH_ASSOC)) {

                            echo "<tr>";
                            echo "<td>".$coluna['idCategoriaProduto']."</td>";
                            echo "<td>".$coluna['descCategoria']."</td>";
                            echo "<td>
                            <a href='./php/updateCategoria.php?id=$coluna[idCategoriaProduto]'
                                <i class='bx bxs-trash remove'></i>
                            </a>
                            </td>";
                            echo "</tr>";
                            }
                        ?>
                    </table>
               
            </div>
        </section>
    <!--FIM PRODUTOS-->

    <!-- Criação do Foolder/Rodapé-->
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>PetShop</h1>
                <p>Só quem é apaixonado por animais sabe: a relação de amor e cumplicidade que temos com nossos
                    bichinhos de estimação é um vínculo único! Por essa razão, não medimos esforços para oferecer o que
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
    <script src="carrinho.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    </div>
</body>

</html>
