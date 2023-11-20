<?php
// Configurações do banco de dados
$host = '127.0.0.1';
$usuario = 'root'; // Coloque o seu usuário do MySQL aqui, se necessário
$senha = '';
$banco = 'aloja';

// Conectar ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
$consultaEditaSite = "SELECT * FROM editasite";
$resultadoEditaSite = mysqli_query($conexao, $consultaEditaSite);


if (mysqli_num_rows($resultadoEditaSite) > 0) {
    while ($linhaEditaSite = mysqli_fetch_assoc($resultadoEditaSite)) {


?>
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" href="../../assets/imagens/<?=$linhaEditaSite['Logo1']?>" type="image/x-icon">
            <title><?= $linhaEditaSite['NomeSite'] ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>
        <style>
            .fixo {
                background-color: #212529;
                padding: 10px;
                width: 100%;
                z-index: 6;
            }

            .fixed {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
            }

            .nav-link {
                color: #fff !important;
            }

            .marquee-container {
                width: 100%;
                overflow: hidden;
            }

            .marquee-content {
                z-index: 6;

                display: inline-block;
                white-space: nowrap;
                animation: marquee 90s linear infinite;
                /* Ajuste a velocidade e duração conforme necessário */
            }

            @keyframes marquee {
                0% {
                    transform: translateX(10%);
                }

                100% {
                    transform: translateX(-100%);
                }
            }
        </style>

        <body style="height: 1000px;">
            <header>
                <div class="logoHeader bg-dark">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" width="144px" src="../../assets/imagens/<?=$linhaEditaSite['Logo1']?>" alt="Logo" srcset="">
                    </div>
                    <div class="fixo">
                        <div class="marquee-container d-none">
                           
                        </div>
                        <nav class="navbar navbar-expand-lg bg-body-dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img   src="../../assets/imagens/<?=$linhaEditaSite['Logo2']?>" style="width: 150px;" alt=""></a>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                    <span><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg></span>
                                </button>

                                <div class="collapse navbar-collapse">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Opção</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Opção
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Opção</a></li>
                                                <li><a class="dropdown-item" href="#">Opção</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Opção</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Minha Conta
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./logoff.php">Sair</a></li>

                                            </ul>
                                        </li>

                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">

                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>


                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
        <?php
    }
} else {
    echo "Nenhum produto cadastrado.";
}

// Fechar a conexão com o banco de dados
        ?>
            </header>
            <!--Slide-->
            <section>


                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="../../assets/pages/images/slide/1.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../assets/pages/images/slide/2.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/pages/images/slide/3.png" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </section>
            <!---produtdo-->
            <section>
                <div class="container">
                    <h1 class="text-center p-4  ">Categoria 1</h1>
                    <div class="row">

                        <?php

                        // Consulta SQL para selecionar os produtos
                        $consulta = "SELECT id, nome, descrição, valor, imagem FROM produtos";
                        // Executar a consulta
                        $resultado = mysqli_query($conexao, $consulta);

                        if (mysqli_num_rows($resultado) > 0) {
                            while ($linha = mysqli_fetch_assoc($resultado)) { ?>
                                <!-- Card 1 -->
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="<?= $linha['imagem'] ?>" style="width:200px" class="card-img-top" alt="Produto 1">
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><?= $linha['nome'] ?></h5>
                                            <div class="form-group row">
                                                <div class="col-7">
                                                    <p class="card-text text-center">R$ <?= number_format($linha['valor'], 2, ',', '.') ?></p>

                                                </div>
                                                <div class="col">
                                                    <input type="number" name="number" class="form-control" placeholder="0" id="number">

                                                </div>

                                                <button class="btn btn-primary my-2">Comprar<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                                        </svg></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        } else {
                            echo "Nenhum produto cadastrado.";
                        }

                        // Fechar a conexão com o banco de dados
                        mysqli_close($conexao);
                        ?>
                    </div>
                </div>
            </section>

            <!--Slide-->
            <section>


                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="../../assets/pages/images/slide/1.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../../assets/pages/images/slide/2.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/pages/images/slide/3.png" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </section>



            <footer class="bg-dark text-light p-3 text-center">
                <div class="container">
                    <p class="mb-0">Importante</p>
                    <p class="mb-0">Imagens Meramente Ilustrativas.</p>
                    <p class="mb-0">Preços sujeitos a alterações sem aviso prévio.</p>
                    <p class="mb-0">Não nos responsabilizamos pela montagem/instalação dos produtos.</p>
                    <p class="mb-0">Desenvolvido por Anderson Perugorria em 2023</p>

                </div>

                <div class="row justify-content-between">
                    <div class="col-4">
                        Seja bem vindo
                    </div>
                    <div class="col-4">
                        Opa você é um Admin ? <a href="../privade/loginadm.php">Entre aqui</a>
                    </div>
                </div>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    var headerTop = $('.fixo').offset().top; // Obtém a posição da borda superior da div .header

                    $(window).scroll(function() {
                        if ($(this).scrollTop() > headerTop) {
                            $('.fixo').addClass('fixed');
                        } else {
                            $('.fixo').removeClass('fixed');
                        }
                    });
                });
            </script>

        </body>

        </html>