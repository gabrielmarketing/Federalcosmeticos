@extends('site.layout.app2')
@section('content')
    <div role="main" class="main shop pt-4">
        <div class="container">
            <div class="masonry-loader masonry-loader-showing">
                <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce badge-success">NOVIDADE</span>
                                </div>
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/v8_v1.png")}}">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">cosmeticos</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">V8</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce badge-success">MAIS VENDIDO</span>
                                    <span class="badge badge-ecommerce badge-danger">60% OFF</span>
                                </div>
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/diplomata.png")}}">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">DIPLOMATA</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/alfa.png")}}">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">ALFA</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">

                                    <span class="badge badge-ecommerce badge-danger">60% OFF</span>
                                </div>

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <div class="countdown-offer-wrapper">
                                    <div class="text-color-light negative-ls-05 text-2" data-plugin-countdown data-plugin-options="{'date': '2021/07/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFERTA ACABA EM </span>', 'textDay': 'DIAS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/lion.png")}}">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">LION</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/tiger_v1.png")}}">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">TIGER</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/invicto.png")}}">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">INVICTO</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/impala.png")}}">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">IMPALA</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/omega.png")}}">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">ÔMEGA</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>


                </div>
                <div class="row mt-4">
                    <div class="col">
                        <ul class="pagination float-end">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

