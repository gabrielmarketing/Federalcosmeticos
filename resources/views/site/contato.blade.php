@extends("site.layout.app2")
@section("content")
    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="{{asset("images/fundo1.jpg")}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1> Contato <strong>Federal Cosméticos</strong></h1>
                        <span class="sub-title">Para maiores informações entre em contato</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contato</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">

                    <div class="offset-anchor" id="contact-sent"></div>

                    <?php
                    if (isset($arrResult)) {
                    if($arrResult['response'] == 'success') {
                    ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                    <?php
                    } else if($arrResult['response'] == 'error') {
                    ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="font-size-xs mt-2 d-block"><?php echo $arrResult['errorMessage'];?></span>
                    </div>
                    <?php
                    } else if($arrResult['response'] == 'captchaError') {
                    ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Verification failed.
                    </div>
                    <?php
                    }
                    }
                    ?>

                    <h2 class="font-weight-bold text-7 mt-2 mb-0">Entre em contato</h2>
                    <p class="mb-4"></p>

                    <form id="contactFormAdvanced" action="<?php echo basename($_SERVER['PHP_SELF']); ?>#contact-sent" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="true" name="emailSent" id="emailSent">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label mb-1 text-2">Nome</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label mb-1 text-2">Endereço de E-mail</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label mb-1 text-2">Motivo</label>
                                <select data-msg-required="Please enter the subject." class="form-control text-3 h-auto py-2" name="subject" id="subject" required>
                                    <option value="">Clique aqui e escolha o motivo do contato</option>
                                    <option value="Option 1">Quero ser um consultor</option>
                                    <option value="Option 2">Quero mais informações</option>
                                    <option value="Option 3">Problemas com o pagamento</option>
                                    <option value="Option 4">Problemas com o Login</option>
                                </select>
                            </div>
                        </div>
                        {{--<div class="row">
                            <div class="form-group col-md-6">
                                <p class="mb-2">Checkboxes</p>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option1"> 1
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option2"> 2
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option3"> 3
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <p class="mb-2">Radios</p>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio1" value="option1"> 1
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio2" value="option2"> 2
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio3" value="option3"> 3
                                    </label>
                                </div>
                            </div>
                        </div>--}}
                        {{--<div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label mb-1 text-2">Attachment</label>
                                <input class="form-control d-block" type="file" name="attachment" id="attachment">
                            </div>
                        </div>--}}
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control text-3 h-auto py-2" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        {{--<div class="row">
                            <div class="form-group col-md-12 mb-0">
                                <label class="form-label mb-1 text-2">Human Verification</label>
                            </div>
                        </div>--}}
                        {{--<div class="row pt-2">
                            <div class="form-group col-md-4">
                                <div class="captcha form-control text-3 h-auto p-0">
                                    <div class="captcha-image">
                                        <?php
                                        $_SESSION['captcha'] = simple_php_captcha(array(
                                            'min_length' => 6,
                                            'max_length' => 6,
                                            'min_font_size' => 22,
                                            'max_font_size' => 22,
                                            'angle_max' => 3
                                        ));

                                        $_SESSION['captchaCode'] = $_SESSION['captcha']['code'];

                                        echo '<img id="captcha-image" src="' . "php/simple-php-captcha/simple-php-captcha.php/" . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
                                        ?>
                                    </div>
                                    <div class="captcha-refresh">
                                        <a href="#" id="refreshCaptcha"><i class="fas fa-sync"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control text-3 h-auto py-2 form-control-lg captcha-input" name="captcha" id="captcha" required>
                            </div>
                        </div>--}}
                       {{-- <div class="row">
                            <div class="form-group col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 mb-5">
                                <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
                            </div>
                        </div>--}}
                    </form>

                </div>
                <div class="col-lg-5">

                   {{-- <div class="overflow-hidden mb-1">
                        <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Get in <strong>Touch</strong></h4>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius.</p>
                    </div>--}}

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <h4 class="text-primary pt-5">Nosso <strong>Escritório</strong></h4>
                        <ul class="list list-icons list-icons-style-3 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Endereço:</strong> Avenida Contorno Nº 3790, Goianésia-GO</li>
                            <li><i class="fas fa-phone top-6"></i> <strong>Telefone:</strong> (62) 3353-5679</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">contato@federalcosmeticos.com.br</a></li>
                        </ul>

                        {{--<div class="row lightbox mt-4 mb-0 pb-0" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <a class="img-thumbnail p-0 border-0 d-block" href="{{asset("porto/img/office/our-office-1.jpg")}}" data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid" src="{{asset("porto/img/office/our-office-1.jpg")}}" alt="Office">
                                </a>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <a class="img-thumbnail p-0 border-0 d-block" href="{{asset("porto/")}}" data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid" src="{{asset("porto/img/office/our-office-2.jpg")}}" alt="Office">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="img-thumbnail p-0 border-0 d-block" href="{{asset("porto/img/office/our-office-3.jpg")}}" data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid" src="{{asset("porto/img/office/our-office-3.jpg")}}" alt="Office">
                                </a>
                            </div>
                        </div>--}}

                        <h4 class="text-primary pt-5">Horário <strong>Comercial</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Segunda - Sexta - 8:00 as 18:00</li>
                            <li><i class="far fa-clock top-6"></i> Sabado - 08:00 as 12:00</li>
                            <li><i class="far fa-clock top-6"></i> Domingo - Fechado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
