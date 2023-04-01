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
		$(".cardg").click(myfunc);
		function myfunc(event) {
			var i = $(event.currentTarget).index();
			var element = arr[0][i];
			// console.log(element);
			grid2.innerHTML += `<div class="div col-lg-3 col-md-4 col-sm-6">
			<div class="userprofile cardg addcart  text-center bg-warning p-3">
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
			$(".addcart").click(addFunc(this));
			function addFunc(element) {
				var productParent = $(element).closest('div.cardg');
				var productParentun = $(element).closest('div.user');
				// console.log(productParent);
				var itemName = $(productParent).find('.username').text();
				var price = $(productParent).find('.price').text();
				var userName = $(productParentun).find('.un').text();


				var cartItem = {
					userName: userName,
					itemName: itemName,
					price: price
				};

				console.log(cartItem);
				var cartItemJSON = JSON.stringify(cartItem);

				var cartArray = new Array();
				if (sessionStorage.getItem('cartListt')) {
					cartArray = JSON.parse(sessionStorage.getItem('cartListt'));
				}
				cartArray.push(cartItemJSON);

				var cartJSON = JSON.stringify(cartArray);
				sessionStorage.setItem('cartListt', cartJSON);
				showCartTable();
				console.log(cartArray);
				console.log(cartItem);
			}


			/*======================UserList Buttton Function=====================*/


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


		}


	}



	pWindow.CustomList = CustomList;
})(window)
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

function emptyCart() {
	if (sessionStorage.getItem('cartListt')) {
		sessionStorage.removeItem('cartListt');
		showCartTable();
	}
}
/*======================Show Cart Table=====================*/
function showCartTable() {
	var cartRowHTML = "";
	var grandTotal = 0;

	var u1name = "";
	var itemName = "";
	var price = 0;

	if (sessionStorage.getItem('cartListt')) {
		var shoppingCart = JSON.parse(sessionStorage.getItem('cartListt'));

		shoppingCart.forEach(function (item) {
			var cartItem = JSON.parse(item);
			u1name = cartItem.userName;
			itemName = cartItem.itemName;
			price = cartItem.price;


			cartRowHTML += '<div class="col-lg-4 m-3">' +
				'<div class="product-item card" style="width: 18rem;">' +
				'<div class="card-body">' +
				'<div class="u1Name card-title">' + cartItem.userName + '</div>' +
				'<div class="productName card-title">' + cartItem.itemName + '</div>' +
				'</div>' +
				'</div>' +
				'</div>';

			grandTotal += price;

		});
	}

	$('#cartListt').html(cartRowHTML);
	$('#totalAmount').text(grandTotal);
};