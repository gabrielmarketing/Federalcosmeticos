@extends("site.layout.app2")
@section("content")
    <div role="main" class="main shop pb-4">

        <div class="container">

            <div class="row">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
                        <li class="text-transform-none me-2">
                            <a href="{{route("site.ShopCart")}}" class="text-decoration-none text-color-dark text-color-hover-primary">Carrinho de Compras</a>
                        </li>
                        <li class="text-transform-none text-color-dark me-2">
                            <a href="{{route("site.Checkout")}}" class="text-decoration-none text-color-primary">Checkout</a>
                        </li>
                        <li class="text-transform-none text-color-grey-lighten">
                            <a href="#" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Pedido Finalizado</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="mb-1">Cliente recorrente ? <a href="#" class="text-color-dark text-color-hover-primary text-uppercase text-decoration-none font-weight-bold" data-bs-toggle="collapse" data-bs-target=".login-form-wrapper">Login</a></p>
                </div>
            </div>

            <div class="row login-form-wrapper collapse mb-5">
                <div class="col">
                    <div class="card border-width-3 border-radius-0 border-color-hover-dark">
                        <div class="card-body">
                            <form action="/" id="frmSignIn" method="post">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="form-label text-color-dark text-3">Endereço de E-mail<span class="text-color-danger">*</span></label>
                                        <input type="text" value="" class="form-control form-control-lg text-4" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="form-label text-color-dark text-3">Senha<span class="text-color-danger">*</span></label>
                                        <input type="password" value="" class="form-control form-control-lg text-4" required>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="form-group col-md-auto">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberme">
                                            <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Lembre de mim</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-auto">
                                        <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="#">Esqueceu a senha?</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">CONECTE-SE</button>
                                        <div class="divider">
                                            <span class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">ou</span>
                                        </div>
                                        <a href="#" class="btn btn-primary-scale-2 btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3" data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i> Entrar com o Facebook</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <p>Tem um cupom? <a href="#" class="text-color-dark text-color-hover-primary text-uppercase text-decoration-none font-weight-bold" data-bs-toggle="collapse" data-bs-target=".coupon-form-wrapper">Aplicar Cupom</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row coupon-form-wrapper collapse mb-5">--}}
{{--                <div class="col">--}}
{{--                    <div class="card border-width-3 border-radius-0 border-color-hover-dark">--}}
{{--                        <div class="card-body">--}}
{{--                            <form role="form" method="post" action="">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <input type="text" class="form-control h-auto border-radius-0 line-height-1 py-3" name="couponCode" placeholder="Coupon Code" required />--}}
{{--                                    <button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2">Apply Coupon</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <form role="form" class="needs-validation" method="post" action="">
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">

                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Detalhes de Cobrança</h2>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">CPF</label>
                                <input type="text" class="form-control h-auto py-2 @error('cpf') is-invalid @enderror" name="cpf" value="" required/>
                                @error('cpf')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Nome<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2 @error('name') is-invalid @enderror" name="name" value="" required />
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">CEP<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2 @error('cep') is-invalid @enderror" name="cep" value="" required />
                                @error('cep')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Endereço<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2 @error('address') is-invalid @enderror" name="address" value="" placeholder="House number and street name" required />
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Complemento<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2 @error('complement') is-invalid @enderror" name="complement" value="" placeholder="Apartment, suite, unit, etc..." required />
                                @error('complement')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Cidade<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2 @error('city') is-invalid @enderror" name="city" value="" required />
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Estado<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2 @error('state') is-invalid @enderror" name="state" value="" required />
                                @error('state')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Telefone<span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2 @error('phone') is-invalid @enderror" name="phone" value="" required />
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Celular<span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2 @error('cell') is-invalid @enderror" name="cell" value="" required />
                                @error('cell')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Endereço de E-mail<span class="text-color-danger">*</span></label>
                                <input type="email" class="form-control h-auto py-2 @error('email') is-invalid @enderror" name="email" value="" required />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{--<div class="row">
                            <div class="form-group col">
                                <div class="custom-checkbox-1">
                                    <input id="createAccount" type="checkbox" name="createAccount" value="1" />
                                    <label for="createAccount">Crie a sua conta aqui ?</label>
                                </div>
                            </div>
                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group col">--}}
{{--                                <div class="custom-checkbox-1" data-bs-toggle="collapse" data-bs-target=".shipping-field-wrapper">--}}
{{--                                    <input id="shipAddress" type="checkbox" name="shipAddress" value="1" />--}}
{{--                                    <label for="shipAddress">Comprar em um endereço diferente?</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- Ship to a differente address fields -->
{{--                        <div class="shipping-field-wrapper collapse">--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label class="form-label">Nome<span class="text-color-danger">*</span></label>--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingFirstName" value="" required />--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label class="form-label">Sobrenome<span class="text-color-danger">*</span></label>--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingLastName" value="" required />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            --}}{{--<div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">Company Name</label>--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingCompanyName" value="" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">País/Região <span class="text-color-danger">*</span></label>--}}
{{--                                    <div class="custom-select-1">--}}
{{--                                        <select class="form-select form-control h-auto py-2" name="shippingCountry" required>--}}
{{--                                            <option value="" selected></option>--}}
{{--                                            <option value="usa">United States</option>--}}
{{--                                            <option value="spa">Spain</option>--}}
{{--                                            <option value="fra">France</option>--}}
{{--                                            <option value="uk">United Kingdon</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">Endereço<span class="text-color-danger">*</span></label>--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingAddress1" value="" placeholder="House number and street name" required />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingAddress2" value="" placeholder="Apartment, suite, unit, etc..." required/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">Cidade<span class="text-color-danger">*</span></label>--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingCity" value="" required />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">Estado<span class="text-color-danger">*</span></label>--}}
{{--                                    <div class="custom-select-1">--}}
{{--                                        <select class="form-select form-control h-auto py-2" name="shippingState" required>--}}
{{--                                            <option value="" selected></option>--}}
{{--                                            <option value="ny">Nova York</option>--}}
{{--                                            <option value="ca">California</option>--}}
{{--                                            <option value="tx">Texas</option>--}}
{{--                                            <option value="">Florida</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">CEP<span class="text-color-danger">*</span></label>--}}
{{--                                    <input type="text" class="form-control h-auto py-2" name="shippingZip" value="" required />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <label class="form-label">Telefone<span class="text-color-danger">*</span></label>--}}
{{--                                    <input type="number" class="form-control h-auto py-2" name="shippingPhone" value="" required />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End of Ship to a differente address fields -->--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Observação do pedido</label>
                                <textarea class="form-control h-auto py-2" name="orderNotes" rows="5" placeholder="Escreva alguma observação"></textarea>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-5 position-relative">
                        <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                            <div class="card-body">
                                <h4 class="font-weight-bold text-uppercase text-4 mb-3">SEU PEDIDO</h4>
                                <table class="shop_table cart-totals mb-3">
                                    <tbody>
                                    <tr>
                                        <td colspan="2" class="border-top-0">
                                            <strong class="text-color-dark">produtos</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
                                            <span class="text-1">COLOR BLACK</span>
                                        </td>
                                        <td class="text-end align-top">
                                            <span class="amount font-weight-medium text-color-grey">R$10</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 pt-0">
                                            <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
                                            <span class="text-1">COLOR BLACK</span>
                                        </td>
                                        <td class="border-top-0 text-end align-top pt-0">
                                            <span class="amount font-weight-medium text-color-grey">R$10</span>
                                        </td>
                                    </tr>
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
                                            <strong class="d-block text-color-dark mb-2">Shipping</strong>

                                            <div class="d-flex flex-column">
                                                <label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
                                                    <input id="shipping_method1" type="radio" class="me-2" name="shipping_method" value="free" checked />
                                                    Free Shipping
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method2">
                                                    <input id="shipping_method2" type="radio" class="me-2" name="shipping_method" value="local-pickup" />
                                                    Local Pickup
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method3">
                                                    <input id="shipping_method3" type="radio" class="me-2" name="shipping_method" value="flat-rate" />
                                                    Flat Rate: $5.00
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td>
                                            <strong class="text-color-dark text-3-5">Total</strong>
                                        </td>
                                        <td class="text-end">
                                            <strong class="text-color-dark"><span class="amount text-color-dark text-5">R$10</span></strong>
                                        </td>
                                    </tr>
                                    <tr class="payment-methods">
                                        <td colspan="2">
                                            <strong class="d-block text-color-dark mb-2">Métodos de Pagamento</strong>

                                            <div class="d-flex flex-column">
                                                <label class="d-flex align-items-center text-color-grey mb-0" for="payment_method1">
                                                    <input id="payment_method1" type="radio" class="me-2" name="payment_method" value="cash-on-delivery" checked />
                                                    Boleto
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Seus dados pessoais serão usados apenas para processar seu pedido.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Finalizar o Pedido <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
@endsection
