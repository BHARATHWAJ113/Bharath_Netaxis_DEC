var app = angular.module("myApp", []);

app.controller("myCtrl", [
  "$scope",
  "$http",
  "$window",
  function (scope, http,) {
    http.get("./assets/user.json").then((response) => {
      scope.userData = response.data.user;
      // scope.movieData = response.data.movies;
      // scope.bevarData = response.data.bevarage;
      console.log(scope.userData);
      // console.log(scope.movieData);
      arr.push(scope.userData);
      // arr1.push(scope.movieData)
      // arr3.push(scope.bevarData)
      // console.log(arr);

      scope.username = "";
      scope.password = "";
      scope.mylogin1 = () => {
        for (var i = 0; i < arr[0].length; i++) {
          if (
            arr[0][i].username == scope.username &&
            arr[0][i].Password == scope.password
          ) {
            scope.details = true;
            scope.button = false;
            scope.login = false;
            scope.signup = false;
          }
        }
      };
    });
    scope.button = true;
    scope.login = true;
    scope.signup = false;
    scope.details = false;
    scope.transaction = false;
    scope.myLogin = function () {
      scope.login = !scope.login;
      scope.signup = false;
    };
    scope.mySignup = function () {
      scope.signup = !scope.signup;
      scope.login = false;
    };
    scope.mysignup1 = function () {
      var User_Name = scope.newusername;
      var password = scope.newpassword;
      var email_id = scope.newemail;
      arr[0].push({
        username: User_Name,
        email_id: email_id,
        Password: password,
      });
      if (scope.newusername && scope.newpassword && scope.newemail !== "") {
        scope.details = true;
        scope.login = false;
        scope.signup = false;
        scope.button = false;
      }
    };
    scope.tickets = arr1;
    // console.log(scope.tickets);
    scope.shows = false;
    scope.bevaragess = false;
    scope.myshow = function () {
      scope.shows = !scope.shows;
      scope.bevaragess = false;
    };
    scope.myBevarage = function () {
      scope.bevaragess = !scope.bevaragess;
      scope.shows = false;
    };
   
    scope.price = 0;
    scope.amountbtn = true;
    scope.totals = false;
    scope.total = 0;
    scope.myMovies = function (x) {
      scope.price = x.Per_ticket;
      scope.name = x.movie_name;
      scope.totals = true;
      scope.movieAmt = function () {
        let text;
        if (x.Available_tickets < scope.quantity) {
          scope.amountbtn = false;
          text = "**Available ticket is less**";
          
        } else {
          scope.amountbtn = true;
          text = "";
        }
        document.getElementById("demo").innerHTML = text;
      };
    };
    scope.pay = function () {
      if (scope.quantity > 0) {
        scope.transaction = !scope.transaction;
        scope.shows = false;
        scope.bevaragess = false;
        scope.btns = true;
      }
    };
    scope.bevarages = arr2;
    scope.total2 = 0;
    scope.total = 0;
   
  },
]);
var arr = [];
function bTotl(){
    var namet = $('#hi').html();
    var tickett = $('#tickettotal').html();
    var total = parseInt(namet) + parseInt(tickett)
    console.log(total);
    document.getElementById("btotal").innerHTML = namet;
    document.getElementById("btota").innerHTML = namet;
    document.getElementById("ftotal").innerHTML = total;

};
function bTot(){
  var hide =document.querySelector("#hide");
  var show =document.querySelector("#show");
  hide.classList.add("hide");
  show.classList.remove("hide");
  var namet = $('#hi').html();
  var tickett = $('#tickettotal').html();
  var total = parseInt(namet) + parseInt(tickett)
  console.log(total);
  document.getElementById("btotal").innerHTML = namet;
  document.getElementById("btota").innerHTML = namet;
  document.getElementById("ftotal").innerHTML = total;

  
};

var arr1 = [
  {
    movie_name: "Varisu",
    Available_tickets: 9,
    Per_ticket: 200,
    time: "12:45pm",
  },
  {
    movie_name: "Thunivu",
    Available_tickets: 6,
    Per_ticket: 150,
    time: "1:15pm",
  },
  {
    movie_name: "Leo",
    Available_tickets: 10,
    Per_ticket: 500,
    time: "3:00pm",
  },
];
var arr2 = [
  
  {
    items: "Popcorn",
    rate: 150,
    quantity: 0,
  }
];
// var arr3 = []
var arr4 = [];
