<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('fi.headerTitleText') }}</title>

    @include('core::layouts._head')

    @include('core::layouts._js_global')

    @yield('head')

    @yield('javascript')

</head>

<!-- BODY options, add following classes to body to change options
    // Header options
    1. '.header-fixed'					- Fixed Header
    // Sidebar options
    1. '.sidebar-fixed'					- Fixed Sidebar
    2. '.sidebar-hidden'				- Hidden Sidebar
    3. '.sidebar-off-canvas'		- Off Canvas Sidebar
    4. '.sidebar-compact'				- Compact Sidebar Navigation (Only icons)
    // Aside options
    1. '.aside-menu-fixed'			- Fixed Aside Menu
    2. '.aside-menu-hidden'			- Hidden Aside Menu
    3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu
    // Footer options
    1. '.footer-fixed'						- Fixed footer
    -->

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

@include('core::layouts._header')

<div class="app-body">

    @include('core::layouts._sidebar')

    <main class="main">
        <div class="container-fluid pt-3">
            @yield('content')
        </div>
    </main>

</div>

<div id="modal-placeholder"></div>

</body>
</html>