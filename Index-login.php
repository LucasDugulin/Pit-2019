<?php
session_start();
header("content-type:text/html; charset=utf8");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>PhotoFlash</title>

    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bulma.min.css" />

    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.html">PhotoFlash</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Login</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">Conheça a PhotoFlash</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Explore nossa plataforma,
                                        venha conhecer e encotrar os melhores Fotógrafos</p>

                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">

                                    <?php
                                        if (isset($_SESSION['nao_autenticado'])) :
                                    ?>
                                    <div class="notification is-danger">
                                        <p>ERRO: Usuário ou senha inválidos.</p>
                                    </div>
                                    <?php
                                        endif;
                                        unset($_SESSION['nao_autenticado']);
                                    ?>
                                    <div class="box">
                                        <form action="login.php" method="POST">
                                            <div class="field">
                                                <h3 class="h4 text-black mb-4">Login Usuário</h3>
                                                <div class="control">
                                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                                </div>
                                            </div>

                                            <div class="field">
                                                <div class="control">
                                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                                </div>
                                            </div>

                                            <div class="field">
                                                <a href="index-cadastrarUser.php">Cadastrar</a>
                                            </div>
                                                <button type="submit" class="btn btn-primary btn-pill">Entrar</button>
                                         </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Sobre PhotoFlash</h3>
                        <p>Venha conhecer nossa plataforma e encontar os melhores fotógrafos para o que você precisa ou
                            então venha ser um de nosso fotógrafos.</p>
                    </div>

                    <div class="col-md-3 text-center">
                        <a href="#home-section" class="nav-link">Voltar Para Topo da Página</a>
                    </div>

                    <div class="col-md-4">
                        <h3>Se inscreva</h3>
                        <p></p>
                        <form action="#" class="footer-subscribe">
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control rounded-0" placeholder="E-mail">
                                <input type="submit" class="btn btn-primary rounded-0" value="Enviar">
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> Todos os Direitos Reservados
                                a | PhotoFlash <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">PhotoFlash</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>


    <script src="js/main.js"></script>

</body>

</html>