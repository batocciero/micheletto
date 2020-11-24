<?php $v->layout("../_theme");?>
<div id="vinhos">

    <div class="separator"></div>

    <div class="title">
        <div class="container p-0">
            <div class="row mx-0 justify-content-center title">
                <div class="d-none d-lg-block col-2 p-0 m-0 text-right line"></div>
                <p class="p-0 m-0 text-center title-text-home h3 font-weight-bold align-items-center mb-2">Vinhos</p>
                <div class="d-none d-lg-block col-2 p-0 m-0 text-left line"></div>
            </div>
        </div>
    </div>

    <div class="separator"></div>

    <div class="container text-center">
        <p class="text-justify d-none d-md-block">
            Durante um longo período a vinicultura brasileira se dedicou quase exclusivamente a elaboração dos
            tradicionais Vinhos de Mesa (ou Vinhos da Colônia), produtos elaborados a partir de variedades de uvas
            americanas (Vitis labruscas) ou híbridas, mais adaptadas ao solo e,principalmente, ao clima brasileiro...
            São produtos ainda hoje muito bem aceitos e consumidos, contando com apreciadores em todo o país...
            Com o passar do tempo foi provado o potencial de determinados terroirs brasileiros para produção de castas
            européias (Vitis viníferas)  com as quais vem se elaborando vinhos finos de excelente qualidade...
            Mais recentemente a tecnologia de inversão de poda da videira possibilitou a expansão do cultivo dessas
            uvas européias para regiões do Sudeste e do Centro Oeste onde estão sendo produzidos os surpreendentes
            Vinhos Finos de Colheita de Inverno!
        </p>

        <!-- Start Text with drop down -->
        <div class="m-0 p-0 text-justify mb-3 d-block d-md-none">
            Durante um longo período a vinicultura brasileira se dedicou quase exclusivamente a elaboração dos
            tradicionais Vinhos de Mesa (ou Vinhos da Colônia), produtos elaborados a partir de variedades de uvas
            americanas (Vitis labruscas) ou híbridas, mais adaptadas ao solo e,principalmente, ao clima brasileiro...
            <span class="btn btn-link collapsed text-wine m-0 p-0 mb-1" data-toggle="collapse" data-target="#Vinhos3" aria-expanded="false" aria-controls="#Vinhos3">
                <u><strong>continue lendo</strong></u>
            </span>
            <div id="Vinhos1">
                <div id="Vinhos3" class="collapse" aria-labelledby="Vinhos1" data-parent="#Vinhos1">
                    <div >
                        <p>
                            São produtos ainda hoje muito bem aceitos e consumidos, contando com apreciadores em todo o país...
                            Com o passar do tempo foi provado o potencial de determinados terroirs brasileiros para produção de castas
                            européias (Vitis viníferas)  com as quais vem se elaborando vinhos finos de excelente qualidade...
                            Mais recentemente a tecnologia de inversão de poda da videira possibilitou a expansão do cultivo dessas
                            uvas européias para regiões do Sudeste e do Centro Oeste onde estão sendo produzidos os surpreendentes
                            Vinhos Finos de Colheita de Inverno!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Text with drop down -->

        <div class="row d-none d-lg-flex">
            <div class="col">
                <img class="" src="<?= url("theme/img/produtos/vinhos/vinho-machine.png"); ?>" alt="Vinhos Micheletto">
            </div>
            <div class="col">
                <img class="" src="<?= url("theme/img/produtos/vinhos/vinho-lux.png"); ?>" alt="Vinhos Micheletto">
            </div>
            <div class="col">
                <img class="" src="<?= url("theme/img/produtos/vinhos/vinho-uvas.png"); ?>" alt="Vinhos Micheletto">
            </div>
        </div>

        <div class="row d-block d-lg-none">
            <div class="col">
                <img class="img-fluid mt-3" src="<?= url("theme/img/produtos/vinhos/vinho-machine.png"); ?>" alt="Vinhos Micheletto">
            </div>
            <div class="col">
                <img class="img-fluid mt-3" src="<?= url("theme/img/produtos/vinhos/vinho-uvas.png"); ?>" alt="Vinhos Micheletto">
            </div>
        </div>


        <p class="text-justify mt-5 mb-5">
            Não esquecendo a tradição, mas sempre atenta a inovação, a Vinícola Micheletto produz em suas quatro unidades
            diferentes variedades de uvas com as quais são elaborados vinhos de mesa e vinhos finos que buscam atender
            apreciadores de ambos os segmentos!
        </p>

    </div>

    <!-- Carrossel -->
    <div class="carouselvinho pt-4">
        <div class="title px-lg-5 mx-lg-5">
            <div class="row mx-0 px-5 justify-content-center title">
                <div class="d-none d-lg-block col-2 p-0 m-0 text-right line"></div>
                <p class="p-0 m-0 text-center title-text-home h3 font-weight-bold align-items-center mb-2">Vinhos de Mesa</p>
                <div class="d-none d-lg-block col-2 p-0 m-0 text-left line"></div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center pt-3 mb-4">
            <div class="col-12 col-lg-8">
                <p class="text-center h5">Numa abordagem mais artesanal e tradicional de se produzir vinhos com uvas americanas e híbridas, temos algumas opções desses vinhos festivos para o dia a dia</p>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide d-none d-xl-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active px-4">
                    <div class="row mx-0 px-5 my-5">
                        
                        <!-- TINTO SECO -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/tintoseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white mt-2 mb-0 h5 text-center">Tinto Seco</p>
                                <p class="text-white text-center descriptionvinho mb-2">Uvas Bordo e Isabel
                                    <br>
                                    Garrafa: 750ml
                                    <br>
                                    Garrafão: 4,6Lts
                                </p>
                            </div>
                        </div>
                        
                        <!-- TINTO SUAVE -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/tintosuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Tinto Suave</p>
                                <p class="text-white text-center descriptionvinho mb-2">Uvas Bordo e Isabel<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                            </div>
                        </div>

                        <!-- BRANCO SECO -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/brancoseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Branco Seco</p>
                                <p class="text-white text-center descriptionvinho mb-2">Uvas Niagara Branca<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                            </div>
                        </div>

                        <!-- BRANCO SUAVE -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/brancosuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Branco Suave</p>
                                <p class="text-white text-center descriptionvinho mb-2">Uvas Niagara Branca<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item px-4">
                    <div class="row mx-0 px-5 my-5">

                        <!-- Isabella Rose Seco -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/roseseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Isabella <br> Rosé Seco</p>
                                <p class="text-white text-center descriptionvinho mb-2">100% uva Isabel<br>Garrafa: 750ml</p>
                            </div>
                        </div>

                        <!-- Isabella Rose Suave -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/rosesuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Isabella <br> Rosé Suave</p>
                                <p class="text-white text-center descriptionvinho mb-2">100% uva Isabel<br>Garrafa: 750ml</p>
                            </div>
                        </div>

                        <!-- Tradizione Bordô Seco -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/tradseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 vinho-descicao">Tradizione Bordô Seco</p>
                                <p class="text-white text-center descriptionvinho mb-2">100% uva Bordô<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                            </div>
                        </div>

                        <!-- Tradizione Bordô Suave -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/tradsuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 vinho-descicao">Tradizione Bordô Suave</p>
                                <p class="text-white text-center descriptionvinho mb-2">100% uva Bordô<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item px-4">
                    <div class="row mx-0 px-5 my-5">

                        <!-- Delicato Rose (produção limitada) -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/rosefino.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Delicato Rosé Suave</p>
                                <p class="text-white text-center descriptionvinho mb-2">Uvas Niagara Rosada<br>Garrafa: 750ml <br>produção limitada</p>
                            </div>
                        </div>

                       
                        <!-- Micheletto Moscatel Seco -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/moseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Micheletto Moscatel <br> Branco Seco</p>
                                <p class="text-white text-center descriptionvinho mb-2">Uva Lorena<br>Garrafa: 750ml</p>
                            </div>
                        </div>

                        <!-- Micheletto Moscatel Demi Sec -->
                        <div class="col-3 px-5">
                            <div class="vinho-card">
                                <img src="<?= url("theme/img/produtos/vinhos/carr/modemi.jpg"); ?>" class="vinhos-height w-100 " alt="">
                                <p class="text-white text-center mt-2 mb-0 h5">Micheletto Moscatel <br>Demi Sec </p>
                                <p class="text-white text-center descriptionvinho mb-2">Uva Lorena<br>Garrafa: 750ml</p>
                            </div>
                        </div>

                         <!-- CABE MAIS UM ITEM -->

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- MOBILE -->
        <!-- TINTO SECO MOBILE -->
        <div class="row mx-0 py-3 my-3 d-flex d-xl-none carouselmobile">
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/tintoseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Tinto Seco</p>
                    <p class="text-white text-center descriptionvinho mb-2">Uvas Bordo e Isabel<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                </div>
            </div>

            <!-- TINTO SUAVE MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/tintosuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Tinto Suave</p>
                    <p class="text-white text-center descriptionvinho mb-2">Uvas Bordo e Isabel<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                </div>
            </div>

            <!-- BRANCO SECO MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/brancoseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Branco Seco</p>
                    <p class="text-white text-center descriptionvinho mb-2">Uvas Niagara Branca<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                </div>
            </div>

            <!-- BRANCO SUAVE MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/brancosuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Branco Suave</p>
                    <p class="text-white text-center descriptionvinho mb-2">Uvas Niagara Branca<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                </div>
            </div>

            <!-- Isabella Rose Seco MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/roseseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Isabella <br> Rosé Seco</p>
                    <p class="text-white text-center descriptionvinho mb-2">100% uva Isabel<br>Garrafa: 750ml</p>
                </div>
            </div>

            <!-- Isabella Rose Seco MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/rosesuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Isabella <br> Rosé Suave</p>
                    <p class="text-white text-center descriptionvinho mb-2">100% uva Isabel<br>Garrafa: 750ml</p>
                </div>
            </div>

            <!-- Tradizione Bordô Seco MOBILE  -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/tradseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5 vinho-descicao">Tradizione Bordô Seco</p>
                    <p class="text-white text-center descriptionvinho mb-2">100% uva Bordô<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                </div>
            </div>

            <!-- Tradizione Bordô Seco MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
                <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/tradsuave.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5 vinho-descicao">Tradizione Bordô Suave</p>
                    <p class="text-white text-center descriptionvinho mb-2">100% uva Bordô<br>Garrafa: 750ml<br>Garrafão: 4,6Lts</p>
                </div>
            </div>



            <!-- Delicato Rose (produção limitada) -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
               <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/rosefino.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Delicato Rosé Suave</p>
                    <p class="text-white text-center descriptionvinho mb-2">Uvas Niagara Rosada<br>Garrafa: 750ml <br>produção limitada</p>
               </div>
           </div>

            <!-- Micheletto Moscatel Seco MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
               <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/moseco.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Micheletto Moscatel <br> Branco Seco</p>
                    <p class="text-white text-center descriptionvinho mb-2">Uva Lorena<br>Garrafa: 750ml</p>
               </div>
           </div>

            <!-- Micheletto Moscatel Demi Sec MOBILE -->
            <div class="col-6 col-md-4 col-lg-3 mx-0 px-2 pb-4">
               <div class="vinho-card">
                    <img src="<?= url("theme/img/produtos/vinhos/carr/modemi.jpg"); ?>" class="vinhos-height w-100 " alt="">
                    <p class="text-white text-center mt-2 mb-0 h5">Micheletto Moscatel <br>Demi Sec </p>
                    <p class="text-white text-center descriptionvinho mb-2">Uva Lorena<br>Garrafa: 750ml</p>
               </div>
           </div>

        </div>
    </div>
    <!-- FIM CARROSSEL -->

    <div class="separator"></div>

    <div class="title">
        <div class="container p-0">
            <div class="row mx-0 justify-content-center title">
                <div class="d-none d-lg-block col-2 p-0 m-0 text-right line"></div>
                <p class="p-0 m-0 text-center title-text-home h3 font-weight-bold align-items-center mb-2">Vinhos Finos</p>
                <div class="d-none d-lg-block col-2 p-0 m-0 text-left line"></div>
            </div>
        </div>
    </div>

    <div class="separator"></div>

    <div class="container text-center">

        <div class="d-none d-lg-block">
            <h5><strong>Permita-se conhecer o novo!</strong></h5>
            <p>
                Você irá se surpreender com esse promissor segmento da vitivinicultura nacional que busca a elaboração de
                vinhos finos em latitudes não convencionais através da adoção de uma tecnologia de inversão de poda (ou dupla poda)
                que nos permite a colheita das uvas no período de outono/inverno em regiões do sudeste e do centro oeste brasileiros.
            </p>

            <p>
                Em determinados solos e altitudes dessas regiões a inversão da poda permite a maturação dos frutos sob
                condições de clima seco e grande amplitude térmica diária, variáveis determinantes para que as uvas consigam
                expressar todo seu potencial enológico resultando em vinhos de qualidade superior... um verdadeiro marco na produção
                de vinhos no Brasil e no mundo!
            </p>

            <p>
                Nesse contexto a Vinícola Micheletto destaca toda potência aliada a irreverência dos seus syrahs já elaborados
                com uvas colhidas em um de seus Terroirs de Inverno, o Sítio Santa Rita localizado no município de Louveira/SP!
            </p>

            <p>
                Com a instalação dos novos vinhedos em breve apresentaremos novidades nesse segmento de Vinhos Finos com produtos
                oriundos de outras castas européias e também de novas áreas de syrah cultivadas em terrenos próximos, porém com altitudes
                e solos diferentes do que temos hoje no Sítio Santa Rita.
            </p>
        </div>

        <!-- Start Text with drop down -->
        <div class="m-0 p-0 text-justify mb-3 d-block d-lg-none">
            Você irá se surpreender com esse promissor segmento da vitivinicultura nacional que busca a elaboração de
            vinhos finos em latitudes não convencionais através da adoção de uma tecnologia de inversão de poda (ou dupla poda)
            que nos permite a colheita das uvas no período de outono/inverno em regiões do sudeste e do centro oeste brasileiros.
            <span class="btn btn-link collapsed text-wine m-0 p-0 mb-1" data-toggle="collapse" data-target="#Vinhos2" aria-expanded="false" aria-controls="#Vinhos2">
                <u><strong>continue lendo</strong></u>
            </span>
            <div id="Vinhos">
                <div id="Vinhos2" class="collapse" aria-labelledby="Vinhos" data-parent="#Vinhos">
                    <div >
                        <p>
                            Em determinados solos e altitudes dessas regiões a inversão da poda permite a maturação dos frutos sob
                            condições de clima seco e grande amplitude térmica diária, variáveis determinantes para que as uvas consigam
                            expressar todo seu potencial enológico resultando em vinhos de qualidade superior... um verdadeiro marco na produção
                            de vinhos no Brasil e no mundo!
                        </p>

                        <p>
                            Nesse contexto a Vinícola Micheletto destaca toda potência aliada a irreverência dos seus syrahs já elaborados
                            com uvas colhidas em um de seus Terroirs de Inverno, o Sítio Santa Rita localizado no município de Louveira/SP!
                        </p>

                        <p>
                            Com a instalação dos novos vinhedos em breve apresentaremos novidades nesse segmento de Vinhos Finos com produtos
                            oriundos de outras castas européias e também de novas áreas de syrah cultivadas em terrenos próximos, porém com altitudes
                            e solos diferentes do que temos hoje no Sítio Santa Rita.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Text with drop down -->
    </div>

    <div class="container text-center top-space-finos">

        <div class="row mb-5 align-items-center">
            <div class="col-lg-4 ">
                <img class="garrafa-fina mt-1" src="<?= url("theme/img/produtos/vinhos/finosyrah.png"); ?>" alt="Vinhos Micheletto">
            </div>
            <div class="col-lg-8 ">
                <div class="text-left ">
                    <p class="m-0 p-0 title-vinhos-finos mt-3 mt-lg-0 text-center text-lg-left">Micheletto Syrah Inverno 2018</p>
                    <p class="text-title font-weight-bolder text-center text-lg-left">Vinho fino tinto seco</p>
                    <p class="mt-0 p-0 font-weight-bolder">Ficha técnica</p>

                    <p class="m-0 p-0 finos-legenda"><strong>LOCALIZAÇÃO DO VINHEDO:</strong> Sítio Santa Rita, Louveira, São Paulo, Brasil.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>PRODUTORES RESPONSÁVEIS:</strong> Luiz Antônio dos Santos e Daniel Fernando Miqueletto .</p>
                    <p class="m-0 p-0 finos-legenda"><strong>IDADE DAS PLANTAS:</strong> 3 anos na ocasião da colheita.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>VARIEDADES DE UVAS:</strong> 100% Syrah.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>PORTA ENXERTO:</strong> 1103 Palsen.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>NÚMERO DE PLANTAS POR HECTARES:</strong> 3.333.</p>
                    <br>
                    <p class="m-0 p-0 finos-legenda"><strong>GRAU ALCOÓLICO:</strong> 13,8% Vol.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>pH:</strong> 3,92.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>ALTITUDE DO VINHEDO:</strong> 780 metros acima do nível do mar.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>CLIMA:</strong> Subtropical - inverno seco com grande amplitude térmica diária.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>IRRIGAÇÃO:</strong> Sem irrigação.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>SISTEMA DE CONDUÇÃO:</strong> Espaldeira alta.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>CONDUÇÃO E PODA:</strong> Cordão esporonado simples com dupla poda anual.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>PRODUTIVIDADE:</strong> 8.000kg por hectare.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>ÉPOCA DE COLHEITA:</strong> julho de 2018.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>VINIFICAÇÃO:</strong> Colheita manual com seleção e limpeza dos cachos
                        acondicionados em caixas plásticas perfuradas de 12Kg. Na vinícola ocorreu nova seleção de  cachos,
                        desengace e esmagamento. Maceração pré-fermentação em frio por três dias. Inoculação de leveduras.
                        Fermentação alcoólica com contato com a  casca por mais 10 dias à temperatura aproximada de 23 o C.
                        Fermentação malolática natural. Clarificação natural por decantação. Por fim o vinho foi filtrado e
                        envasado. Não houve passagem por barrica.
                    </p>
                    <p class="m-0 p-0 finos-legenda"><strong>TÉCNICO RESPONSÁVEL PELA ELABORAÇÃO DO VINHO:</strong> Daniel F Miqueletto.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>LOCAL DA VINIFICAÇÃO:</strong> Vinícola Micheletto – Louveira – São Paulo - Brasil.</p>
                </div>
            </div>
        </div>

        <div class="row final-space-finos align-items-center top-space-finos">

            <div class="col-lg-4  d-block d-lg-none ">
                <img class="garrafa-fina mt-1" src="<?= url("theme/img/produtos/vinhos/finorosa.png"); ?>" alt="Vinhos Micheletto">
            </div>

            <div class="col-lg-8 ">
                <div class="text-left">
                    <p class="m-0 p-0 title-vinhos-finos mt-3 mt-lg-0 text-center text-lg-left">Micheletto Rosas</p>
                    <p class="text-title font-weight-bolder text-center text-lg-left">Vinho fino rose seco</p>
                    <p class="mt-0 p-0 font-weight-bolder">Ficha técnica</p>

                    <p class="m-0 p-0 finos-legenda"><strong>LOCALIZAÇÃO DO VINHEDO:</strong> Sítio Santa Rita, Louveira, São Paulo, Brasil.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>PRODUTORES RESPONSÁVEIS:</strong> Luiz Antônio dos Santos e Daniel Fernando Miqueletto .</p>
                    <p class="m-0 p-0 finos-legenda"><strong>IDADE DAS PLANTAS:</strong> 5 anos na ocasião da colheita.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>VARIEDADES DE UVAS:</strong> 100% Syrah.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>PORTA ENXERTO:</strong> 1103 Palsen.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>NÚMERO DE PLANTAS POR HECTARES:</strong> 3.333.</p>
                    <br>
