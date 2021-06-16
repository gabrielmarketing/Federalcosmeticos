
<script>

    // ------------------------------ script carrinho -------------------------------------//
    const products = []

    function addcar(element){
        event.preventDefault();
        var elementHtml = $(element);

            var product = {
                'id':elementHtml.attr('id'),
                'quantity': 1
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
        window.location.reload()
    }

    function cartNumberDisplay(){
        let cartNumbers = 0;
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item =>{
            cartNumbers = item.quantity += cartNumbers;
        });
        if (cartNumbers > 0){
            document.getElementById('cartqty').innerHTML=cartNumbers;
            document.getElementById('cartqty').style.display='block';
        }

    }
    cartNumberDisplay();
</script>
