<?php $v->layout("_theme"); ?>
<div id="quiosque">
    <div class="title">
        <div class="separator"></div>
        <div class="container p-0">
            <div class="row mx-0 justify-content-center title">
                <div class="d-none d-lg-block col-2 p-0 m-0 text-right line"></div>
                <p class="p-0 m-0 text-center title-text-home h3 font-weight-bold align-items-center mb-2">Quiosque</p>
                <div class="d-none d-lg-block col-2 p-0 m-0 text-left line"></div>
            </div>
        </div>
    </div>

    <div class="separator"></div>

    <div class="container">
        <p class="text-wine font-weight-bolder title-size m-0 ">
            QUIOSQUE MICHELETTO
        </p>
        <br>
        <p class="text-justify">
            Ao lado da Vinícola e em meio aos parreirais do Sítio Santa Rita você encontra o Quiosque Micheletto,
            ambiente aconchegante ideal para um bate papo entre amigos! Além dos vinhos o local também oferece outras
            bebidas e porções que podem ser degustados num mirante onde se visualiza o vale repleto de parreiras...
            <a target="_blank" class="font-weight-bold text-wine" href="<?= url("theme/download/CARDAPIO_MICHELETTO.pdf"); ?>" download>
                Confira nosso cardápio!
            </a>
            <br> <br>
            <strong>Horário de Funcionamento do Quiosque:</strong> sexta-feira das 17h às 22h, sábados das 10h às 22h
            e domingos: das 10h às 18h.
        </p>

        <div class="row mb-4">
            <div class="col-md-6">
                <img class="img-fluid" src="<?= url("theme/img/quiosque/q1.jpg"); ?>" alt="Vinhos Louveira">
            </div>
            <div class="col-md-6">
                <img class="img-fluid mt-3 mt-md-0" src="<?= url("theme/img/quiosque/q2.jpg"); ?>" alt="Vinhos Louveira">
            </div>
        </div>

        <div class="row final-space-finos">
            <div class="col-md-6">
                <img class="img-fluid" src="<?= url("theme/img/quiosque/q3.jpg"); ?>" alt="Vinhos Louveira">
            </div>
            <div class="col-md-6">
                <img class="img-fluid mt-3 mt-md-0" src="<?= url("theme/img/quiosque/q4.jpg"); ?>" alt="Vinhos Louveira">
            </div>
        </div>

    </div>
</div>