<!doctype html public "✰">
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
        <title>Petlanthropy</title>
        {{-- <meta name="description" content="http://themeforest.net/item/adminica-the-professional-admin-template/160638">
        <meta name="author" content="Oisin Lavery - Tricycle Labs">        --}} 
        
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1;">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />


        {{--Includes default css for layout --}}
        <link rel="stylesheet" href="/packages/fonts/font-awesome-4.3.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="/packages/styles/adminica/reset.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

        <!-- @yield('prepend_css', '<link rel="stylesheet" href="/packages/styles/plugins/bootstrap/bootstrap-2.3.1.css">') -->

        <link rel="stylesheet" href="/packages/styles/plugins/all/plugins.css">
        <link rel="stylesheet" href="/packages/styles/adminica/all.css">

        <link rel="stylesheet" href="/packages/styles/themes/nav_top.css" >
        <link rel="stylesheet" href="/packages/styles/themes/skin_light.css">
        <link rel="stylesheet" href="/packages/styles/themes/theme_green.css" >
        <link rel="stylesheet" href="/packages/styles/adminica/colours.css">
    </head>
    <body>
        @yield('content')
        @include('layout.footer')
    </body>
</html>