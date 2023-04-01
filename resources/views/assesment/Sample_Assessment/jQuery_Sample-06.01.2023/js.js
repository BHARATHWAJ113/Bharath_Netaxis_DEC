$(document).ready(function () {
    var productItem = [{
        productName: "Cd-Drive",
        price: "2000.00",
        photo: "./assest/img/cd.jpg"
    },
    {
        productName: "CPU",
        price: "4000.00",
        photo: "./assest/img/cpu.jpg"
    },
    {
        productName: "Laptop",
        price: "5000.00",
        photo: "./assest/img/laptop.jpg"
    },
    {
        productName: "Pendrive",
        price: "800.00",
        photo: "./assest/img/pendrive.jpg"
    },
    {
        productName: "SSD",
        price: "5000.00",
        photo: "./assest/img/ssd.jpg"
    },
    {
        productName: "Watch",
        price: "4000.00",
        photo: "./assest/img/watch.jpg"
    },
    {
        productName: "Mobile",
        price: "10000.00",
        photo: "./assest/img/phone.jpg"
    },
    {
        productName: "Computer",
        price: "30000.00",
        photo: "./assest/img/computer.jpg"
    },
    {
        productName: "Tab",
        price: "10000.00",
        photo: "./assest/img/tablet.jpg"
    },
    {
        productName: "Mouse",
        price: "800.00",
        photo: "./assest/img/mouse.jpg"
    },
    {
        productName: "Keyboard",
        price: "1000.00",
        photo: "./assest/img/keyboard.jpg"
    },
    {
        productName: "HeadPhone",
        price: "2000.00",
        photo: "./assest/img/headphone.jpg"
    }];
    showProductGallery(productItem);
});

function showProductGallery(product) {
    //Iterate javascript shopping cart array
    var productHTML = "";
    product.forEach(function (item) {
        productHTML += '<div class=" col-lg-2 mt-3">' +
            '<div class="product-item card" style="width: 18rem;">' +
            '<img src="' + item.photo + '" class="card-img-top productimg">' +
            '<div class="card-body">' +
            '<div class="productname card-title">' + item.productName + '</div>' +
            '<div class="price card-text">$<span>' + item.price + '</span></div>' +
            '<div class="cart-action d-grid gap-2">' +
            '<input type="number" class="product-quantity" name="quantity" placeholder="How Many Product?" size="2" />' +
            '<input type="submit" value="Add to Cart" class="add-to-cart btn btn-primary" onClick="addToCart(this)" />' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';
        "<tr>";

    });
    $('#product-item-container').html(productHTML);
}


function addToCart(element) {
    var productParent = $(element).closest('div.product-item');
console.log(productParent);
    var price = $(productParent).find('.price span').text();
    var productName = $(productParent).find('.productname').text();
    var quantity = $(productParent).find('.product-quantity').val();

    var cartItem = {
        productName: productName,
        price: price,
        quantity: quantity
    };
    console.log(cartItem);
    var cartItemJSON = JSON.stringify(cartItem);

    var cartArray = new Array();
    // If javascript shopping cart session is not empty
    if (sessionStorage.getItem('shopping-cart')) {
        cartArray = JSON.parse(sessionStorage.getItem('shopping-cart'));
    }
    cartArray.push(cartItemJSON);

    var cartJSON = JSON.stringify(cartArray);
    sessionStorage.setItem('shopping-cart', cartJSON);
    showCartTable();
}


function emptyCart() {
    if (sessionStorage.getItem('shopping-cart')) {
        // Clear JavaScript sessionStorage by index
        sessionStorage.removeItem('shopping-cart');
        showCartTable();
    }
}


function showCartTable() {
    var cartRowHTML = "";
    var grandTotal = 0;
    var itemCount = 0;

    var price = 0;
    var quantity = 0;
    var subTotal = 0;

    if (sessionStorage.getItem('shopping-cart')) {
        var shoppingCart = JSON.parse(sessionStorage.getItem('shopping-cart'));
        itemCount = shoppingCart.length;

        //Iterate javascript shopping cart array
        shoppingCart.forEach(function (item) {
            var cartItem = JSON.parse(item);
            price = parseFloat(cartItem.price);
            quantity = parseInt(cartItem.quantity);
            subTotal = price * quantity

            cartRowHTML += '<div class="col-lg-2 mt-3">' +
                '<i class="fa fa-trash-o remove"></i>' +
                '<div class="product-item card" style="width: 18rem;">' +
                '<img src="./assest/img2/' + cartItem.productName + '.jpg">' +
                '<div class="card-body">' +
                '<div class="productname card-title">' + cartItem.productName + '</div>' +
                '<div class="productname card-title"><b>Qty:</b>' + quantity + '</div>' +
                '<div class="productname card-title"><b>Total:</b>' + subTotal.toFixed(2) + '</div>' +
                '</div>' +
                '</div>' +
                '</div>';

            grandTotal += subTotal;
        });
    }

    $('#cartTableBody').html(cartRowHTML);
    $('#itemCount').text(itemCount);
    $('#totalAmount').text(grandTotal.toFixed(2));
};



    function payCart() {
        var answer = document.querySelector(".ans").innerText;
        var hide = document.querySelector("#hide");
        $('.amtpaid').text(answer);
        if (answer <= 50000.00) {
            alert("Transation successfully completed");
            $('.amtpaid').text(answer);
            hide.classList.remove("select");

        }
        else {
            alert("Amount is Invalid.Enter below $50,000");
        }
    };


