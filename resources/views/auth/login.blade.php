@extends('partial.base')
@section('script')
    @parent
    <script>
        var app = angular.module("oa-app", ['ui.router']);
        app.directive("csrfLogin", function() {
            return {
                template : '{!! csrf_field() !!}'
            };
        });

        app.directive("errors", function() {
            return {
                restrict: 'E',
                template: '<div ng-show="errors" class="alert alert-danger"><ul><li ng-repeat="item in errors" ng-bind="item"></li></ul></div>',
                link:function(scope){
                            @if (count($errors) > 0)
                                var errors = angular.fromJson('{!! json_encode($errors->all()) !!}');
                    scope.errors = errors;
                    @endif
                }
            };
        });

        app.controller('AppCtrl',function($scope){
            $scope.app = {
                name: 'XX牌OA管理系统',
                version: '1.0',
                layout: {
                    isNavbarFixed: true,
                    logo: 'assets/images/logo.png'
                }
            };
        });

        app.config(function ($stateProvider, $urlRouterProvider) {
            $urlRouterProvider.when("", "/Login");
            $stateProvider.state("Login", {
                url: "/Login",
                templateUrl: "assets/views/login_login.html"
            });
        });
    </script>
@stop
