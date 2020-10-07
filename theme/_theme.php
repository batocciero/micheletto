<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Vinhos Louveira">
    <meta name="keywords" content="Vinhos Micheletto Vinhos Louveira">
    <meta name="robots" content=""> <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
    <title><?= $title; ?></title>

<!--    <link rel="icon" href="--><?//= url("/theme/img/Logo_Fav.svg.png"); ?><!--" />-->
<!--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet"/>-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url("/theme/css/style.css"); ?>"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg z-index bg-body navbar-dark text-center shadow-outside">
        <a class="navbar-brand d-block" href="<?= url(); ?>"><strong>TUON Marcenaria</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= url(); ?>">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= url("projetos"); ?>">Projetos Recentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= url("sobre"); ?>">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= url("contato"); ?>">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>
    

<!--    <div> -->
<!--        <a class="whats whats-show" target="_blank" href="https://api.whatsapp.com/send?phone=+5511930113992&amp;text=Hi, Olá vim do site tuonmarcenaria.com.br">-->
<!--            <i class="fab fa-whatsapp-square fa-4x "></i>-->
<!--        </a>-->
<!--    </div>      -->

    <footer >
        <h3>Testando footer</h3>
    </footer>
    <script src="<?= url("/theme/js/jquery.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/popper.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/bootstrap.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/all.min.js"); ?>"></script>
    <script src="<?= url("/theme/js/main.js"); ?>"></script>
</body>
</html>
