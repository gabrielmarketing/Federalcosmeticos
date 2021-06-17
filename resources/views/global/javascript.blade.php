
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
                'perfume': elementHtml.attr('perfume')
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

</script>
