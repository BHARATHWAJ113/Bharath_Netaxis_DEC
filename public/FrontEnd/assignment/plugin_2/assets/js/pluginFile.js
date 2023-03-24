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

	/*==================== creating new list ================*/

	CustomList.prototype.displayList = function () {
		var arrLinks = mainArray[0].data.students;
		arr.push(arrLinks);
		var grid = document.getElementById("grid");
		var grid2 = document.getElementById("grid2");

		/*======================Listing the student data=====================*/
		arrLinks.forEach(studData)
		function studData(element) {
			// console.log(element);
			var stuDataInHtml = `<div class="div col-lg-3 col-md-4 col-sm-6">
			  						<div class="userprofile text-center bg-primary p-3">
				  						<div class="userpic"> <img src="${element.img_url}" alt="" class="userpicimg"> </div>
				  							<h3 class="username">${element.name}</h3>
				  							<p>Class: 12th</p>
			  						</div>
								</div>`;
			grid.innerHTML += stuDataInHtml;

		};
		/*======================Listing the student data while clicking the img=====================*/

		$(".div").click(myfunc);
		function myfunc(event) {
			var i = $(event.currentTarget).index();
			var element = arr[0][i];
			// console.log(element);
			grid2.innerHTML = `<div class="card">
		<div class="card-header text-center bg-warning">
			<h4><b>${'Name :' + element.name}</b></h4>
			<h5><b>${'ID :' + element.id}</b></h5>
		</div>
		<div class="card-body text-center">
			<h5 class="card-title">Student Mark Statement</h5>
			
			<table class="table table-bordered table-dark card-text">
				<thead>
					<tr>
						<th scope="col">S.no</th>
						<th scope="col">Subject</th>
						<th scope="col">Mark</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Tamil</td>
						<td>${'<input maxlength="3" class="Smark" readonly  value=' + element.m1 + '>'}</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>English</td>
						<td>${'<input maxlength="3" class="Smark" readonly  value=' + element.m2 + '>'}</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Maths</td>
						<td>${'<input maxlength="3" class="Smark" readonly  value=' + element.m3 + '>'}</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Science</td>
						<td>${'<input maxlength="3" class="Smark" readonly  value=' + element.m4 + '>'}</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Computer Science</td>
						<td>${'<input maxlength="3" class="Smark" readonly  value=' + element.m5 + '>'}</td>
					</tr>
					
				</tbody>
			</table>
		</div>




	</div>`;
			container.append(editbtn);
			container.append(savebtn);
			// editbtn
			editbtn.addEventListener("click", () => {
				$(".Smark").css("color", "rgb(255 2 0)")
				$(".Smark").removeAttr("readonly")

			})
			// savebtn
			savebtn.addEventListener("click", () => {
				$(".Smark").attr("readonly", true)
				$(".Smark").css("color", "#fdf9fd")
				arr.forEach(() => {
					arr[0][i].m1 = $(".Smark")[0].value
					arr[0][i].m2 = $(".Smark")[1].value
					arr[0][i].m3 = $(".Smark")[2].value
					arr[0][i].m4 = $(".Smark")[3].value
					arr[0][i].m5 = $(".Smark")[4].value
				});
			});

			// var hide = document.querySelector("#search-container");
			var backb = document.querySelector("#backb");
			var editb = document.querySelector("#editb");
			var saveb = document.querySelector("#saveb");
			// hide.classList.add("hide");
			backb.classList.remove("hide");
			editb.classList.remove("hide");
			saveb.classList.remove("hide");
		}

	}

	/*======================Search box Function=====================*/
	document.getElementById("search-input").addEventListener("keyup", () => {
	// function myAutoSearch() {
		let searchInput = document.getElementById("search-input").value;
		let elements = document.querySelectorAll(".username");
		let cards = document.querySelectorAll(".div");
		console.log(elements);
		elements.forEach((element, index) => {
			// console.log(element.innerText);
			console.log(element);
			if (element.innerText.includes(searchInput.toUpperCase())) {

				cards[index].classList.remove("hide");
			} else {

				cards[index].classList.add("hide");
			}
		});
	});

	/*======================Edit and Save Function =====================*/

	// var backbtn = document.querySelector("#backb");
	var editbtn = document.querySelector("#editb");
	var savebtn = document.querySelector("#saveb");


	// editbtn
	editbtn.addEventListener("click", () => {
		$(".Smark").css("color", "rgb(231 2 0)")
		$(".Smark").removeAttr("readonly")
	})
	// savebtn
	savebtn.addEventListener("click", () => {
		$(".Smark").attr("readonly", true)
		$(".Smark").css("color", "red")
		// console.log(element)
	})



	pWindow.CustomList = CustomList;
})(window)

var arr = [];
var container = document.getElementById("container");
