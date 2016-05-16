<!DOCTYPE html>
<html lang="zh-cn" data-ng-app="oa-app">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="app, responsive, angular, bootstrap, dashboard, admin">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<title ></title> <!--data-ng-bind="pageTitle()"-->
	@yield('link')
</head>
<body ng-controller="AppCtrl">
@section('content')
<div ui-view id="app" ng-class="{'app-mobile' : app.isMobile, 'app-navbar-fixed' : app.layout.isNavbarFixed, 'app-sidebar-fixed' : app.layout.isSidebarFixed, 'app-sidebar-closed':app.layout.isSidebarClosed, 'app-footer-fixed':app.layout.isFooterFixed}" ></div>
@show
@yield('script')
</body>
</html>