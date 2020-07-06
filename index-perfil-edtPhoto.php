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

    <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 

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
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
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
                            <div class="row justify-content-center align-items-center text-center"
                                style="margin-left:-30%; margin-top:10%">
                                <img src="images/user.png" style="border-radius: 50%;" alt="Image" class="img-fluid">
                                <h1 data-aos="fade-up" style="margin-left: 3%;" data-aos-delay="100" name="dados">
                                    <?php
                                        include 'conexao2.php';
                                        $banco = new Model();
        
                                        $usuario = $banco->getData("SELECT * FROM usuario WHERE usuario_id = '1'");
                                        echo $usuario[0]['nome'];
                                        ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="col-lg-5 text-center" style="margin-left: 350px;" data-aos="fade-up" data-aos-delay="500">
                    <form name="form1" action="uptade-perfilP.php" method="post" class="form-box">
                        <h3 class="h4 text-black mb-4">Editar</h3>
                        <div class="row">
                                <div class="col-lg-6 ml-auto">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome" name="nome" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Usuário" name="usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="E-mail" name="email" size="50">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" placeholder="Confirmar Senha" name="senha2">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CPF" name="cpf" maxlength="14" onkeypress="MascaraCPF(cpf)" onBlur="ValidarCPF(cpf)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="CEP" id="cep" name="cep" maxlength="10" onblur="pesquisacep(this.value);" onkeypress="MascaraCep(cep)" onclick="this.value=''" v-model="cep">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Rua" name="rua" id="rua">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Numero" name="numero" id="numero">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Bairro" name="bairro" id="bairro">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="cidade">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Estado" name="uf" id="uf">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                                <div class="nput-field first-wrap text-center">
                                                    <select data-trigger="" class="form-control" name="tipo">
                                                        <option value="Casamento">Casameto</option>
                                                        <option value="Pet">Pet</option>
                                                        <option value="Alimentos">Alimentos</option>
                                                        <option value="Anúncios">Anúncios</option>
                                                        <option value="Kids">Kids</option>
                                                    </select><br>
                                                    <input type="submit" class="btn btn-primary btn-pill" value="Cadastrar"name="Atualizar">
                                                </div>
                                            </div>
                            </div>
                    </form>
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
                                with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
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