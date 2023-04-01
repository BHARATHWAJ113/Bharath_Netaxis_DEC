let product = `[   

    {
        "image" : "./assest/img/cd.jpg" ,
        "Name" : "Cd-Drive" ,
        "Price" : "2000"
    },
    {
        "image" : "./assest/img/cpu.jpg" ,
        "Name" : "CPU" ,
        "Price" : "3000"
    },
    {
        "image" : "./assest/img/laptop.jpg" ,
        "Name" : "Laptop" ,
        "Price" : "5000"
    },
    {
        "image" : "./assest/img/pendrive.jpg" ,
        "Name" : "Pendrive" ,
        "Price" : "300"
    },
    {
        "image" : "./assest/img/ssd.jpg" ,
        "Name" : "SSD" ,
        "Price" : "4000"
    },
    {
        "image" : "./assest/img/watch.jpg" ,
        "Name" : "Watch" ,
        "Price" : "4000"
    },
    {
        "image" : "./assest/img/phone.jpg" ,
        "Name" : "Mobile" ,
        "Price" : "10000"
    },
    {
        "image" : "./assest/img/computer.jpg" ,
        "Name" : "Computer" ,
        "Price" : "30000"
    },
    {
        "image" : "./assest/img/tablet.jpg" ,
        "Name" : "Tab" ,
        "Price" : "10000"
    },
    {
        "image" : "./assest/img/mouse.jpg" ,
        "Name" : "Mouse" ,
        "Price" : "800"
    },
    {
        "image" : "./assest/img/keyboard.jpg" ,
        "Name" : "Keyboard" ,
        "Price" : "1000"
    },
    {
        "image" : "./assest/img/headphone.jpg" ,
        "Name" : "Headphone" ,
        "Price" : "2000"
    }
]`;
let o = JSON.parse(product);
let data = "";
for (let i = 0; i < o.length; i++) {
    {
        data += '<div class=" col-lg-2 mt-3">\<div class="card" style="width: 18rem;">\<img src="' + o[i]["image"] + '" class="card-img-top">\<div class="card-body">\<h5 class="card-title"><span>' + o[i]["Name"] + '</span></h5>\<p class="card-text">Price: <span>' + o[i]["Price"] + '</span></p>\<div class="d-grid gap-2">\<input type="number" placeholder="How Many Product?">\<button id="addtocart' + i + '" onclick="addcart(' + i + ')" class="btn btn-primary">Add to Cart</button>\</div>\</div>\</div>\</div>';
    }
    document.getElementById("card1").innerHTML = data;
};


function addcart(x) {
 
    

}













// function addcart(x) {
//     let Y = x;
//     let cartdata ="";
//     if (Y == Y) {

//         {
//             cartdata += '<div class=" col-lg-2 mt-3">\<div class="card" style="width: 18rem;"><img src="' + o[Y]["image"] + '" class="card-img-top"><div class="card-body"><h5 class="card-title"><span>' + o[Y]["Name"] + '</span></h5><p class="card-text">Price: <span>' + o[Y]["Price"] + '</span></p><div class="d-grid gap-2"><input type="number" placeholder="How Many Product?"><button id="addtocart' + Y + '" onclick="addcart(' + Y + ')" class="btn btn-primary">Add to Cart</button></div></div></div>\</div>';
//         }
//         document.getElementById("AddCart").innerHTML = cartdata;
//     };
// }







