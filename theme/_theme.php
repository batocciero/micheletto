<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Vinhos Louveira">
    <meta name="keywords" content="Vinhos Micheletto Vinhos Louveira">
    <meta name="robots" content=""> <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
    <title><?= $title; ?></title>
    <!--   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet"/>  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url("/theme/css/style.css"); ?>"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-winenav">
    <a class="navbar-brand d-block d-lg-none" style="font-weight: 500;" href="#">Vinhos Micheletto</a>
        <button 
            class="navbar-toggler ml-auto" 
            type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
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
                    <a onclick="addClass('lprodutos')" class="nav-link dropdown-toggle font-weight-bold " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="<?= url("produtos/vinhos"); ?>" >Vinhos</a>
                        <a class="dropdown-item" href="<?= url("produtos/uvas"); ?>">Uvas</a>
                        <a class="dropdown-item " href="<?= url("produtos/mudasdeuvas"); ?>">Mudas de Uvas</a>
                        <a class="dropdown-item " href="<?= url("produtos/flores"); ?>">Flores</a>
                        <a class="dropdown-item disabled" href="<?= url("produtos/emporio"); ?>">Empório</a>
                        <a class="dropdown-item " href="<?= url("produtos/cavalos"); ?>">Cavalos</a>
                        <!-- <div class="dropdown-divider"></div> -->
                    </div>
                </li>

                <li  id="lturismo" class="nav-item dropdown">
                    <a onclick="addClass('lturismo')" class="nav-link dropdown-toggle font-weight-bold " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Turismo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="<?= url("turismo/monitorado"); ?>" >Passeio Monitorado</a>
                        <a class="dropdown-item " href="<?= url("turismo/tecnico"); ?>" >Roteiros Técnicos</a>
                        <a class="dropdown-item" href="<?= url("turismo/pedagogico"); ?>" >Roteiros Pedagógicos</a>
                        <a class="dropdown-item " href="<?= url("turismo/melhoridade"); ?>">Roteiros Melhor Idade </a>
                    </div>
                </li>

                <li id="lservicos" class="nav-item ">
                    <a onclick="addClass('lservicos')" class="font-weight-bold nav-link " href="<?= url("servicos"); ?>" tabindex="-1" aria-disabled="true">Serviços</a>
                </li>

                <li id="leventos" class="nav-item">
                    <a onclick="addClass('leventos')" class="font-weight-bold nav-link " href="<?= url("eventos"); ?>" tabindex="-1" aria-disabled="true">Eventos</a>
                </li>

                <li id="lcuriosidades" class="nav-item ">
                    <a onclick="addClass('lcuriosidades')" class="font-weight-bold nav-link " href="<?= url("curiosidades"); ?>" tabindex="-1" aria-disabled="true">Curiosidades</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Header -->
    <div class="bg-header">
        <div class="container text-center">
            <div class="w-100 d-none d-lg-block">
                <img class="img-fluid w-100" src="<?= url("theme/img/header.jpg"); ?>" alt="Vinhos Louveira">
            </div>
            <div class="w-100 d-block d-lg-none">
                <img class="img-fluid w-100" src="<?= url("theme/img/headermobile.jpg"); ?>" alt="Vinhos Louveira">
            </div>
        </div>
        <div class="text-center divsetinha d-none d-lg-flex">
           <img class="setinha img-fluid" src=" <?= url("theme/img/Setinha.png"); ?> " alt="Vinhos Louveira">
        </div>
    </div>

    <!-- main_content -->
    <main class="">
        <?= $v->section("content");?>
    </main>
    
    <!-- What's App Button -->
    <div>
        <a
        class="whats whats-show"
        target="_blank"
        href="https://api.whatsapp.com/send?phone=+5519994615802&amp;text=Hi, Olá vim pelo site vinhosmicheletto.com.br">
        <i class="fab fa-whatsapp-square fa-3x "></i>
        <span class="fundo-branco whats whats-show "></span>
        </a>

<!--        <div class="bg-whats whats whats-show"></div>-->
    </div>   

    <footer id="footer" class="bg-winenav text-white">
        <div class="container-footer">
            <div class="footer1">
                <img 
                    src="<?= url("/theme/img/footer/first.png"); ?>" 
                    class="mt-2 img-fuid" alt="Vinhos Louveira">
            </div>   
            <div class="footer2">
                <img
                    style="transform:translateY(10px);" 
                    src="<?= url("/theme/img/footer/local.png"); ?>" 
                    class="img-fluid" alt="Vinhos Louveira">
                    Estrada Teresa Biseto Cestarolli, S/N
                    <div class="" style="margin-left: 33px; transform: translateY(-10px);">
                        Louveira, São Paulo.
                    </div>
            </div>   
            <div class="footer3">
                <img
                    style="transform:translateY(6px);"  
                    src="<?= url("/theme/img/footer/relogio.png"); ?>" 
                    class="mt-2 img-fuid" alt="Vinhos Louveira">
                    Segunda a Sábado das 8 às 18 horas.
                    <div  style="margin-left: 37px; transform: translateY(-10px);">
                        Domingo das 8 às 14 horas.
                    </div>
            </div>   
            <div class="footer4">
                <img
                    style="transform:translateY(10px);"  
                    src="<?= url("/theme/img/footer/telefone.png"); ?>" 
                    class="mt-2 img-fuid" alt="Vinhos Louveira">
                    vinhosmicheletto@outlook.com
                    <div style="margin-left: 45px; transform: translateY(-15px);">
                    (19) 99461-5802
                    </div>
            </div>   
            <div class="footer5">
                <i class="fab fa-2x fa-facebook-f"></i>
                <i class="ml-2 fab fa-2x fa-instagram"></i>
                <i class="ml-2 fab fa-2x fa-twitter"></i>
            </div>   
        </div>
        <div class="text-center bg-wine pt-1 pb-1">
            <a class="text-header" href="https://wofous.com">Vinhos Micheletto Powered by wofous</a>
        </div>
    </footer>

    <script src="<?= url("/theme/js/jquery.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/popper.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/bootstrap.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/all.min.js"); ?>"></script> <!-- Font Awesome -->
    <script src="<?= url("/theme/js/main.js"); ?>"></script>
</body>
</html>
