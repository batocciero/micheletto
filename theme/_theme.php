<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Vinhos Louveira">
    <meta name="keywords" content="Vinhos Micheletto Vinhos Louveira">
    <meta name="robots" content=""> <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
    <title><?= $title; ?></title>
<!--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet"/>-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url("/theme/css/style.css"); ?>"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-winenav">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-black-50" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">

                <li id="lhome" class="nav-item">
                    <a onclick="addClass('lhome')" class="nav-link font-weight-bold" href="<?= url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item" id="lhistoria">
                    <a onclick="addClass('lhistoria')" class="nav-link font-weight-bold" href="<?= url("historia"); ?>">História</a>
                </li>

                <li  id="lprodutos" class="nav-item dropdown">
                    <a onclick="addClass('lprodutos')" class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= url("produtos/vinhos"); ?>" >Vinhos</a>
                        <a class="dropdown-item" href="<?= url("produtos/uvas"); ?>">Uvas</a>
                        <a class="dropdown-item" href="<?= url("produtos/mudasdeuvas"); ?>">Mudas de Uvas</a>
                        <a class="dropdown-item" href="<?= url("produtos/flores"); ?>">Flores</a>
                        <a class="dropdown-item" href="<?= url("produtos/emporio"); ?>">Empório</a>
                        <a class="dropdown-item" href="<?= url("produtos/cavalos"); ?>">Cavalos</a>
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>

                <li  id="lturismo" class="nav-item dropdown">
                    <a onclick="addClass('lturismo')" class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Turismo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Produtos</a>
                        <a class="dropdown-item" href="#">Vinhos</a>
                        <a class="dropdown-item" href="#">Uvas</a>
                        <a class="dropdown-item" href="#">Mudas de Uvas</a>
                        <a class="dropdown-item" href="#">Flores</a>
                        <a class="dropdown-item" href="#">Empório</a>
                        <a class="dropdown-item" href="#">Cavalos</a>
                        <!--                        <div class="dropdown-divider"></div>-->
                        <!--                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>

                <li id="lservicos" class="nav-item dropdown">
                    <a onclick="addClass('lservicos')"  class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Serviços
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Produtos</a>
                        <a class="dropdown-item" href="#">Vinhos</a>
                        <a class="dropdown-item" href="#">Uvas</a>
                        <a class="dropdown-item" href="#">Mudas de Uvas</a>
                        <a class="dropdown-item" href="#">Flores</a>
                        <a class="dropdown-item" href="#">Empório</a>
                        <a class="dropdown-item" href="#">Cavalos</a>
                        <!--                        <div class="dropdown-divider"></div>-->
                        <!--                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>

                <li id="leventos" class="nav-item dropdown">
                    <a onclick="addClass('leventos')"  class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Eventos
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Produtos</a>
                        <a class="dropdown-item" href="#">Vinhos</a>
                        <a class="dropdown-item" href="#">Uvas</a>
                        <a class="dropdown-item" href="#">Mudas de Uvas</a>
                        <a class="dropdown-item" href="#">Flores</a>
                        <a class="dropdown-item" href="#">Empório</a>
                        <a class="dropdown-item" href="#">Cavalos</a>
                        <!--                        <div class="dropdown-divider"></div>-->
                        <!--                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>

                <li id="lcuriosidades" class="nav-item">
                    <a onclick="addClass('lcuriosidades')" class="font-weight-bold nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Curiosidades</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Header -->
    <div class="bg-header">
        <div class="container text-center">
            <img class="img-fluid mx-auto"  src="<?= url("theme/img/Micheletto%20logo.png"); ?>" alt="Micheletto Logo">
        </div>
        <div class="text-center pb-2">
           <img class="setinha img-fluid" src=" <?= url("theme/img/Setinha.png"); ?> " alt="Vinhos Louveira">
        </div>
    </div>

    <!-- main_content -->
    <main class="">
        <?= $v->section("content");?>
    </main>


<!--    <div> -->
<!--        <a class="whats whats-show" target="_blank" href="https://api.whatsapp.com/send?phone=+5511930113992&amp;text=Hi,>-->
<!--            <i class="fab fa-whatsapp-square fa-4x "></i>-->
<!--        </a>-->
<!--    </div>      -->

    <footer id="footer" class="bg-winenav">
        <div class="container-flex  pt-2 pb-2">
            <div class="row ml-0 mr-0 text-center">
                <div class="col-3">
                    <img class="img-fluid" src="<?= url("theme/img/footer/associação%202.png"); ?>" alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
                </div>
                <div class="col-3">          
  
                    <img class="img-fluid" style="margin-top:5px;" src="<?= url("theme/img/footer/location.png"); ?>" alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">

                </div>
                <div class="col-3">
                    <img class="img-fluid" src="<?= url("theme/img/footer/associação%202.png"); ?>" alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="<?= url("theme/img/footer/associação%202.png"); ?>" alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
                </div>
            </div>
        </div>
        <div class="text-center bg-wine pt-1 pb-1">
            <p class="mb-0" >Wofous!</p>
        </div>
    </footer>

    <script src="<?= url("/theme/js/jquery.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/popper.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/bootstrap.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/all.min.js"); ?>"></script> <!-- Font Awesome -->
    <script src="<?= url("/theme/js/main.js"); ?>"></script>
</body>
</html>
