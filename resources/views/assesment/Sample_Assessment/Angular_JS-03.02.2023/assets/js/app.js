var app = angular.module("myApp", []);
app.controller("myCtrl", [
  "$scope",
  "$http",
  "$interval",
  function (scope, http, interval) {
    http.get("./assets/my.json").then(function (response) {
      scope.myData = response.data.login_Data;
      console.log(scope.myData);
      arr.push(scope.myData);
    });
    scope.login = true;
    scope.signup = false;
    scope.menu = false;
    scope.transaction = false;
    // scope.user = false;

    scope.myLogin = function () {
      scope.login = !scope.login;
      scope.signup = false;
      scope.menu = false;
      scope.transaction = false;
      scope.password = "";
      scope.name = "";
      scope.newname = "";
      scope.newpassword1 = "";
      scope.newaccnumber = "";
      clearInterval(timeout);
      scope.log = false;
      scope.sign = false;
    };
    scope.mySignup = function () {
      scope.signup = !scope.signup;
      scope.login = false;
      scope.transaction = false;
    //   scope.user = true;
    };
    scope.mylogin1 = () => {
      for (var i = 0; i < arr[0].length; i++) {
        if (
          arr[0][i].username == scope.username &&
          arr[0][i].Password == scope.password
        ) {
          scope.menu = true;
          scope.login = false;
          scope.signup = false;
          scope.transaction = false;
          scope.arr = arr[0];
        }
       
      }
      scope.log = true;
      scope.sign = true;
      scope.bhaname = "";
      scope.bhaaccno = "";
    };
    scope.mysignup1 = function () {
      if (scope.newname && scope.newpassword1 && scope.newaccnumber !== "") {
        scope.menu = true;
        scope.login = false;
        scope.signup = false;
        scope.transaction = false;
        scope.arr = arr[0];
      }
      scope.log = true;
      scope.sign = true;
    };
    scope.myClick = function (x) {
      scope.bhaname = x.friendLists[0].fname;
      scope.bhaaccno = x.friendLists[0].fAccount;
      bhanamee.push(scope.bhaname);
    };
    scope.myClick1 = function (x, y) {
      scope.bhaname = x;
      scope.bhaaccno = y;
    };

    scope.transfer = function () {
      if (scope.amount !== "" && scope.amount !== 0) {
        scope.amount = "";
        scope.menu = false;
        scope.login = false;
        scope.signup = false;
        scope.transaction = true;
      }
      scope.bhaname = scope.user.val()
      scope.bhaaccno = "";
      scope.user = true;
      scope.btn = false;
      timeout = interval(scope.myLogin, 2000, 1);
    };
    scope.btn = false;
    scope.emtyAmt = function () {
      if (scope.amount !== "") {
        scope.btn = true;

      } else {
        scope.btn = false;
      }
    };

  },
]);

var arr = [];
let timeout;
