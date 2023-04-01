let App = angular.module("myApp", ["ngRoute"]);

// Routing
App.config(function ($routeProvider) {
    $routeProvider
      .when("home", {
        templateUrl: "route/first.html",
        controller: "mainController",
      })
  
      .when("/second", {
        templateUrl: "./route/second.html",
        controller: "secondController",
      });
   
  });
//   Controllers
App.controller("mainController", ["$scope", function ($scope) {}]);

App.controller("secondController", [
  "$scope",
  function ($scope) {
    $scope.name = "Hello Developer!!!";
  },
]);


App.directive("userSearch", function () {
  return {
    template: "<h1>Hello</h1>",
    replace: true,
  };
});
