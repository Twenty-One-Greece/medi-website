var app = angular.module("myApp", [
    "ngRoute",
    'lr.upload'
])

app.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "views/main.html",
            controller: 'main'
        })
        .when("/ads", {
            templateUrl: "views/adsListing.html",
            controller: 'adsListing'
        })
        .when("/ad/:adId", {
            templateUrl: "views/adInfo.html",
            controller: 'adInfo'
        })
        .when("/login", {
            templateUrl: "views/login.html",
            controller: 'login'
        })
        .when("/register", {
            templateUrl: "views/register.html",
            controller: 'register'
        })
        .when("/dashboard", {
            templateUrl: "views/dashboard.html",
            controller: 'dashboard'
        })
        .when("/new", {
            templateUrl: "views/new.html",
            controller: 'new'
        })
})