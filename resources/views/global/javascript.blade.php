
<script>

    // ------------------------------ script carrinho -------------------------------------//


    function addcar(element){
        event.preventDefault();

        var elementHtml = $(element);

            var product = {
                'id':elementHtml.attr('id'),
                'quantity': 1,
                'image': elementHtml.attr('image'),
                'perfume': elementHtml.attr('perfume'),
                'price': elementHtml.attr('price')
            };

        addItemToLocal(product);
    }

    function addItemToLocal(product){
        let products = [];
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        if (cartItem === null){
            products.push(product);
            localStorage.setItem('prdInCart', JSON.stringify(products));

        }else{
            cartItem.forEach(item => {
                if (product.id == item.id){
                    product.quantity = item.quantity += product.quantity;

                }else{
                    products.push(item)
                }
            });
            products.push(product)
        }
        localStorage.setItem('prdInCart', JSON.stringify(products));
        successSwal('Parabens', 'Adicionado com sucesso');
        confericar();
        cartNumberDisplay();

    }

    function updatecart(element){
        event.preventDefault();
        var elementHtml = $(element);
        var product = {
            'id':elementHtml.parent().attr('id'),
            'quantity': elementHtml.parent().children()[1].value,
            'image': elementHtml.parent().attr('image'),
            'perfume': elementHtml.parent().attr('perfume'),
            'price': elementHtml.parent().attr('price')
        };

        updateItemToLocal(product);
    }

    function updateItemToLocal(product){
        let products = [];
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        if (cartItem === null){

        }else{
            cartItem.forEach(item => {
                if (product.id == item.id){
                    item.quantity += 1;
                    products.push(item)
                }else{
                    products.push(item)
                }
            });
        }
        localStorage.setItem('prdInCart', JSON.stringify(products));
        confericar();
        cartNumberDisplay();
        // setTimeout(function (){
        //     window.location.reload()
        // },1500);

    }

    function delcart(element){
        event.preventDefault();
        var elementHtml = $(element);
        var product = {
            'id':elementHtml.parent().attr('id'),
            'quantity': elementHtml.parent().children()[1].value,
            'image': elementHtml.parent().attr('image'),
            'perfume': elementHtml.parent().attr('perfume'),
            'price': elementHtml.parent().attr('price')
        };

        delItemToLocal(product);
    }

    function delItemToLocal(product){
        let products = [];
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        if (cartItem === null){

        }else{
            cartItem.forEach(item => {
                if (product.id == item.id){
                    if (item.quantity <= 1){
                        item.quantity = 1;
                    }else {
                        item.quantity = item.quantity - 1;
                    }
                    products.push(item)
                }else{
                    products.push(item)
                }
            });
            // products.push(product)
        }
        localStorage.setItem('prdInCart', JSON.stringify(products));
        confericar();
        cartNumberDisplay();

        // successSwal('Parabens', 'Operação realizada com sucesso');
        // setTimeout(function (){
        //     window.location.reload()
        // },1500);

    }

    function cartNumberDisplay(){
        let cartNumbers = 0;
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        if (cartItem === null){

        }else {
            cartItem.forEach(item =>{
                cartNumbers = item.quantity += cartNumbers;
            });
        }

        if (cartNumbers > 0){
            document.getElementById('cartqty').innerHTML=cartNumbers;
            document.getElementById('cartqty').style.display='block';
        }

    }
    cartNumberDisplay();

    // ------------------------------ script carrinho 2-------------------------------------//

    function confericar(){
        var cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        var carttr = $(".carttr");
        var htmltr = '';
        var total = 0;
        var totalsub = 0;
        if (!cartItem){
            htmltr += "" +
                "<tr class='cart_table_item'>"+
                "<td class='product-thumbnail'>" +
                "<div class='product-thumbnail-wrapper'>" +
                "<a href='#' class='product-thumbnail-remove' title='Remove Product' id='' onclick='decreasesCart(this);'><i class='fas fa-times'></i></a>" +
                "<a href='shop-product-sidebar-right.html' class='product-thumbnail-image' title='Luxury Bag'><img width='90' height='90' alt='' class='img-fluid' src='{{asset('porto/img/products/product-grey-1.jpg')}}'></a>"+
                "</div>"+
                "</td>"+
                "<td class='product-name'><a href='#' class='font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none'>Sem Produtos</a>"+
                "</td>"+
                "<td class='product-price'><span class='amount font-weight-medium text-color-grey'>0</span>"+
                "</td>"+
                "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>0</span>"+
                "</td>"+
                "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>R$ 0</span>"+
                "</td>"+
                "</tr>";
        }else {

            if (Object.keys(cartItem).length === 0){
                htmltr += "" +
                    "<tr class='cart_table_item'>"+
                    "<td class='product-thumbnail'>" +
                    "<div class='product-thumbnail-wrapper'>" +
                    "<a href='#' class='product-thumbnail-remove' title='Remove Product' id='' onclick='decreasesCart(this);'><i class='fas fa-times'></i></a>" +
                    "<a href='shop-product-sidebar-right.html' class='product-thumbnail-image' title='Luxury Bag'><img width='90' height='90' alt='' class='img-fluid' src='{{asset('porto/img/products/product-grey-1.jpg')}}'></a>"+
                    "</div>"+
                    "</td>"+
                    "<td class='product-name'><a href='#' class='font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none'>Sem Produtos</a>"+
                    "</td>"+
                    "<td class='product-price'><span class='amount font-weight-medium text-color-grey'>0</span>"+
                    "</td>"+
                    "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>0</span>"+
                    "</td>"+
                    "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>R$ 0</span>"+
                    "</td>"+
                    "</tr>";
            }else{
                cartItem.forEach(item =>{
                    var price = 'R$ '+ item.price;
                    var totaltr = parseInt(item.price) * parseInt(item.quantity);
                    totalsub += totaltr;
                    htmltr += "" +
                        "<tr class='cart_table_item'>"+
                        "<td class='product-thumbnail'>" +
                        "<div class='product-thumbnail-wrapper'>" +
                        "<a href='#' class='product-thumbnail-remove' title='Remove Product' id='"+item.id+"' onclick='decreasesCart(this);'><i class='fas fa-times'></i></a>" +
                        "<a href='shop-product-sidebar-right.html' class='product-thumbnail-image' title='Luxury Bag'><img width='90' height='90' alt='' class='img-fluid' src='"+item.image+"'></a>"+
                        "</div>"+
                        "</td>"+
                        "<td class='product-name'><a href='#' class='font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none'>"+item.perfume+"</a>"+
                        "</td>"+
                        "<td class='product-price'><span class='amount font-weight-medium text-color-grey'>"+price+"</span>"+
                        "</td>"+
                        "<td class='product-quantity'>"+
                        "<div class='quantity float-none m-0' id='"+item.id+"' image='"+item.image+"' perfume='"+item.perfume+"' price='"+item.price+"'>"+
                        "<input type='button' class='minus text-color-hover-light bg-color-hover-primary border-color-hover-primary' value='-' onclick='delcart(this);'>"+
                        "<input type='text' class='input-text qty text' title='Qty' value='"+item.quantity+"' name='quantity' min='1' step='1'>"+
                        "<input type='button' class='plus text-color-hover-light bg-color-hover-primary border-color-hover-primary' value='+' onclick='updatecart(this);'>"+
                        "</div>"+
                        "</td>"+
                        "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>R$ "+totaltr+"</span>"+
                        "</td>"+
                        "</tr>";

                });
            }

        }

        carttr.html(htmltr);
        total = parseInt(totalsub) + 20;
        if (document.getElementById('totalsub')){
            document.getElementById('totalsub').innerHTML=totalsub;
            document.getElementById('total').innerHTML=total;
        }

    }
    confericar();
    function decreasesCart(element){
        event.preventDefault();
        let products = [];
        let elementHTML = $(element);
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item => {
           if (item.id == elementHTML.attr('id')){

           }else {
               products.push(item)
           }
            localStorage.setItem('prdInCart', JSON.stringify(products));
            confericar();
            cartNumberDisplay();

        });


    }

    // ------------------------------ script checkout -------------------------------------//

    function alimentaPedido(){
        var cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        var cartChekouttr = $(".cartChekouttr");
        var htmltr = '';
        var total = 0;
        var totalsub = 0;
        if (!cartItem){
            htmltr += "" +
                "<tr>"+
                    "<td colspan='2' class='border-top-0'>"+
                        "<strong class='text-color-dark'>produtos</strong>"+
                    "</td>"+
                "</tr>"+
            "<tr class='cart-subtotal'>"+
                "<td class='border-top-0'>"+
                    "<strong class='text-color-dark'>Subtotal</strong>"+
                "</td>"+
                "<td class='border-top-0 text-end'>"+
                    "<strong><span class='amount font-weight-medium'>R$0</span></strong>"+
                "</td>"+
            "</tr>"+
            "<tr class='shipping'>"+
                "<td colspan='2'>"+
                    "<strong class='d-block text-color-dark mb-2'>Shipping</strong>"+
                    "<div class='d-flex flex-column'>"+
                        "<label class='d-flex align-items-center text-color-grey mb-0' for='shipping_method1'>"+
                            "<input id='shipping_method1' type='radio' class='me-2' name='shipping_method' value='free' checked />Valor do Envio R$ 0,00</label>"+
                        "<label class='d-flex align-items-center text-color-grey mb-0' for='shipping_method2'>"+
                            "<input id='shipping_method2' type='radio' class='me-2' name='shipping_method' value='local-pickup' />Pegar na Fabrica</label>"+
                    "</div>"+
                "</td>"+
            "</tr>"+
            "<tr class='total'>"+
                "<td>"+
                    "<strong class='text-color-dark text-3-5'>Total</strong>"+
                "</td>"+
                "<td class='text-end'>"+
                    "<strong class='text-color-dark'><span class='amount text-color-dark text-5'>R$0</span></strong>"+
                "</td>"+
            "</tr>"+
            "<tr class='payment-methods'>"+
                "<td colspan='2'>"+
                    "<strong class='d-block text-color-dark mb-2'>Métodos de Pagamento</strong>"+
                    "<div class='d-flex flex-column'>"+
                       " <label class='d-flex align-items-center text-color-grey mb-0' for='payment_method1'>"+
                            "<input id='payment_method1' type='radio' class='me-2' name='payment_method' value='cash-on-delivery' checked />Boleto</label>"+
                    "</div>"+
                "</td>"+
            "</tr>"+
            "<tr>"+
                "<td colspan='2'>Seus dados pessoais serão usados apenas para processar seu pedido.</td>"+
            "</tr>"
            ;
        }else {

            if (Object.keys(cartItem).length === 0){
                htmltr += "" +
                    "<tr>"+
                    "<td colspan='2' class='border-top-0'>"+
                    "<strong class='text-color-dark'>produtos</strong>"+
                    "</td>"+
                    "</tr>"+
                    "<tr class='cart-subtotal'>"+
                    "<td class='border-top-0'>"+
                    "<strong class='text-color-dark'>Subtotal</strong>"+
                    "</td>"+
                    "<td class='border-top-0 text-end'>"+
                    "<strong><span class='amount font-weight-medium'>R$0</span></strong>"+
                    "</td>"+
                    "</tr>"+
                    "<tr class='shipping'>"+
                    "<td colspan='2'>"+
                    "<strong class='d-block text-color-dark mb-2'>Shipping</strong>"+
                    "<div class='d-flex flex-column'>"+
                    "<label class='d-flex align-items-center text-color-grey mb-0' for='shipping_method1'>"+
                    "<input id='shipping_method1' type='radio' class='me-2' name='shipping_method' value='free' checked />Valor do Envio R$ 0,00</label>"+
                    "<label class='d-flex align-items-center text-color-grey mb-0' for='shipping_method2'>"+
                    "<input id='shipping_method2' type='radio' class='me-2' name='shipping_method' value='local-pickup' />Pegar na Fabrica</label>"+
                    "</div>"+
                    "</td>"+
                    "</tr>"+
                    "<tr class='total'>"+
                    "<td>"+
                    "<strong class='text-color-dark text-3-5'>Total</strong>"+
                    "</td>"+
                    "<td class='text-end'>"+
                    "<strong class='text-color-dark'><span class='amount text-color-dark text-5'>R$0</span></strong>"+
                    "</td>"+
                    "</tr>"+
                    "<tr class='payment-methods'>"+
                    "<td colspan='2'>"+
                    "<strong class='d-block text-color-dark mb-2'>Métodos de Pagamento</strong>"+
                    "<div class='d-flex flex-column'>"+
                    " <label class='d-flex align-items-center text-color-grey mb-0' for='payment_method1'>"+
                    "<input id='payment_method1' type='radio' class='me-2' name='payment_method' value='cash-on-delivery' checked />Boleto</label>"+
                    "</div>"+
                    "</td>"+
                    "</tr>"+
                    "<tr>"+
                    "<td colspan='2'>Seus dados pessoais serão usados apenas para processar seu pedido.</td>"+
                    "</tr>";
            }else{
                htmltr += "" +
                    "<tr>"+
                    "<td colspan='2' class='border-top-0'>"+
                    "<strong class='text-color-dark'>produtos</strong>"+
                    "</td>"+
                    "</tr>";

                cartItem.forEach(item =>{
                    var price = 'R$ '+ item.price;
                    var totaltr = parseInt(item.price) * parseInt(item.quantity);
                    totalsub += totaltr;
                    htmltr += "" +
                        "<tr>"+
                            "<td>"+
                            "<strong class='d-block text-color-dark line-height-1 font-weight-semibold'>"+item.perfume+" <span class='product-qty'>x"+item.quantity+"</span></strong>"+
                            " <span class='text-1'>COLOR BLACK</span>"+
                            "</td>"+
                            "<td class='text-end align-top'>"+
                            "<span class='amount font-weight-medium text-color-grey'>R$ "+item.quantity * 10+"</span>"+
                            "</td>"+
                        "</tr>";

                });
                htmltr += "" +
                "<tr class='cart-subtotal'>"+
                "<td class='border-top-0'>"+
                "<strong class='text-color-dark'>Subtotal</strong>"+
                "</td>"+
                "<td class='border-top-0 text-end'>"+
                "<strong><span class='amount font-weight-medium' id='totalsub'></span></strong>"+
                "</td>"+
                "</tr>"+
                "<tr class='shipping'>"+
                "<td colspan='2'>"+
                "<strong class='d-block text-color-dark mb-2'>Shipping</strong>"+
                "<div class='d-flex flex-column'>"+
                "<label class='d-flex align-items-center text-color-grey mb-0' for='shipping_method1'>"+
                "<input id='shipping_method1' type='radio' class='me-2' name='shipping_method' value='free' checked />Valor do Envio R$ 50,00</label>"+
                "<label class='d-flex align-items-center text-color-grey mb-0' for='shipping_method2'>"+
                "<input id='shipping_method2' type='radio' class='me-2' name='shipping_method' value='local-pickup' />Pegar na Fabrica</label>"+
                "</div>"+
                "</td>"+
                "</tr>"+
                "<tr class='total'>"+
                "<td>"+
                "<strong class='text-color-dark text-3-5'>Total</strong>"+
                "</td>"+
                "<td class='text-end'>"+
                "<strong class='text-color-dark'><span class='amount text-color-dark text-5' id='total'></span></strong>"+
                "</td>"+
                "</tr>"+
                "<tr class='payment-methods'>"+
                "<td colspan='2'>"+
                "<strong class='d-block text-color-dark mb-2'>Métodos de Pagamento</strong>"+
                "<div class='d-flex flex-column'>"+
                " <label class='d-flex align-items-center text-color-grey mb-0' for='payment_method1'>"+
                "<input id='payment_method1' type='radio' class='me-2' name='payment_method' value='cash-on-delivery' checked />Boleto</label>"+
                "</div>"+
                "</td>"+
                "</tr>"+
                "<tr>"+
                "<td colspan='2'>Seus dados pessoais serão usados apenas para processar seu pedido.</td>"+
                "</tr>"
                ;
            }

        }

        cartChekouttr.html(htmltr);
        total = parseInt(totalsub) + 50;
        if (document.getElementById('totalsub')){
            document.getElementById('totalsub').innerHTML='R$ '+totalsub;
            document.getElementById('total').innerHTML='R$ '+total;
        }

    }
    alimentaPedido();
</script>
