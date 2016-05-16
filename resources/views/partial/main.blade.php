@extends('partial.base')
@section('link')
    @parent
    <link rel="stylesheet" href="{{ asset('bower_components/themify-icons/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('bower_components/angular-loading-bar/build/loading-bar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bower_components/animate.css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
    <link rel="stylesheet" data-ng-href="{{ asset('assets/css/themes/theme-1.css') }}" />
@stop
@section('script')
    @parent
    <!-- Fastclick -->
    <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}" ></script>
    <!-- Angular -->
    <script src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-animate/angular-animate.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-touch/angular-touch.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}" ></script>
    <!-- Angular storage -->
    <script src="{{ asset('bower_components/ngstorage/ngStorage.min.js') }}" ></script>
    <!-- Angular Translate -->
    <script src="{{ asset('bower_components/angular-translate/angular-translate.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-translate-loader-url/angular-translate-loader-url.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-translate-storage-local/angular-translate-storage-local.min.js') }}" ></script>
    <script src="{{ asset('bower_components/angular-translate-storage-cookie/angular-translate-storage-cookie.min.js') }}" ></script>
    <!-- oclazyload -->
    <script src="{{ asset('bower_components/oclazyload/dist/ocLazyLoad.min.js') }}" ></script>
    <!-- breadcrumb -->
    <script src="{{ asset('bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js') }}" ></script>
    <!-- Loading Bar -->
    <script src="{{ asset('bower_components/angular-loading-bar/build/loading-bar.min.js') }}" ></script>
    <!-- Angular Scroll -->
    <script src="{{ asset('bower_components/angular-scroll/angular-scroll.min.js') }}" ></script>
    <!-- Clip-Two Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" ></script>
    <script src="{{ asset('assets/js/main.js') }}" ></script>
    <script src="{{ asset('assets/js/config.constant.js') }}" ></script>
    <script src="{{ asset('assets/js/config.router.js') }}" ></script>
    <!-- Clip-Two Directives -->
    <script src="{{ asset('assets/js/directives/toggle.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/perfect-scrollbar.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/empty-links.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/sidebars.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/off-click.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/full-height.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/panel-tools.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/char-limit.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/dismiss.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/compare-to.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/select.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/messages.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/chat.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/sparkline.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/touchspin.js') }}" ></script>
    <script src="{{ asset('assets/js/directives/file-upload.js') }}" ></script>
    <!-- Clip-Two Controllers -->
    <script src="{{ asset('assets/js/controllers/mainCtrl.js') }}" ></script>
    <script src="{{ asset('assets/js/controllers/bootstrapCtrl.js') }}" ></script>
@stop