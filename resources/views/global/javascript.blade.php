
<script>

    // ------------------------------ script carrinho -------------------------------------//
    const products = []

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
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Produto adicionado ao carrinho',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(function (){
            window.location.reload()
        },1500);

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
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        if (cartItem === null){

        }else {
            var carttr = $(".carttr");
            var htmltr = '';
            var total = 0;
            var totalsub = 0;
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
                    "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>"+item.quantity+"</span>"+
                    "</td>"+
                    "<td class='product-subtotal text-end'><span class='amount text-color-dark font-weight-bold text-4'>R$ "+totaltr+"</span>"+
                    "</td>"+
            "</tr>";

            });
            carttr.append(htmltr);
            total = parseInt(totalsub) + 20;
            if (document.getElementById('totalsub')){
                document.getElementById('totalsub').innerHTML=totalsub;
                document.getElementById('total').innerHTML=total;
            }

        }

    }
    confericar();

    function decreasesCart(element){
        event.preventDefault();
        let elementHTML = $(element);
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        console.log(cartItem)
        cartItem.forEach(item => {
           if (item.id == elementHTML.attr('id')){

           }else {
               products.push(item)
           }
            localStorage.setItem('prdInCart', JSON.stringify(products));
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Produto deletado do carrinho',
                showConfirmButton: false,
                timer: 1500
            })
            setTimeout(function (){
                window.location.reload()
            },1500);

        });


    }

</script>
