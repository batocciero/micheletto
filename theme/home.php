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
    <!-- <div id="modal-addon">
      <div class="modalconent d-grid">
          <img class="img-addons" src="PATH DA IMAGEM" alt="Estamos fechados para final de ano.">
          <button type="button" class="btn btn-wine mt-2" id="button-addon">Fechar</button>
      </div>
    </div> -->

    <!-- Pop Up apenas textos -->
    <div id="modal-addon">
      <div class="modalconent d-grid">
        <div class="container-text-addon">
          <p class="title-addon">
            Em função da pandemia. 
          </p>
          <p class="sub-tittle-addon">
            Estão suspensos, <strong>temporariamente</strong>, os serviços:
          </p>
          <ul class="ml-3">
            <li><strong>Passeio à Cavalo.</strong></li>
            <li><strong>Visitas Monitoradas.</strong></li>
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