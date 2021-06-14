@extends("site.layout.app2")
@section("content")
    <div role="main" class="main shop pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
                    <li class="text-transform-none me-2">
                        <a href="#" class="text-decoration-none text-color-primary">EM DESENVOLVIMENTO...</a>
                    </li>
                </ul>
            </div>
        </div>
        {{--<div class="row pb-4 mb-5">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <form method="post" action="">
                    <div class="table-responsive">
                        <table class="shop_table cart">
                            <thead>
                            <tr class="text-color-dark">
                                <th class="product-thumbnail" width="15%">
                                    &nbsp;
                                </th>
                                <th class="product-name text-uppercase" width="30%">
                                    Produtos
                                </th>
                                <th class="product-price text-uppercase" width="15%">
                                    Preço
                                </th>
                                <th class="product-quantity text-uppercase" width="20%">
                                    Quantidade
                                </th>
                                <th class="product-subtotal text-uppercase text-end" width="20%">
                                    Subtotal
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart_table_item">
                                <td class="product-thumbnail">
                                    <div class="product-thumbnail-wrapper">
                                        <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Photo Camera">
                                            <img width="90" height="90" alt="" class="img-fluid" src="{{asset("porto/img/products/product-grey-1.jpg")}}">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">NOME DO PERFUME</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount font-weight-medium text-color-grey">R$10</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity float-none m-0">
                                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                                    </div>
                                </td>
                                <td class="product-subtotal text-end">
                                    <span class="amount text-color-dark font-weight-bold text-4">R$10</span>
                                </td>
                            </tr>
                            <tr class="cart_table_item">
                                <td class="product-thumbnail">
                                    <div class="product-thumbnail-wrapper">
                                        <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Porto Headphone">
                                            <img width="90" height="90" alt="" class="img-fluid" src="{{asset("porto/img/products/product-grey-7.jpg")}}">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Porto Headphone</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount font-weight-medium text-color-grey">R$10</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity float-none m-0">
                                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                                    </div>
                                </td>
                                <td class="product-subtotal text-end">
                                    <span class="amount text-color-dark font-weight-bold text-4">R$10</span>
                                </td>
                            </tr>

                            <tr class="cart_table_item">
                                <td class="product-thumbnail">
                                    <div class="product-thumbnail-wrapper">
                                        <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Golf Bag">
                                            <img width="90" height="90" alt="" class="img-fluid" src="{{asset("porto/img/products/product-grey-2.jpg")}}">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Golf Bag</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount font-weight-medium text-color-grey">R$10</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity float-none m-0">
                                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                                    </div>
                                </td>
                                <td class="product-subtotal text-end">
                                    <span class="amount text-color-dark font-weight-bold text-4">R$10</span>
                                </td>
                            </tr>
                            <tr class="cart_table_item">
                                <td class="product-thumbnail">
                                    <div class="product-thumbnail-wrapper">
                                        <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Workout">
                                            <img width="90" height="90" alt="" class="img-fluid" src="{{asset("porto/img/products/product-grey-3.jpg")}}">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Workout</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount font-weight-medium text-color-grey">R$10</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity float-none m-0">
                                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                                    </div>
                                </td>
                                <td class="product-subtotal text-end">
                                    <span class="amount text-color-dark font-weight-bold text-4">R$10</span>
                                </td>
                            </tr>
                            <tr class="cart_table_item">
                                <td class="product-thumbnail">
                                    <div class="product-thumbnail-wrapper">
                                        <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Luxury Bag">
                                            <img width="90" height="90" alt="" class="img-fluid" src="{{asset("porto/img/products/product-grey-4.jpg")}}">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Luxury Bag</a>
                                </td>
                                <td class="product-price">
                                    <span class="amount font-weight-medium text-color-grey">R$10</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity float-none m-0">
                                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                                    </div>
                                </td>
                                <td class="product-subtotal text-end">
                                    <span class="amount text-color-dark font-weight-bold text-4">R$10</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="row justify-content-between mx-0">
                                        <div class="col-md-auto px-0 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control h-auto border-radius-0 line-height-1 py-3" name="couponCode" placeholder="Cupom de Desconto" />
                                                <button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2">Aplicar Cupom</button>
                                            </div>
                                        </div>
                                        <div class="col-md-auto px-0">
                                            <button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 btn-px-4 py-3">Atualizar Carrinho</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 position-relative">
                <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                    <div class="card-body">
                        <h4 class="font-weight-bold text-uppercase text-4 mb-3">Total do Carrinho</h4>
                        <table class="shop_table cart-totals mb-4">
                            <tbody>
                            <tr class="cart-subtotal">
                                <td class="border-top-0">
                                    <strong class="text-color-dark">Subtotal</strong>
                                </td>
                                <td class="border-top-0 text-end">
                                    <strong><span class="amount font-weight-medium">R$10</span></strong>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <td colspan="2">
                                    <strong class="d-block text-color-dark mb-2">Envio</strong>

                                    <div class="d-flex flex-column">
                                        <label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
                                            <input id="shipping_method1" type="radio" class="me-2" name="shipping_method" value="free" checked />
                                            Taxa fixa: R$ 20
                                        </label>
                                        <label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method2">
                                            <input id="shipping_method2" type="radio" class="me-2" name="shipping_method" value="local-pickup" />
                                            Pegar na Fabrica
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="total">
                                <td>
                                    <strong class="text-color-dark text-3-5">Total</strong>
                                </td>
                                <td class="text-end">
                                    <strong class="text-color-dark"><span class="amount text-color-dark text-5">R$30</span></strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="shop-checkout.html" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Continuar <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 class="font-weight-semibold text-4 mb-3">AS PESSOAS TAMBÉM COMPRARAM</h4>
                <hr class="mt-0">
                <div class="products row">
                    <div class="col">
                        <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">

                            <div class="product mb-0">
                                <div class="product-thumb-info border-0 mb-3">

                                    <div class="product-thumb-info-badges-wrapper">
                                        <span class="badge badge-ecommerce badge-success">MAIS VENDIDO</span>

                                    </div>

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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/fusion.png")}}">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">FUSION</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>
                            <div class="product mb-0">
                                <div class="product-thumb-info border-0 mb-3">
                                    <div class="product-thumb-info-badges-wrapper">
                                        <span class="badge badge-ecommerce badge-success">NOVIDADE</span>
                                        <span class="badge badge-ecommerce badge-danger">60% OFF</span>
                                    </div>
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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/falcon.png")}}">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Falcon</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>

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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/dragon.png")}}">

                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Dragon</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>
                            <div class="product mb-0">
                                <div class="product-thumb-info border-0 mb-3">

                                    <div class="product-thumb-info-badges-wrapper">

                                        <span class="badge badge-ecommerce badge-danger">60% OFF</span>
                                    </div>

                                    <div class="addtocart-btn-wrapper">
                                        <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                            <i class="icons icon-bag"></i>
                                        </a>
                                    </div>

                                    <div class="countdown-offer-wrapper">
                                        <div class="text-color-light text-2" data-plugin-countdown data-plugin-options="{'date': '2021/07/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFERTA ACABA EM </span>', 'textDay': 'DIAS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
                                    </div>

                                    <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                        VER PERFUME
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <div class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/fox.png")}}">

                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Fox</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>

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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/owen.png")}}">

                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Owen</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>
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
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Impala</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 10,00</span>
                                </p>
                            </div>

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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/invicto.png")}}">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Invicto</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>

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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/mustang_v1.png")}}">

                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Mustang</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>

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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/speed.png")}}">

                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">COSMÉTICOS</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Speed</a></h3>
                                    </div>
                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                                </div>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                </div>
                                <p class="price text-5 mb-3">
                                    <span class="sale text-color-dark font-weight-semi-bold">R$ 10,00</span>
                                    <span class="amount">R$ 30,00</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
</div>
@endsection
