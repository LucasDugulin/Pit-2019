
<?php
    header("content-type:text/html; charset=utf8");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>PhotoFlash</title>
    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
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
                    <div class="site-logo mr-auto w-25"><a href="index.html">PhotFlash</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Voltar Para Topo da Página</a></li>
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

        <div class="intro-section single-cover" id="home-section">

            <div class="slide-1 " style="background-image: url('./images/sla.jpg');" data-stellar-background-ratio="0.">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row justify-content-center align-items-center text-center" style="margin-left:-30%; margin-top:10%">
                                <img src="images/user.png" style="border-radius: 50%;" alt="Image" class="img-fluid">
                                <h1 data-aos="fade-up" style="margin-left: 3%;" data-aos-delay="100" name="dados">
                                    <?php
                                        include 'conexao2.php';
                                        $banco = new Model();
        
                                        $usuario = $banco->getData("SELECT * FROM usuario WHERE usuario_id = '1'");
                                        echo $usuario[0]['nome'];
                                        ?>
                                </h1>
                                <a href="index-perfil-edt.php" style="margin-left: 25px; color: #50c058;">Editar
                                    Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <h1 data-aos="fade-up" class="text-center" style="margin-left: 3%;" data-aos-delay="100">Histórico</h1>
                <div class="col-lg-4">
                    <div class="mb-5 text-center border rounded course-instructor">
                        <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Fotografo Contartado 1</h3>
                        <div class="mb-4 text-center">
                            <img src="images/person_2.jpg" alt="Image" class="w-25 rounded-circle mb-4">
                            <h3 class="h5 text-black mb-4">Christine Downeyy</h3>
                            <p>Descrição do Fotografo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Sobre PhotoFlash</h3>
                    <p>Venha conhecer nossa plataforma e encontar os melhores fotógrafos para o que você precisa ou
                        então venha
                        ser um de nosso fotógrafos.</p>
                </div>

                <div class="col-md-3 ml-auto">

                </div>

                <div class="col-md-4">
                    <h3>Se Inscreva</h3>
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
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made
                            with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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