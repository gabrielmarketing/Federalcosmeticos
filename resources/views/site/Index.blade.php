@extends('site.layout.app2')
@section('content')
    <div role="main" class="main shop pt-4">
        <div class="container">
            <div class="masonry-loader masonry-loader-showing">
                <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

                    @foreach($products as $product)

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
{{--                                <div class="product-thumb-info-badges-wrapper">--}}
{{--                                    <span class="badge badge-ecommerce badge-success">NOVIDADE</span>--}}
{{--                                </div>--}}
                                <div class="addtocart-btn-wrapper">
                                    <a href="{{asset("porto/shop-cart.html")}}" class="text-decoration-none addtocart-btn" title="Adicionar ao Carrinho">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="{{asset("porto/ajax/shop-product-quick-view.html")}}" class="quick-view text-uppercase font-weight-semibold text-2">
                                    VER PERFUME
                                </a>
                                <a href="{{route("site.ShopCart")}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{asset($product->image)}}">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">Perfume Parfun</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{asset("porto/shop-product-sidebar-right.html")}}" class="text-color-dark text-color-hover-primary">{{$product->name}}</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">R$ {{$product->price}},00</span>
                                <span class="amount">R$30,00</span>
                            </p>
                        </div>
                    </div>

                    @endforeach


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

