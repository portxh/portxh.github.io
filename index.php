<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto de Conclusao de Curso para a Escola Tecnica ETEC Paulo do Carmo Monteiro, realizado por estudantes do curso de Informatica para a internet no ano de 2023.">
    <title>SMO Confeitaria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">



</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contatos">Contatos</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="carrinho.php">Carrinho</a>
					</li>
                </ul>
            </div>
        </nav>
    </header>

    <main>

        <section id="home" class="home pt-5">

            <div class="container-fluid  vh-100 pt-5">

                <div class="container h-75 d-flex flex-column justify-content-end">
                    <div class="text-center text-light">
                        <h2 class="display-4">SMO Confeitaria</h2>
                        <h3 class="lead">Deixe sua vida mais saborosa !!!</h3>
                    </div>
                    <div class="mx-auto d-flex flex-wrap justify-content-center">
                        <input class="my-5 mx-3 btn btn-inicio justify-content-center" type="button" value="Reserve seu Bolo">
                        <input class="my-5 mx-3 btn btn-inicio justify-content-center" type="button" value="Personalize seu Bolo">
                    </div>
                </div>
            </div>

        </section>

        <section id="sobre" class="sobre pt-5">

            <div class="container-fluid vh-100 pt-5">

                <div class="container h-75 d-flex flex-column justify-content-center">

                    <h2 class="display-4 text-white text-center">
                        Sobre Nos
                    </h2>
                    <p class="lead text-white text-center mt-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta accusantium commodi
                        magni ad quaerat modi omnis, necessitatibus delectus sapiente accusamus qui, provident excepturi
                        tenetur dolor officia, numquam vel ipsam quos! Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Placeat voluptatibus exercitationem assumenda laboriosam, similique quasi
                        atque enim qui accusantium molestiae debitis corporis explicabo reiciendis, fugiat veniam
                        dignissimos iure odit sint!
                    </p>

                </div>

            </div>

        </section>

        <section id="produtos" class="produtos pt-5">
            <div class="container-fluid min-vh-100 pt-5">

                <div class="container">

                    <h2 class="display-4 text-white text-center">
                        Nossos Produtos
                    </h2>
                    <p class="lead text-center text-white">Bolos & Doces</p>

                    <div class="mt-5">

                        <?php
                        include_once 'cardProd.php';
                        ?>

                    </div>

                </div>

            </div>

        </section>

        <section id="contatos" class="contatos pt-5">
            <div class="container-fluid vh-100 pt-5">

                <div class="container h-100">

                    <h2 class="display-4 text-light text-center">
                        Nossos Contatos
                    </h2>

                    <div class="conteudo h-75 d-flex flex-wrap align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-8 col-sm-12 mt-5">
                            <form class="bg-form rounded p-5">
                                <h2 class="text-white text-center lead">Formulario para Contato</h2>
                                <div class="form-group mt-4">
                                    <label for="nome" class="text-white">Nome Completo:</label>
                                    <input type="text" class="form-control form-contato" id="nome" placeholder="Seu Nome">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-white">Email para Contato:</label>
                                    <input type="email" class="form-control form-contato" id="email" placeholder="email@dominio.com">
                                </div>
                                <div class="form-group">
                                    <label for="assunto" class="text-white">Assunto do seu Contato:</label>
                                    <input type="text" class="form-control form-contato" name="assunto" id="assunto" placeholder="Motivo do contato">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="text-white">Mensagem</label>
                                    <textarea class="form-control form-contato" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem"></textarea>
                                </div>
                                <button type="submit" class="btn btn-block btn-outline-light">Enviar</button>
                            </form>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 my-5">
                            <div class="m-3 text-center">
                                <i class="fas fa-phone text-white"></i>
                                <span class="text-white">(55) 11 4002-8922</span>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fab fa-instagram text-white"></i>
                                <span class="text-white">@SMO-Oficial</span>
                            </div>
                            <div class="m-3 text-center">
                                <i class="fab fa-facebook-f text-white"></i>
                                <span class="text-white">SMO Oficial</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <script src="js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <script src="js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>

</body>

</html>