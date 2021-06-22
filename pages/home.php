<?php
    $dao->setTable("category");
    $category = $dao->all();
    $dao->setTable("services");
?>


<section id="intro">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../img/pexels-anna-nekrashevich-6801648.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../img/pexels-daniel-dan-7624066 (1).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../img/pexels-anna-nekrashevich-6801648.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>

<section id="services" class="bg-dark">
    <h2 class="text-center text-primary"> Serviços </h2>
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-5 bg-dark shadow  rounded">
                <h3 class=" text-light  text-center"> Serviços</h3>
                <ul>
                    <li>Nota fiscal</li>
                    <li>Pesquisa</li>
                </ul>
            </div>
            <div class="col-md-2 d-flex justify-content-center "><div class="services_separation "></div></div>
            <div class="col-md-5 bg-dark shadow  rounded">
                <h3 class=" text-light text-center"> Serviços</h3>
                <ul>
                    <li>Abertura MEI</li>
                    <li>Rescisão</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="certificate" class="bg-dark">
    <h2 class="text-center text-dark"> <u>Certificado</u> </h2>
    <div>
        <div class="row shadow">
            <div class="col-md-8 rounded-left">
                <img src="../img/Logo_Fundo_Branco2_prev_ui.png" alt="" srcset=""  class="img-fluid">
            </div>
            <div class="col-md-4 bg-primary rounded-right">
                <h3 class=" text-light text-center">Certificado digital </h3>
                <p class="text-light">Pessoa juridica</p>
                <p class="text-light">Pessoa fisica</p>
            </div>
        </div>
    </div>
</section>

<section id="companies">
    <div class="parallax">
        <p class="title">Eles <span class="text-primary">confiam</span> em nós
para a gestão de suas contas</p>
        <ul>
            <li>UNIRODAS</li>
            <li>GOIAS PEDRA</li>
            <li>NEW RODAS</li>
            <li>SPORT LIFE</li>
            <li>MOTOCICLO</li>
            <li>MOTOCICLO</li>
            <li>MOTOCICLO</li>
            <li>MOTOCICLO</li>
            <li>MOTOCICLO</li>
        </ul>
    </div>
</section>
