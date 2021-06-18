@extends("site.layout.app2")
@section("content")
    <div role="main" class="main shop pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
                    <li class="text-transform-none me-2">
                        <a href="{{route("site.ShopCart")}}" class="text-decoration-none text-color-primary">Carrinho de compras</a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten me-2">
                        <a href="{{route("site.Checkout")}}" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Checkout</a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="{{route("site.OrderComplete")}}" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Pedido Finalizado</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pb-4 mb-5">
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
                            <tbody class="carttr">

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
                                    <strong><span class="amount font-weight-medium" id="totalsub">R$10</span></strong>
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
                                    <strong class="text-color-dark"><span class="amount text-color-dark text-5" id="total"></span></strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{route("site.Checkout")}}" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Continuar <i class="fas fa-arrow-right ms-2"></i></a>
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
                                            <img alt="" class="img-fluid" src="{{asset("images/produtos/mustang.png")}}">

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
        </div>
    </div>
</div>
@endsection
