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
        @include('layout.assets.css')
    </head>
    <body>
{{--         @include('layout.notifications') --}}
        @include('layout.content')
        @include('layout.footer')
    </body>
</html>