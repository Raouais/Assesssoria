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
        <div class="centered text-center text-bold">
            <h1>ADMINISTRACÃO FINACEIRA</h1>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../img/pexels-daniel-dan-7624066 (1).jpg" class="d-block w-100" alt="...">
        <div class="centered text-center">
            <h1>ASSESSORIA CONTABIL</h1>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../img/pexels-anna-nekrashevich-6801648.jpg" class="d-block w-100" alt="...">
        <div class="centered text-center">
            <h1>ASSESSORIA FISCAL</h1>
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
    <div class="white_divider"></div>
    <h1 class="text-center text-primary"> Serviços 

    <?php if(isset($session->username)):?>
        <a class="btn btn-primary" href="index.php?p=add_service">Adicionar</a>
    <?php endif;?>
    </h1>

    <?php
        $dao->setTable("category");
        $categories = $dao->all();
        $dao->setTable("services");
        $count = 1;
    ?>

    <div class="container">
        <div class="row" style="margin-top: 20px;">
        <?php foreach($categories as $c):?>
            <div class="col-md-5 bg-dark shadow  rounded">
                <h3 class=" text-light  text-center"> <?= $c->name; ?></h3>
                <ul>
                <?php
                    $services = $dao->findAll($c->id,"category_id"); 
                    foreach($services as $s):
                ?>
                    <li >
                            <?= $s->name;?> 
                            <?php if(isset($session->username)):?>
                                <a class="btn btn-primary" href="index.php?p=edit_service&id=<?=$s->id;?>">Editar</a>
                                <a class="btn btn-danger" href="index.php?p=del_service&id=<?=$s->id;?>">Suprimir</a> 
                            <?php endif;?>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
            <?php $count++; if($count % 2 === 0):?> 
                <div class="col-md-2 d-flex justify-content-center "><div class="services_separation "></div></div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</section>

<section id="certificate">
    <div class="certificate_logo">
        <div class="white_divider"></div>
        <h1 class="text-center text-primary"> Certificado Digital </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="certificate_benefits">
                        <ul>
                            <li>
                               <h3>
                                   <img src="../img/Logo_Fundo_Branco2_prev_ui.png" alt="" width="50" height="40">
                                   Compre online, sem sair de casa
                                </h3>
                            </li>
                            <li>
                               <h3>
                                   <img src="../img/Logo_Fundo_Branco2_prev_ui.png" alt="" width="50" height="40">
                                   O melhor preço
                                </h3>
                            </li>
                            <li>
                               <h3>
                                   <img src="../img/Logo_Fundo_Branco2_prev_ui.png" alt="" width="50" height="40">
                                   Rapidez na emissão
                                </h3>
                            </li>
                            <li>
                               <h3>
                                   <img src="../img/Logo_Fundo_Branco2_prev_ui.png" alt="" width="50" height="40">
                                   Nos vamos até você
                                </h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="certificate_contact">
                        <h3>
                            <img src="../img/whatsApp_prev_ui.png" alt="" width="50" height="50">
                            <a href="https://wa.me/005562992769989">(62) 99276-9989</a> 
                        </h3>
                        <h3>
                            <img src="../img/arobase_blue.png" alt="" width="50" height="50">
                            <a href = "mailto: dinamicacontabildg@hotmail.com">dinamicacontabildg@hotmail.com</a>
                        </h3>
                    </div>
                </div>
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
            <li>GOIAS PEDRAS</li>
            <li>NEW RODAS</li>
            <li>SPORT LIFE</li>
            <li>NEW YORK</li>
            <li>CYCLONE EMBALAGEMS</li>
            <li>SPORT LIFE</li>
            <li>MOTOCICLO</li>
            <li>FAM TRANSPORTES</li>
            <li>TITANIUM PRO ACADEMIA</li>
        </ul>
    </div>
</section>
