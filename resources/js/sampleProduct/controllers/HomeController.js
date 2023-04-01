var app = angular.module('myApp', []); 
import axios from 'axios';
app.controller('HomeController', function($scope) {     let homeCtrl = this;
homeCtrl.name = "MyName"; 

homeCtrl.initFunction=(username)=>{
homeCtrl.chat_user = username;
}

});  
