(function (pWindow) {

	/*===================== creating default values =============*/
	const mainArray = [];
	let CustomList = function (pId, options) {
		if (!(this instanceof CustomList)) {
			return new CustomList(pId, options);
		}
		this.domEl = document.getElementById(pId);
		this.options = options || {};
		mainArray.push(options);
		this.displayList();
	};
	/*==================== Validate User  ================*/
	$("#submit").click(function () {
		var unameO = $('#uname').val();

		var uname = unameO.toUpperCase();
		data.forEach(function (value) {
			// console.log(value.Username);
			// console.log(uname);
			if (uname != '') {
				if (value.Username === uname) {


					var hide = document.querySelector("#hide");
					var show = document.querySelector("#show");
					hide.classList.add("select");
					show.classList.remove("select");
					// console.log(uname);
					$('#un').text(uname);
					nameUser.push(value.Username);
				}
				else {
					console.log("The Username is Invalid")
				}
			}
			else {
				console.log("Please Enter the UserName!!")

			}
		});

	});


	/*==================== creating new list ================*/

	CustomList.prototype.displayList = function () {
		var arrLinks = mainArray[0].data.ProductCollection;
		arr.push(arrLinks);
		var grid = document.getElementById("productList");
		var grid2 = document.getElementById("cartList");
		// console.log(grid);
		// console.log(arrLinks);

		/*======================Listing the Product data=====================*/
		arrLinks.forEach(studData)
		function studData(element) {
			// console.log(element);

			var stuDataInHtml = `<div class="div col-lg-3 col-md-4 col-sm-6">
	<div class="cardg userprofile text-center bg-warning p-3">
	<div class="userpic"> <img src="${element.ProductPicUrl}" alt=""class="userpicimg"></div>
	<h3 class="username">${element.Name}</h3>
	<p>${element.ProductId}</p>
	<p>${element.Description}</p>
	<div class="Price">Price :${element.Price}</div>
									  <div class="price select">${element.Price}</div>
									  </div>
									  </div>`;
			grid.innerHTML += stuDataInHtml;

		};
		$(".div").click(myfunc);
		function myfunc(event) {
			var i = $(event.currentTarget).index();
			var element = arr[0][i];
			// console.log(element);
			grid2.innerHTML += `<div class="div col-lg-3 col-md-4 col-sm-6">
			<div class="cardg userprofile  addcart  text-center bg-warning p-3">
			<div class="userpic"> <img src="${element.ProductPicUrl}" alt=""class="userpicimg"></div>
			<div class="username h3">Name : ${element.Name}</div>
				<div class="Price">Price :${element.Price}</div>
				<div>Product ID :${element.ProductId}</div>
			</div>
			</div>`;

			/*======================Push Cart List  Function=====================*/
			// data.forEach((element,index) => {
			// let newProducts = element.Product

			// });
			$(".div").click(addFunc(this));
			function addFunc(element) {
				var productParent = $(element).closest('div.div');
				var productParentun = $(element).closest('div.user');
				// console.log(productParent);
				var itemName = $(productParent).find('.username').text();
				var price = $(productParent).find('.price').text();
				var userName = $(productParentun).find('.un').text();


				var cartItem = {
					userName: userName,
					itemName: itemName,
					price: price
				}

				cartArray.push(cartItem)
				var update = data[0].Product;
				update.push(cartArray);
				// console.log(cartArray);
				console.log(update[0]);

				// console.log(cartArray);

				// cartArray.forEach(newData)
				// function newData(elements) {
					// if (elements.userName === nameUser[0]) {
						// var update = data[0].Product;
						// update.push(cartArray[0]);
						// console.log(update);
				// 	}
				// 	else {
				// 		console.log("Okk.. Check the Push cart function in pluginfile.js");
				// 	}
				// }

			}

			/*======================Push data in new array Function=====================*/

		}

	}

	// console.log(data);


	/*======================Search box Function=====================*/

	document.getElementById("search-container").addEventListener("keyup", () => {
		let searchInput = document.getElementById("search-input").value;
		let elements = document.querySelectorAll(".username");
		let cards = document.querySelectorAll(".div");
		// console.log(elements);
		elements.forEach((element, index) => {
			let usernamedata = element.innerText.toUpperCase();
			// console.log(element.innerText);
			// console.log(element);
			if (usernamedata.includes(searchInput.toUpperCase())) {

				cards[index].classList.remove("select");

			} else {

				cards[index].classList.add("select");
			}
		});
	});




	pWindow.CustomList = CustomList;
})(window)
const nameUser = [];
var cartArray = [];

var arr = [];
var data = [
	{
		Username: 'BHARATH',
		Product: []
	},
	{
		Username: 'DHARANI',
		Product: []
	},
	{
		Username: 'ALAN',
		Product: []
	},
	{
		Username: 'MESHA',
		Product: []
	}
];

function userListbtn() {
	var view = document.querySelector("#userListhide");
	var hide = document.querySelector("#show");
	hide.classList.add("select");
	view.classList.remove("select");
}

// function emptyCart() {
// 	if (sessionStorage.getItem('cartList')) {
// 		sessionStorage.removeItem('cartList');
// 		// showCartTable();
// 	}
// }

function home() {
	// login page
	var show = document.querySelector("#hide");
	var hide = document.querySelector("#userListhide");
	hide.classList.add("select");
	show.classList.remove("select");



}
/*======================Show Cart Table=====================*/
function bharath() {
	var cartRowHTML = "";
	var grandTotal = 0;

	var u1name = "";
	var itemName = "";
	var price = 0;

	// if (sessionStorage.getItem('cartListt')) {
	// var shoppingCart = JSON.parse(sessionStorage.getItem('cartListt'));
	var shoppingCart = data[0].Product[0]
	console.log(shoppingCart);
	shoppingCart.forEach(function (item) {



		// var cartItem = JSON.parse(item);
		// console.log(nameUser[0]);
		// console.log(item.Username);
		// console.log(shoppingCart);
		if (nameUser[0] === item.userName) {
			var cartItem = item;
			u1name = cartItem.userName;
			itemName = cartItem.itemName;
			price = parseInt(cartItem.price);


			cartRowHTML += '<div class="col-lg-4 m-3">' +
				'<div class="product-item card" style="width: 18rem;">' +
				'<div class="card-body m-3">' +
				'<div class="u1Name card-title"><b>' + cartItem.itemName + '</b></div>' +
				'<div class="productName card-title"><b>' + cartItem.price + '</b></div>' +
				'</div>' +
				'</div>' +
				'</div>';

			grandTotal += price;
		}
		else {
			console.log("error");
		}


	});
	$('#userProductList').html(cartRowHTML);
	$('#totalAmount').text(grandTotal);
}

