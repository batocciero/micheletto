<?php $v->layout("_theme");?>

<div id="home">
  <div class="separator"></div>
  <div class="title">
    <div class="container p-0">
      <div class="row mx-0 justify-content-center title">
        <div class="d-none d-lg-block col-2 p-0 m-0 text-right line"></div>
        <p class="p-0 m-0 text-center title-text-home h3 font-weight-bold align-items-center mb-2">Vinhos & Vinhedos</p>
        <div class="d-none d-lg-block col-2 p-0 m-0 text-left line"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-md-5 ml-auto mr-auto mt-md-3">
    
    <!-- Pop Up com imagem -->
    <!-- <div id="modal-addon"">
      <div class="modalconent d-grid bg-header text-center">
        <div class="txt-addon mx-4 text-justify" >Como de costume a Vinícola Micheletto estará fechada nesta Sexta-Feira Santa. 
        Convidamos nossos colaboradores, fornecedores, clientes e amigos a uma reflexão nesse tempo de tantas incertezas... 
        Mantendo as restrições de acesso e os procedimentos de higiene nosso Empório reabrirá no Sábado das 8h às 18h e Domingo 
        das 8h às 14h. Brindemos a Páscoa com Vinhos Micheletto!!!</div>
        <img class="img-addons mr-auto ml-auto mt-2 mb-2" src=" PATH TO IMAGE " alt="Estamos fechados para final de ano.">
        <button type="button" class="btn btn-margins btn-wine mt-2" id="button-addon">Fechar</button>
      </div>
    </div> -->

    <!-- Pop Up apenas textos -->
    <div id="modal-addon">
      <div class="modalconent d-grid">
        <div class="container-text-addon">
          <p class="title-addon">
            Em função da nova fase vermelha. 
          </p>
          <p class="sub-tittle-addon">
            Fiquem atentos às funcionalidade dos <strong>serviços</strong>:
          </p>
          <ul class="ml-3">
            <li><strong>Área de alimentação: <br> <strong>fechado</strong>.</strong></li>
            <li><strong>Propriedade Rual e Loja da vinícola: <br> <strong>Funcionando normalmente com controle de acesso e medidas de segurança.</strong></strong></li>
          </ul>
        </div>
        <button type="button" class="btn btn-wine mt-2" id="button-addon">Fechar</button>
      </div>
    </div>
    <!-- End. Pop Up apenas textos -->

    <div class="row mx-0 px-md-5 text-center">
      <div class="col-6 col-lg-3 col-md-6 pt-4 pr-2 pl-0 mx-0">
        <img class="img-fluid w-100" src="<?= url("theme/img/home/home-img1.png"); ?>"
        alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
      </div>
      <div class="col-6 col-lg-3 col-md-6 pt-4 pl-2 pr-0 pr-lg-2 mx-0">
        <img class="img-fluid w-100" src="<?= url("theme/img/home/home-img2.png"); ?>"
        alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
      </div>
      <div class="col-6 col-lg-3 col-md-6 pt-4 pr-2 pl-0 pl-lg-2 mx-0">
        <img class="img-fluid w-100" src="<?= url("theme/img/home/home-img3.png"); ?>"
        alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
      </div>
      <div class="col-6 col-lg-3 col-md-6 pt-4 pl-2 pr-0 mx-0">
        <img class="img-fluid w-100" src="<?= url("theme/img/home/home-img4.png"); ?>"
        alt="Vinhos Micheletto Contato e Endereço Vinhos Louveira">
      </div>
    </div>
  </div>
  <div class="separator mb-5"></div>
</div>
