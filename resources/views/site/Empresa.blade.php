@extends("site.layout.app2")
@section("content")
    <div role="main" class="main">
        <div class="container pt-5">
            <div class="row py-4 mb-2">
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Quem Somos?</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Reunimos ideias, pessoas e sonhos em um só lugar.</p>
                    </div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"><a href="#"></a>Na Federal Cosméticos, existem muitas formas de mudar de vida. Descubra os caminhos para poder alcançar todos os seus sonhos.</p>
                    <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">A Federal Cosméticos acredita no potencial de cada pessoa como sendo único. Por isso, a empresa se destaca no mercado
                        de Marketing Multinível (MMN), justamente por apresentar um modelo de negócio que garante mais qualidade de vida a todos
                        os nossos consultores, fortalecendo o empreendedorismo social por meio de oportunidades únicas fornecidas pela empresa.

                        Nossa missão é ajudar o maior número de pessoas a mudarem de vida. Nossa visão é ser a empresa líder em transformação de
                        vidas no mercado global de vendas diretas. Nossos valores têm como base a ética, o respeito e a fé em Deus.
                    </p>
                </div>
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img width="700" height="350" src="{{asset("images/quemsomos.jpeg")}}" class="img-fluid mb-2" alt="">
                </div>
            </div>
            <div class="row-md-12">
                <div class="row mt-3 mb-5">
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">SEJA UM CONSULTOR (a)</h3>
                        <p>
                            Ao se tornar um(a) Consultor(a), você poderá oferecer a seus clientes todo nosso portfólio, que conta com mais de 40 perfumes.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <h3 class="font-weight-bold text-4 mb-2">CRIE SUA REDE</h3>
                        <p>A Federal Cosméticos oferece a melhor oportunidade para você conquistar a sua liberdade financeira. Através de um plano de marketing simples e acessível, aliado a produtos de qualidade, você potencializa seu lucros e cresce muito mais.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">SEJA UM (a) FRANQUEADO (a)</h3>
                        <p>Nossos(as) Consultores(as) contam com um local para experimentar e adquirir seus produtos, fazer suas reuniões e treinamentos. A Federal Cosméticos é uma extensão da nossa marca para todo o Brasil.</p>
                    </div>
                </div>
            </div>
            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <div class="col-lg-6">
                    <a href="https://api.whatsapp.com/send/?phone=556233535679&text&app_absent=0" class="btn btn-modern btn-dark mt-3">FALAR COM UM ESPECIALISTA </a>
                    {{--<a href="#" class="btn btn-modern btn-primary mt-3"></a>--}}
                </div>
                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                    <strong class="text-uppercase text-1 me-3 text-dark">ME SIGA</strong>
                    <ul class="social-icons float-lg-end">
                        <li class="social-icons-instagram"><a href="https://www.instagram.com/federalcosmeticos_oficial/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        {{--<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
        {{--<section class="section section-default border-0 mt-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1200">
            <div class="container py-4">
                <div class="row featured-boxes featured-boxes-style-4">
                    <div class="col-md-6 col-lg-3 my-2">
                        <div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
                            <div class="box-content p-0 text-start">
                                <i class="icon-featured icon-screen-tablet icons text-12 m-0 p-0"></i>
                                <h4 class="font-weight-bold text-color-dark">Mobile Apps</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-2">
                        <div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1400">
                            <div class="box-content p-0 text-start">
                                <i class="icon-featured icon-layers icons text-12 m-0 p-0"></i>
                                <h4 class="font-weight-bold text-color-dark">Creative Websites</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-2">
                        <div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400">
                            <div class="box-content p-0 text-start">
                                <i class="icon-featured icon-magnifier icons text-12 m-0 p-0"></i>
                                <h4 class="font-weight-bold text-color-dark">SEO Optimization</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-2">
                        <div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600">
                            <div class="box-content p-0 text-start">
                                <i class="icon-featured icon-screen-desktop icons text-12 m-0 p-0"></i>
                                <h4 class="font-weight-bold text-color-dark">Brand Solutions</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>--}}
        <br><br>
        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
            <div class="container pb-2">
                <div class="row">
                    <div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">Sobre <strong class="font-weight-extra-bold"> Nossos Consultores</strong></h2>
                        <p class="lead">Veja algumas avaliações de nossos consultores</p>
                        <div class="row justify-content-center my-5">
                            <div class="col-8 text-center col-md-4">
                                <img src="#" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4 my-3 my-md-0">
                                <img src="#" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4">
                                <img src="#" class="img-fluid hover-effect-3" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="#" class="img-fluid rounded-circle mb-0" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">Excelente Empresa, com perfumes de ótima qualidade.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">Marcos Renato</strong><span>Ceara</span></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="#" class="img-fluid rounded-circle mb-0" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">A qualidade é excelente. Meus clientes amam, é eu também, pois só uso produtos da Federal Cosméticos!!</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">Stéfany Souza</strong><span>Pará</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
