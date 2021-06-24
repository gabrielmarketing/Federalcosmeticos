@extends('site.layout.app')
@section('content')

    <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url({{asset("images/vantagens.jpg")}}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-5 mb-6">
                    <h5 class="text-primary font-weight-bold mb-1"></h5>
                    <h4 class="font-weight-bold text-12 line-height-2 mb-3">Perfumes com inspirações importadas!</h4>
                    <p class="custom-font-size-1">Os melhores perfumes com inspirações de grandes perfumes importados, pra quem gosta de destacar sua personalidade através de fragrâncias únicas e duradouras.<a href="#intro" data-hash data-hash-offset="120" class="text-color-light font-weight-semibold text-1 d-block text-decoration-none">Receba até 100%<i class="fa fa-long-arrow-alt-right ms-1"></i></a></p>

                    <a class="d-none video-open lightbox d-block text-color-light text-decoration-none" href="https://www.youtube.com/watch?v=Utlevah0WEg" data-trigger-play-video="#popupPresentation"><div class="video-open-icon"></div></a>

                </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
                        <video id="presentation" class="float-start" width="100%" height="100%" muted playsinline loop preload="metadata" poster="{{asset("images/thumbnails.png")}}" data-auto-play="true">
                            <source src="{{asset("images/apresentacaocosmeticos.mp4")}}" type="video/mp4">
                            <source src="{{asset("images/apresentacaocosmeticos.mp4")}}" type="video/mp4">
                        </video>
                        <a href="#" class="position-absolute top-50pct left-50pct transform3dxy-n50 bg-light rounded-circle d-flex align-items-center justify-content-center text-decoration-none bg-color-hover-primary text-color-hover-light play-button-lg pulseAnim pulseAnimAnimated" data-trigger-play-video="#presentation" data-trigger-play-video-remove="yes">
                            <i class="fas fa-play text-5"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar position-relative py-4 pe-5 z-index-2">
                    <div>
                        <div class="star-rating-wrap d-flex align-items-center justify-content-center position-relative text-dark text-5 py-2 mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i>
                        </div>

                        <h4 class="position-relative text-center font-weight-bold text-7 line-height-2 mb-0">Os melhores perfumes</h4>

                        <p class="position-relative text-center font-weight-normal mb-1">estão nos pequenos menores frascos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="section section-no-border section-angled bg-light pt-0 pb-5 m-0">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div>
        <div class="container pb-5" style="min-height: 1000px;">
            <div class="row mb-5 pb-lg-3 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0">Veja como se tornar<br>um Consultor da Federal Cosméticos</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">Um negócio forte, simples e <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">muito lucrativo!</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5">Na Federal Cosméticos, existem muitas formas de mudar de vida. Descubra os caminhos para poder alcançar todos os seus sonhos.</p>
                </div>
                <div class="col-sm-6 col-lg-4 offset-lg-2 counter mb-5 mb-md-0">
                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
                        <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="180" data-append="+" data-plugin-options="{'accY': 50}">0</h3>
                        <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">CONSULTORES</label>
                        <p class="text-color-grey font-weight-semibold pb-1 mb-2">Ao se tornar um(a) Consultor(a), você poderá oferecer a seus clientes todo nosso portfólio, que conta com mais de 40 perfumes.</p>
                        <p class="mb-0"><a href="https://api.whatsapp.com/send/?phone=556233535679&text&app_absent=0" data-hash data-hash-offset="120" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none">SABER MAIS<i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 counter divider-left-border">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
                        <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="3" data-append="+" data-plugin-options="{'accY': 50}">0</h3>
                        <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">FRANQUIAS</label>
                        <p class="text-color-grey font-weight-semibold pb-1 mb-2">Nossos(as) Consultores(as) contam com um local para experimentar e adquirir seus produtos, fazer suas reuniões e treinamentos.</p>
                        <p class="mb-0"><a href="https://api.whatsapp.com/send/?phone=556233535679&text&app_absent=0" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none" target="_blank">SABER MAIS<i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="intro row align-items-center justify-content-center justify-content-md-start">
                <div class="col-3 pe-0 ps-3 position-relative z-index-2">
                    {{--<img src="{{asset("images/produtos/13.png")}}" data-src="{{asset("images/produtos/13.png")}}" class="lazyload img-fluid  rounded d-none d-md-block appear-animation" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                    <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
                        --}}{{--<span class="arrow hlt" style="margin-right: -70px;"></span>
                        <strong class="text-color-dark mb-4 pb-3"></strong>--}}{{--
                    </div>--}}
                </div>
                <div class="col-11 col-md-9 position-relative ps-0 pe-5 pb-5 pb-md-0 mb-5 mb-md-0">
                    <div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pe-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="{{asset("images/perfumesgeral.png")}}" data-src="{{asset("images/perfumesgeral.png")}}" class="lazyload img-fluid position-relative z-index-1 rounded" alt="Screenshot 1" style="left: -110px;"></div>
                    <div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
                        {{--<img src="{{asset("porto/img/lazy.png")}}" data-src="{{asset("porto/img/landing/intro3.jpg")}}" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded" alt="Screenshot 3">
                        <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px;">
                            <strong class="text-color-dark mb-3">a lot of demos!</strong>
                            <span class="arrow hru"></span>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border pb-0 m-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4">
                    <h2 class="text-7 font-weight-semibold line-height-2 mb-2">CONSTRUA SEU PRÓPRIO NEGÓCIO</h2>
                    <p>Seja um revendedor da Federal Cosméticos e construa seu próprio negócio vendendo os produtos de altíssima qualidade de
                        nossa empresa. Construa uma cartela de clientes fiéis e lucre até 100% sobre o valor das linhas de produtos com alta procura no mercado!</p>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <img width="140"  height="100" src="{{asset("images/bag.png")}}">
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Consumir com<br>50% de Desconto</h4>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <img width="140"  height="100" src="{{asset("images/lucro100.png")}}">
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Lucro de<br> até 100%</h4>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <img width="140"  height="100" src="{{asset("images/invoice.png")}}">
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Construa<br> uma Rede</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
        <div class="container py-5 my-5">
            <div class="row align-items-center text-center my-5">
                <div class="col-sm-12">
                    <hr class="my-5">
                    <h2 class="font-weight-bold text-center text-10 pt-3 mb-4">REVENDA NOSSOS PERFUMES E GANHE ATÉ 100% OU MAIS!</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Venda Perfumes</h2>
                    <p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">no conforto da sua conta</p>
                    <p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Seja um revendedor da Federal Cosméticos e construa seu próprio negócio vendendo os produtos de altíssima qualidade de nossa empresa. Construa uma cartela de clientes fiéis e lucre até 100% sobre o valor das linhas de produtos com alta procura no mercado!</p>
                    <a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="_blank">COMPRAR</a>
                    <p class="appear-animation text-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200"><strong class="text-dark"></strong></p>
                </div>
                <div class="col-md-6 position-relative py-5">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <img class="lazyload" src="{{asset("porto/img/lazy.png")}}" data-src="{{asset("porto/img/landing/porto_dots2.png")}}" alt="" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                        <div class="strong-shadow rounded strong-shadow-top-right">
                            <img src="{{asset("images/thumbnails.png")}}" data-src="{{asset("images/thumbnails.png")}}" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section border-0 section-dark section-angled section-angled-reverse section-funnel m-0 position-relative overflow-visible lazyload" style="background-image: url({{asset("porto/img/lazy.png")}}); background-size: 100%; background-position: top; background-repeat: no-repeat;" data-bg-src="{{asset("porto/img/landing/porto_performance_bg.png")}}">
        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #22252a;"></div>
        <svg version="1.1" viewBox="500 200 600 900" width="1920" height="100%" xmlns="http://www.w3.org/2000/svg" class="background-svg-style-1" style="top: 120px;" data-appear-animation-svg="true">
            <defs>
                <filter id="shadow" x="-300%" y="-300%" width="600%" height="600%">
                    <feDropShadow dx="0" dy="0" stdDeviation="10 10" flood-color="#08c" radius="10" flood-opacity="1" />
                </filter>
            </defs>
            <path id="svg_17" d="m1644.875212,897.875106l-1684.875221,-0.374889l1.25,-446.250108c-1.25,0.372765 496.124925,24.124892 496.124925,24.124892c0,0 255.000064,-106.250026 253.875257,-106.624912c1.124807,0.374885 129.874839,-2.125116 128.750031,-2.500001c1.124808,0.374885 112.374836,-32.125123 111.250027,-32.500008c1.124809,0.374885 144.874844,21.62489 144.874844,21.62489c0,0 128.750032,-73.750018 127.625222,-74.124903c1.124811,0.374884 133.624844,9.124887 133.624844,9.124887c0,0 108.750027,35.000009 108.750027,35.000009c0,0 178.750045,-125.000031 177.625231,-125.374915" opacity="0.5" stroke-opacity="null" stroke-width="0" stroke="#191b1e" fill="#191b1e" fill-opacity="0.4"/>
            <path id="svg_6" d="m1663.83437,909.61168l-1704.94553,-0.72172l1.11111,-486.66724l648.88966,30.00004l105.55568,-41.11116l126.66682,1.11111l122.22236,-34.44449l126.66682,14.44447c0.49906,0.72171 126.05477,-64.83392 126.05477,-64.83392c0,0 128.88904,4.44445 128.38998,3.72273c0.49906,0.72172 118.27698,28.49953 118.27698,28.49953c0,0 173.33353,-108.88902 172.83447,-109.61073" stroke-opacity="null" stroke-width="0" stroke="#1a1b1f" fill="#1a1b1f" fill-opacity="0.4"/>
            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" stroke="#000" ry="3.5" rx="3.5" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 101.5% 50.4%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500" stroke="#000" ry="3.5" rx="3.5" id="svg_10" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 119.2% 45.7%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" stroke="#000" ry="3.5" rx="3.5" id="svg_11" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 140.1% 45.7%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" stroke="#000" ry="3.5" rx="3.5" id="svg_12" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 160.7% 42%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1250" stroke="#000" ry="3.5" rx="3.5" id="svg_13" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 181.6% 43.5%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500" stroke="#000" ry="3.5" rx="3.5" id="svg_14" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 202.8% 36.4%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1750" stroke="#000" ry="3.5" rx="3.5" id="svg_15" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 224.3% 36.9%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2000" stroke="#000" ry="3.5" rx="3.5" id="svg_16" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 243.8% 39.8%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2250" stroke="#000" ry="3.5" rx="3.5" id="svg_7" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 264.6% 30.9%;" />

            </g>
        </svg>
        <img class="img-fluid position-absolute d-none d-lg-block lazyload appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750" src="{{asset("porto/img/lazy.png")}}" data-src="{{asset("porto/img/landing/porto_notebook.png")}}" alt="Performance on Laptop" style="display: block; top: -170px; left: 90px;">
        <div class="container text-center py-5 mb-5">
            <div class="row justify-content-center pb-md-5 mb-md-5">
                <div class="col-md-7 offset-lg-5 pb-md-5 mb-md-5">
                    <h2 class="font-weight-bold text-9 appear-animation mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Top Performance</h2>
                    <p class="custom-text-color-1 color-inherit mb-4 pb-lg-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto has high performance base, all structure are focusing on performance as main point. Porto speed optimization is super fast compared to other templates.</p>
                </div>
            </div>
            <div class="row align-items-center pb-md-5 mb-md-5">
                <div class="col-12 col-md-7 text-center mt-5">
                    <h2 class="font-weight-bold text-7 text-md-6 text-lg-9 pt-5 pt-md-4 mt-5 mb-lg-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Works Perfectly on <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-bold"> Any </span> Device!</h2>
                    <p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">We believe you will face lots of traffic from mobile device users not only from desktop or laptop users. Porto is the best solution for you, works fine on any screen resolutions and mobile devices. Try Porto and see how it works!</p>
                </div>
                <div class="col-5 d-none d-md-block">
                    <div class="text-end me-3 me-lg-5 ms-auto mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="max-width: 244px;" data-plugin-options="{'accY': -100}">
                        <img class="img-fluid lazyload" src="{{asset("porto/img/lazy.png")}}" data-src="{{asset("porto/img/landing/porto_iphone.png")}}" width="244" height="228" alt="Performance on Mobile">
                    </div>
                    <img class="img-fluid appear-animation z-index-1 position-relative lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" data-appear-animation-duration="750" src="{{asset("porto/img/lazy.png")}}" data-src="{{asset("porto/img/landing/porto_ipad.png")}}" width="437" height="241" alt="Performance on Tablet" style="margin-bottom: -10%">
                </div>
            </div>
        </div>
        <div class="section-funnel-layer-bottom">
            <div class="section-funnel-layer bg-color-light-scale-1"></div>
            <div class="section-funnel-layer bg-color-light-scale-1"></div>
        </div>
    </section>

    <section class="section section-funnel position-relative border-0 pt-0 m-0">
        <div class="container pb-5 mb-5">
            <h5 class="fotn-weight-extra-bold mb-1 text-center">
                <b class="text-13 d-block line-height-1 font-weight-extra-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">Avaliações De Consultores</b>
            </h5>
            <p class="font-weight-bold text-4 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">O QUE ELES DISSERAM</p>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850">
                <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">ULTIMAS AVALIAÇÕES</h5>

                <div class="owl-carousel carousel-center-active-item-2 nav-style-4 mb-4 pb-3" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">Davidiel</h4>
                                <span class="opacity-7"></span>
                            </div>
                            <span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
                        </div>
                        <p class="mb-0">"Um empresa que preza com muito carinho pelo seus executivos, e os produtos são de excelente qualidade. A cada dia aprendo mais. Estou
                            amando tudo. Federal Cosméticos a melhor empresa do mundo."</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">Denise Souza</h4>
                                <span class="opacity-7"></span>
                            </div>
                            <span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
                        </div>
                        <p class="mb-0">"Empresa sensacional, produtos de qualidade e ótimos preços"</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">Jessica Soares Da Silva</h4>
                                <span class="opacity-7"></span>
                            </div>
                            <span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
                        </div>
                        <p class="mb-0">"Produtos super acessíveis de Excelente qualidade!!!"</p>
                    </div>
                </div>
            </div>
            <p class="text-center mb-5"><a class="btn btn-dark btn-modern btn-rounded btn-px-5 btn-py-3 text-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" data-appear-animation-duration="600" href="https://api.whatsapp.com/send/?phone=556233535679&text&app_absent=0" target="_blank">FALAR COM UM CONSULTOR</a></p>
        </div>
        <div class="section-funnel-layer-bottom">
            <div class="section-funnel-layer bg-light"></div>
            <div class="section-funnel-layer bg-light"></div>
        </div>
    </section>

    <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
        <div class="container pb-5 mb-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                    <h2 class="font-weight-bold text-9 mb-1">SE SEMPRE SOUNHOU EM TER O SEU NEGÓCIO PRÓPRIO?</h2>
                    <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">GANHAR MAIS DINHEIRO, E AINDA TER UMA EQUIPE?</h5>
                    <p class="ls-0 text-default fw-400 mb-5">Aqui na Federal Cosméticos você poder ter tudo isso!</p>
                    <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0"><b class="text-color-dark">Fixação de até 7 horas -</b> Para pessoas que gosta de andar sempre cheirosa</p>
                    </div>
                    <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0 "><b class="text-color-dark">+40 Frangrâncias -</b> com inspirações de grandes marcas</p>
                    </div>
                    <div class="d-flex align-items-center pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0"><b class="text-color-dark">Lucro de até -</b> 100% em vendas.</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2 position-relative">
                    <img alt="Parfum Amdeirado" src="{{asset("images/produtos/1.png")}}" data-src="{{asset("images/produtos/1.png")}}" class="img-fluid border border-width-10 border-color-light rounded lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 290px; max-width: none;">
                    <img alt="Parfum " src="{{asset("images/banner2.png")}}" data-src="{{asset("images/banner2.png")}}" class="img-fluid lazyload rounded  position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
                </div>
            </div>
        </div>
    </section>
@endsection
