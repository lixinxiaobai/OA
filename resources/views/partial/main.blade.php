@extends('partial.login')
@section('link')
    @parent
    <link rel="stylesheet" href="{{ asset('bower_components/themify-icons/themify-icons.css') }}" /><!-- Loading Bar -->
    <link rel="stylesheet" href="{{ asset('bower_components/angular-loading-bar/build/loading-bar.min.css') }}" /><!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('bower_components/animate.css/animate.min.css') }}" /><!-- Clip-Two CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" /><!-- Clip-Two Theme -->
    <link rel="stylesheet" data-ng-href="{{ asset('css/themes/theme-1.css') }}" />
@stop
@section('script')
    @parent
    <script src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-animate/angular-animate.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>
    <script src="{{ asset('bower_components/ngstorage/ngStorage.min.js') }}"></script>
    <!-- oclazyload -->
    <script src="{{ asset('bower_components/oclazyload/dist/ocLazyLoad.min.js') }}"></script>
    <!-- breadcrumb -->
    <script src="{{ asset('bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-loading-bar/build/loading-bar.min.js') }}"></script>
    <!-- Angular Scroll -->
    <script src="{{ asset('bower_components/angular-scroll/angular-scroll.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/config.constant.js') }}"></script>
    <script src="{{ asset('js/config.router.js') }}"></script>
@stop