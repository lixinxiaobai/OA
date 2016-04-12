<!DOCTYPE html>
<html lang="zh-cn" data-ng-app="login">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="app, responsive, angular, bootstrap, dashboard, admin">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <title data-ng-bind="pageTitle()">{{ Config::get('app.name') }} - @section('title')</title>
    @include('partial.link')
</head>
<body >
<div ui-view id="app" ></div>
    @include('partial.script')
</body>
<script>
    var app = angular.module("login", ['ui.router']);
    app.config(function ($stateProvider, $urlRouterProvider) {

        $urlRouterProvider.when("", "/Login");

        $stateProvider.state("Login", {
                    url: "/Login",
                    templateUrl: "views/login_login.html"
                });
    });
</script>
</html>