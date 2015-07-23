
<link rel="stylesheet" href="/packages/styles/adminica/main.css">
<link rel="stylesheet" href="/packages/styles/adminica/grid.css">
<link rel="stylesheet" href="/packages/styles/adminica/mobile.css">

<link rel="stylesheet" href="/packages/styles/plugins/bootstrap/bootstrap-2.3.1.css">

<!-- Style Switcher

The following stylesheet links are used by the styleswitcher to allow for dynamically changing the Adminica layout, nav, skin, theme and background.
Styleswitcher documentation: http://style-switcher.webfactoryltd.com/documentation/

layout_switcher.php	: layout - fluid by default.								(eg. styles/themes/layout_switcher.php?default=layout_fixed.css)
nav_switcher.php	: header and sidebar nav  positioning - sidebar by default.	(eg. styles/themes/nav_switcher.php?default=header_top.css)
skin_switcher.php 	: Adminica skin - dark by default.							(eg. styles/themes/skin_switcher.php?default=theme_light.css)
theme_switcher.php 	: colour theme - black/grey by default.						(eg. styles/themes/theme_switcher.php?default=theme_red.css)
bg_switcher.php 	: background image - dark boxes by default.					(eg. styles/themes/bg_switcher.php?default=bg_honeycomb.css)	-->

<link rel="stylesheet" href="/packages/styles/themes/skin_light.css">
<link rel="stylesheet" href="/packages/styles/themes/theme_green.css">
{{-- <link rel="stylesheet" href="/packages/styles/themes/layout_fixed.css"> --}}
<link rel="stylesheet" href="/packages/styles/themes/nav_top.css">
{{--
<link rel="stylesheet" href="styles/themes/nav_switcher.php?default=switcher" >
<link rel="stylesheet" href="styles/themes/bg_switcher.php?default=switcher.css" > --}}

{{-- <link rel="stylesheet" href="styles/themes/switcher.css"> <!-- Styles for the styleswitcher bar  --> --}}
<link rel="stylesheet" href="/packages/styles/adminica/colours.css"> <!-- this file overrides the theme's default colour scheme, allowing more colour combinations (see layout example page) -->


<style>
	.navbar.navbar-fixed-top .container-fluid,
	.navbar.navbar-fixed-bottom .container-fluid{
		width: 90% !important;
		margin: auto;
	}
</style>
@yield('append_css')