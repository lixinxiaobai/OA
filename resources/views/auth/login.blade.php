@extends('partial.login')
@section('script')
    @parent
    <script>
        var app = angular.module("oa-app", ['ui.router']);
        app.config(function ($stateProvider, $urlRouterProvider) {

            $urlRouterProvider.when("", "/Login");

            $stateProvider.state("Login", {
                url: "/Login",
                templateUrl: "views/login_login.html"
            });
        });
    </script>
@stop