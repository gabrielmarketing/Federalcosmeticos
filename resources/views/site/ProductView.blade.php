@extends("site.layout.app2")
@section("content")
    <div role="main" class="main shop pt-4">

        <div class="container">

            <div class="row">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
                        <li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Produtos</a></li>
                        <li>Perfumes</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-5 mb-md-0">

                    <div class="thumb-gallery-wrapper">
                        <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                            <div>
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}" data-zoom-image="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}" data-zoom-image="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}" data-zoom-image="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}" data-zoom-image="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}" data-zoom-image="{{asset("images/produtos/v8.png")}}">
                            </div>
                        </div>
                        <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="{{asset("images/produtos/v8.png")}}">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-7">

                    <div class="summary entry-summary position-relative">

                        <div class="position-absolute top-0 right-0">
                            <div class="products-navigation d-flex">
                                <a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>

                        <h1 class="mb-0 font-weight-bold text-7">V8</h1>
                        <p class="price mb-3">
                            <span class="sale text-color-dark">R$10,00</span>
                            <span class="amount">R$30,00</span>
                        </p>

                        <p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>

                        <ul class="list list-unstyled text-2">
                            <li class="mb-0">DISPONIBILIDADE: <strong class="text-color-dark">DISPONÍVEL</strong></li>
                            {{--<li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>--}}
                        </ul>


                        <form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
                            <table class="table table-borderless" style="max-width: 300px;">
                                <tbody>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">TAMANHO:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="size" class="form-control form-select text-1 h-auto py-2">
                                                <option value="">POR FAVOR ESCOLHA</option>
                                                <option value="blue">17ML</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                {{--<tr>
                                    <td class="align-middle text-2 px-0 py-2">COR:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="color" class="form-control form-select text-1 h-auto py-2">
                                                <option value="">POR FAVOR ESCOLHA</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>--}}
                                </tbody>
                            </table>
                            <hr>
                            <div class="quantity quantity-lg">
                                <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                                <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                            </div>
                            <button type="submit" class="btn btn-success btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">COMPRAR</button>
                            <hr>
                        </form>

                        <div class="d-flex align-items-center">
                            <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
                                <!-- Facebook -->
                                <li class="social-icons-instagram">
                                    <a href="https://www.instagram.com/federalcosmeticos_oficial/" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="COMPARTILHAR">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                {{--<!-- Google+ -->
                                <li class="social-icons-googleplus">
                                    <a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Google+">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>--}}
                                {{--<!-- Twitter -->
                                <li class="social-icons-twitter">
                                    <a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>--}}
                                {{--<!-- Email -->
                                <li class="social-icons-email">
                                    <a href="mailto:?Subject=Share This Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://www.okler.net" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share By Email">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </li>--}}
                            </ul>
                            {{--<a href="#" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2">
                                <i class="far fa-heart me-1"></i> SAVE TO WISHLIST
                            </a>--}}
                        </div>

                    </div>

                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-bs-toggle="tab">Descrição</a></li>
                            <li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-bs-toggle="tab">Informação Adicional</a></li>
                            {{--<li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#productReviews" data-bs-toggle="tab">Reviews (2)</a></li>--}}
                        </ul>
                        <div class="tab-content p-0">
                            <div class="tab-pane px-0 py-3 active" id="productDescription">
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. </p>
                                <p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            </div>
                            <div class="tab-pane px-0 py-3" id="productInfo">
                                <table class="table table-striped m-0">
                                    <tbody>
                                    <tr>
                                        <th class="border-top-0">
                                            Tamanho:
                                        </th>
                                        <td class="border-top-0">
                                            17ml
                                        </td>
                                    </tr>
                                    {{--<tr>
                                        <th>
                                            Colors
                                        </th>
                                        <td>
                                            Red, Blue
                                        </td>
                                    </tr>--}}
                                    {{--<tr>
                                        <th>
                                            Material
                                        </th>
                                        <td>
                                            100% Leather
                                        </td>
                                    </tr>--}}
                                    </tbody>
                                </table>
                            </div>
                            {{--<div class="tab-pane px-0 py-3" id="productReviews">
                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                <img class="avatar rounded-circle" alt="" src="{{asset("images/avatars/avatar-2.jpg")}}">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
															<strong>Jack Doe</strong>
															<span class="float-end">
																<div class="pb-0 clearfix">
																	<div title="Rated 3 out of 5" class="float-start">
																		<input type="text" class="opacity-0" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																	</div>

																	<div class="review-num">
																		<span class="count" itemprop="ratingCount">2</span> reviews
																	</div>
																</div>
															</span>
														</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                <img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-end">
																<div class="pb-0 clearfix">
																	<div title="Rated 3 out of 5" class="float-start">
																		<input type="text" class="opacity-0" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																	</div>

																	<div class="review-num">
																		<span class="count" itemprop="ratingCount">2</span> reviews
																	</div>
																</div>
															</span>
														</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra odio, gravida urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <hr class="solid my-5">
                                <h4>Add a review</h4>
                                <div class="row">
                                    <div class="col">

                                        <form action="" id="submitReview" method="post">
                                            <div class="row">
                                                <div class="form-group col pb-2">
                                                    <label class="form-label required font-weight-bold text-dark">Rating</label>
                                                    <input type="text" class="rating-loading" value="0" title="" data-plugin-star-rating data-plugin-options="{'color': 'primary', 'size':'sm'}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Name</label>
                                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Email Address</label>
                                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="form-label required font-weight-bold text-dark">Review</label>
                                                    <textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col mb-0">
                                                    <input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h4 class="font-weight-semibold text-4 mb-3">PRODUTOS RELACIONADOS</h4>
                    <hr class="mt-0">
                    <div class="products row">
                        <div class="col">
                            <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">
                                        <div class="product-thumb-info-badges-wrapper">
                                            <span class="badge badge-ecommerce badge-success"></span>

                                        </div>
                                        <div class="addtocart-btn-wrapper">
                                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="shop-product-sidebar-left.html">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/falcon.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">FALCON</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">
                                        {{--<div class="product-thumb-info-badges-wrapper">
                                            <span class="badge badge-ecommerce badge-success">NEW</span>
                                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                                        </div>--}}
                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image product-thumb-info-image-effect">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/mustang.png")}}">

                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/mustang.png")}}">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">MUSTANG</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/owen.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">OWEN</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">
                                        {{--<div class="product-thumb-info-badges-wrapper">

                                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                                        </div>--}}
                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<div class="countdown-offer-wrapper">
                                            <div class="text-color-light text-2" data-plugin-countdown data-plugin-options="{'date': '2022/01/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFFER ENDS IN </span>', 'textDay': 'DAYS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
                                        </div>--}}
                                        {{--<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/speed.png")}}">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">SPEED</a></h3>
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
                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">
                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/omega.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">ÔMEGA</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar a Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/lion.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">LION</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        {{--<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>--}}
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/alfa.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">ALFA</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/tiger.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">TIGER</a></h3>
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

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="addtocart-btn-wrapper">
                                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>

                                        <a href="{{route("site.ShopCart")}}" class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>
                                        <a href="{{route("site.ShopCart")}}">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{asset("images/produtos/impala.png")}}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">PERFUME MASCULINO</a>
                                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary">IMPALA</a></h3>
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
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="products row">
                <div class="col-md-6 col-lg-3">
                    <h4 class="font-weight-semibold text-4 mb-3">PRODUTOS EM DESTAQUE</h4>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/apollo.png")}}">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">APOLLO</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image product-thumb-info-image-effect">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/dragon.png")}}">

                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/dragon.png")}}">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">DRAGON</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$10,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/scorpion.png")}}">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">SCORPION</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="font-weight-semibold text-4 mb-3">PRODUTOS MAIS VENDIDOS</h4>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/fox.png")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">FOX</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/fusion.png")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">FUSION</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/hipno.png")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">HIPNO</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="font-weight-semibold text-4 mb-3">PRODUTOS MAIS RECENTES</h4>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/invicto.png")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">INVICTO</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/wolf.png")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none"></a>WOLF</h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/black_v1.png")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">BLACK</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-3">
                    <h4 class="font-weight-semibold text-4 mb-3">PRODUTOS MAIS AVALIADOS</h4>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/blackout_v1.png")}}">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">BLACKOUT</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image product-thumb-info-image-effect">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/lion.png")}}">
                                        <img alt="" class="img-fluid" src="{{route("site.ShopCart")}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">LION</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-md-12 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset("images/produtos/wolf.png")}}">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-12 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">PERFUME MASCULINO</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{route("site.ShopCart")}}" class="text-color-dark text-color-hover-primary text-decoration-none">WOLF</a></h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">R$10,00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
