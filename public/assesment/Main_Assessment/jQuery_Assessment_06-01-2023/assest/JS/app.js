$(document).ready(function () {
    var data = [{
        Username: "Bharath",
        image: "./assest/img/userm.png",
        Product: ["Bike", "car"],
        price: 100000,
    },
    {
        Username: "Dharani",
        image: "./assest/img/userf.png",
        Product: ["Pen", "Pencil"],
        price: 10000,
    },
    {
        Username: "Mokesh",
        image: "./assest/img/userm.png",
        Product: ["Orange", "Apple"],
        price: 20000,
    },
    {
        Username: "Hari",
        image: "./assest/img/userf.png",
        Product: ["Cake", "Biscuit"],
        price: 40000,
    },
    {
        Username: "Hema",
        image: "./assest/img/userf.png",
        Product: ["Bun", "Dates"],
        price: 20000,
    },
    {
        Username: "Pavan",
        image: "./assest/img/userm.png",
        Product: ["Milke", "Honey"],
        price: 40000,
    },
    {
        Username: "Thou",
        image: "./assest/img/userm.png",
        Product: ["Brinjal", "Carrot"],
        price: 60000,
    },
    {
        Username: "Giri",
        image: "./assest/img/userm.png",
        Product: ["Onion", "Beans"],
        price: 80000,
    },
    {
        Username: "Ram",
        image: "./assest/img/userm.png",
        Product: ["grapes", "apple"],
        price: 90000,
    },
    {
        Username: "Elwin",
        image: "./assest/img/userm.png",
        Product: ["Lemon", "Pineapple"],
        price: 50000,
    }];

    showProductGallery(data);

});



function showProductGallery(data) {

    $("#submit").click(function () {

        var uname = $('#uname').val();
        // var newdata = data.find(function (item) {
        var datax = "";
        console.log(data);
        data.forEach(function (value) {
            if (uname != '') {
                if (value.Username != uname) {
                    datax += '<div class="col-lg-4 mt-3"  >' +
                        '<div class="product-item card" style="width: 18rem;">' +
                        '<img src="' + value.image + '" class="img">' +
                        '<div class="card-body">' +
                        '<div class="productName card-title">' + value.Username + '</div>' +
                        '<div class="itemname card-title"><b>Products:</b><span>' + value.Product + '</span></div>' +
                        '<div class="price card-title"><b>Total: </b><span>' + value.price + '</span></div>' +
                        '<input type="number" class="length" name="quantity" placeholder="How Many Product?" size="2" />' +
                        '<input type="submit" value="Add to Cart" class="add-to-cart btn btn-primary" onClick="addToCart(this)" />' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                    var hide = document.querySelector("#hide");
                    var show = document.querySelector("#show");
                    hide.classList.add("select");
                    show.classList.remove("select");
                    // console.log(value.Username,value.price);
                }
            }
            else {
                alert("Please enter the UserName!!")
            }
        });
        $('#printdata').html(datax);

    });
}
function emptyCart() {
    if (sessionStorage.getItem('shopping-cart')) {
        sessionStorage.removeItem('shopping-cart');
        showCartTable();
    }
}

function addToCart(element) {
    var productParent = $(element).closest('div.product-item');

    var price = $(productParent).find('.price span').text();
    var userName = $(productParent).find('.productName').text();
    var itemName = $(productParent).find('.itemname').text();
    var quantity = $(productParent).find('.length').val();

    var cartItem = {
        userName: userName,
        itemName: itemName,
        price: price,
        quantity: quantity
    };


    var cartItemJSON = JSON.stringify(cartItem);

    var cartArray = new Array();
    if (sessionStorage.getItem('shopping-cart')) {
        cartArray = JSON.parse(sessionStorage.getItem('shopping-cart'));
    }
    cartArray.push(cartItemJSON);

    var cartJSON = JSON.stringify(cartArray);
    sessionStorage.setItem('shopping-cart', cartJSON);
    showCartTable();

};
function showCartTable() {
    var cartRowHTML = "";
    var grandTotal = 0;

    var u1name = "";
    var itemName = "";
    var price = 0;
    var quantity = 0;
    var subTotal = 0;

    if (sessionStorage.getItem('shopping-cart')) {
        var shoppingCart = JSON.parse(sessionStorage.getItem('shopping-cart'));

        shoppingCart.forEach(function (item) {
            var cartItem = JSON.parse(item);
            u1name = cartItem.userName;
            itemName = cartItem.itemName;
            price = parseFloat(cartItem.price);
            quantity = parseInt(cartItem.quantity);
            subTotal = price * quantity


            cartRowHTML += '<div class="col-lg-4 m-3">' +
                '<div class="product-item card" style="width: 18rem;">' +
                '<div class="card-body">' +
                '<div class="u1Name card-title">' + cartItem.userName + '</div>' +
                '<div class="productName card-title">' + cartItem.itemName + '</div>' +
                '<div class="quantity card-title"><b>Qty:</b>' + quantity + '</div>' +
                '<div class="total card-title"><b>Total:</b>' + subTotal.toFixed(2) + '</div>' +
                '</div>' +
                '</div>' +
                '</div>';

            grandTotal += subTotal;

        });
    }

    $('#cartTableBody').html(cartRowHTML);
    $('#totalAmount').text(grandTotal.toFixed(2));
};
function buy() {
    var view = document.querySelector("#shopping-cart");
    var hide = document.querySelector("#show");
    hide.classList.add("select");
    view.classList.remove("select");
}
function back() {
    var view = document.querySelector("#shopping-cart");
    var hide = document.querySelector("#show");
    hide.classList.remove("select");
    view.classList.add("select");
}
function payCart() {
    var view = document.querySelector("#shopping-cart");
    var hide = document.querySelector("#trans");
    hide.classList.remove("select");
    view.classList.add("select");
}