<!--                    <p class="m-0 p-0 finos-legenda"><strong>GRAU ALCOÓLICO:</strong> 13,8% Vol.</p>-->
<!--                    <p class="m-0 p-0 finos-legenda"><strong>pH:</strong> 3,92.</p>-->
                    <p class="m-0 p-0 finos-legenda"><strong>ALTITUDE DO VINHEDO:</strong> 780 metros acima do nível do mar.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>CLIMA:</strong> Subtropical - inverno seco com grande amplitude térmica diária.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>IRRIGAÇÃO:</strong> Sem irrigação.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>SISTEMA DE CONDUÇÃO:</strong> Espaldeira alta.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>CONDUÇÃO E PODA:</strong> Cordão esporonado simples com dupla poda anual.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>PRODUTIVIDADE:</strong> 6.000kg por hectare.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>ÉPOCA DE COLHEITA:</strong> Agosto de 2020 .</p>
<!--                    <p class="m-0 p-0 finos-legenda"><strong>VINIFICAÇÃO:</strong> Colheita manual com seleção e limpeza dos cachos-->
<!--                        acondicionados em caixas plásticas perfuradas de 12Kg. Na vinícola ocorreu nova seleção de  cachos,-->
<!--                        desengace e esmagamento. Maceração pré-fermentação em frio por três dias. Inoculação de leveduras.-->
<!--                        Fermentação alcoólica com contato com a  casca por mais 10 dias à temperatura aproximada de 23 o C.-->
<!--                        Fermentação malolática natural. Clarificação natural por decantação. Por fim o vinho foi filtrado e-->
<!--                        envasado. Não houve passagem por barrica.-->
<!--                    </p>-->
                    <p class="m-0 p-0 finos-legenda"><strong>TÉCNICO RESPONSÁVEL PELA ELABORAÇÃO DO VINHO:</strong> Isabela Peregrino.</p>
                    <p class="m-0 p-0 finos-legenda"><strong>LOCAL DA VINIFICAÇÃO:</strong> Vinícola Micheletto – Louveira – São Paulo - Brasil.</p>
                </div>
            </div>

            <div class="col-lg-4  d-none d-lg-flex ">
                <img class="garrafa-fina mt-1 mx-auto" src="<?= url("theme/img/produtos/vinhos/finorosa.png"); ?>" alt="Vinhos Micheletto">
            </div>
        </div>

    </div>
</div>
