<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memórias no Papel</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!--LINKS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    

    <!-- CSS BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="estilo/estilo.css">

    <!--SCRIPTS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    <!-- TOPO -->
    <?php
        require_once('header.php');
    ?>
    <!------------------------>

    <div class="container">
        <main>
            <!---- Swiper ---->
            <section>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/banner-p.png" class="img-fluid" alt="Fotos no formato Polaroid"></div>
                        <div class="swiper-slide"><img src="img/banner-2.png" class="img-fluid" alt="Fotos no formato Polaroid"></div>
                        <div class="swiper-slide"><img src="img/banner-3.png" class="img-fluid" alt="Fotos no formato Polaroid"></div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
            <!------------------------>

            <!------COMO FUNCIONA-------->
            <section class="como-funciona bg-secundary p-4">
                <h1 class="text-center text-white p-1">COMO FUNCIONA?</h1>
                <p class="text-center text-white">O Memórias no Papel é um clube de assinatura de revelação de fotografias, onde as fotos podem ser reveladas a partir das suas redes sociais Facebook e Instagram ou você pode fazer o upload diretamente do seu celular ou computador. Após efetivar sua assinatura, você receberá as fotos no conforto da sua casa todo mês.</p>
                <div class="container">
                    <div class="row p-3 align-items-center justify-content-center">
                        <div class="col">
                            <div class="d-flex justify-content-center ">
                                <i class='bx bxl-facebook-circle fs-1 text-white p-2'></i></a>
                                <i class='bx bxl-instagram fs-1 text-white p-2'></i></a>
                                <i class='bx bxs-image-add fs-1 text-white p-2'></i>
                            </div>
                            <p class="text-center text-white text-icons">SINCRONIZE SUAS FOTOS</p>
                        </div>                        
                        <div class="col">
                            <div class="d-flex align-items-end justify-content-center">
                                <i class='bx bx-checkbox fs-1 text-white' ></i>
                                <i class='bx bx-checkbox-checked fs-1 text-white' ></i>
                                <i class='bx bxs-pointer fs-3 text-white' ></i>
                            </div>
                            <p class="text-center text-white text-icons">ESCOLHA AS QUE QUER REVELAR</p>
                        </div>                        
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <i class='bx bx-mail-send fs-1 text-white'></i>
                                <i class='bx bx-home fs-1 text-white'></i>
                            </div>
                            <p class="text-center text-white text-icons">RECEBA EM CASA</p>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------------>

            <!---------PLANOS--------------->
            <section class="planos-home text-center p-4">
                <h1>ESCOLHA SEU PLANO</h1>
                <div class="container">
                    <div class="row p-5">
                        <div class="col fundo-plano-home m-3">
                            <h2 class="bg-secundary text-white">PLANO 1</h2>
                            <p class="plano-home-qtd-fotos">QTD DE FOTOS: 12</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-secundary text-white m-2">MENSAL</button>
                                <button type="button" class="btn btn-secundary text-white m-2">ANUAL</button>
                            </div>
                            <p class="plano-home-valor">R$ 14,99</p>
                            <p class="plano-home-tx-entrega">+ TAXA DE ENTREGA</p>
                            <button type="button" class="btn btn-secundary text-white">ESCOLHER ESSE</button>
                        </div>

                        <div class="col fundo-plano-home m-3">
                            <h2 class="bg-primary text-white">PLANO 2</h2>
                            <p class="plano-home-qtd-fotos">QTD DE FOTOS: 24</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary text-white m-2">MENSAL</button>
                                <button type="button" class="btn btn-primary text-white m-2">ANUAL</button>
                            </div>
                            <p class="plano-home-valor">R$ 24,99</p>
                            <p class="plano-home-tx-entrega">+ TAXA DE ENTREGA</p>
                            <button type="button" class="btn btn-primary text-white">ESCOLHER ESSE</button>
                        </div>

                        <div class="col fundo-plano-home m-3">
                            <h2 class="bg-warning text-white">PLANO 3</h2>
                            <p class="plano-home-qtd-fotos">QTD DE FOTOS: 36</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-warning text-white m-2">MENSAL</button>
                                <button type="button" class="btn btn-warning text-white m-2">ANUAL</button>
                            </div>
                            <p class="plano-home-valor">R$ 35,99</p>
                            <p class="plano-home-tx-entrega">+ TAXA DE ENTREGA</p>
                            <button type="button" class="btn btn-warning text-white">ESCOLHER ESSE</button>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------------>

            <!---------FAQ--------------->

            <section class="duvidas-home bg-primary text-white text-center p-4">
                <div class="container">
                    <div class="row">
                        <h1 class="p-4">DÚVIDAS FREQUENTES</h1>
                        
                        <div class="accordion " id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1 - O que é o Memórias no Papel? 
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                    O Memórias no Papel é um clube de assinatura de revelação de fotografias, onde as fotos podem ser reveladas a partir das suas redes sociais Facebook e Instagram ou você pode fazer o upload diretamente do seu celular ou computador. Após efetivar sua assinatura, você receberá as fotos no conforto da sua casa todo mês.
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2 - Como funciona?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3 - Qual a forma de pagamento?
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4 - Posso cancelar a qualquer momento?
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5 - Corro o risco de receber fotos repetidas?
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6 - Preciso ter uma conta no Instagram ou Facebook para fazer minha assinatura?
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7 - O que é o programa de desconto por indicação?
                                </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            
                        </div>       
                    </div>
                </div>
            </section>

            <!------------------------>

            <!---------CONTATO--------------->
            <section class="contato-home text-center p-4">
                <h1 class="p-4">CONTATO</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5 text-start p-3 color-contact-home">
                            <p class="align-text-top"><a href="https://wa.me/554334721917" target="_blank"><i class='bx bxl-whatsapp p-1' ></i> +55 (43) 3472-1917</a></p>
                            <p><i class='bx bx-envelope p-1' ></i>  contato@memoriasnopapel.com.br</p>
                            <p><i class='bx bxl-facebook-circle p-1' > </i> @memoriasnopapel</p>
                            <p class="align-text-top"><i class='bx bx-location-plus p-1' ></i>  Av. Souza Naves, 945 - Sala 13 <br> Centro | Ivaiporã | PR | CEP 86.870-000</p>
                            <p><a href="https://www.instagram.com/memoriasnopapell/" target="_blank"><i class='bx bxl-instagram p-1' ></i> @memoriasnopapell</a></p>
                        </div>
                        <div class="col">
                            <form action="">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" id="" placeholder="NOME">
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="E-MAIL">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="WHATSAPP">
                                    </div>
                                </div>        
                                <div class="mb-3">
                                <textarea class="form-control" name="" id=""  rows="5" placeholder="MENSAGEM"></textarea>
                                </div>             
                                <div class="col-12 justify-content-end">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>                                           
                            </form>
                        </div>
                    </div>
                </div>
            </section>


            <!------------------------>

            
        </main>
    </div>

    <!-----RODAPÉ ------->
    <?php
        require_once('footer.php');
    ?>
    <!------------------->


    <!-- BOX ICONS JS -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>

</body>

</html>