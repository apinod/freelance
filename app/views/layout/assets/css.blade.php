

<link rel="stylesheet" href="/packages/fonts/font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/packages/styles/adminica/colours.css">

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
{{-- <link rel="stylesheet" href="/packages/styles/plugins/all/plugins.css"> --}}
{{-- <link rel="stylesheet" href="/packages/styles/adminica/all.css"> --}}

<link rel="stylesheet" href="/packages/styles/adminica/main.css">
<link rel="stylesheet" href="/packages/styles/adminica/grid.css">
<link rel="stylesheet" href="/packages/styles/adminica/mobile.css">

<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="/packages/styles/plugins/bootstrap/bootstrap-2.3.1.css">

<link rel="stylesheet" href="/packages/styles/themes/skin_light.css">
{{-- <link rel="stylesheet" href="/packages/styles/themes/layout_fixed.css"> --}}
<link rel="stylesheet" href="/packages/styles/themes/theme_green.css">
<link rel="stylesheet" href="/packages/styles/themes/nav_top.css">

<style>
	.navbar.navbar-fixed-top .container-fluid,
	.navbar.navbar-fixed-bottom .container-fluid{
		width: 98% !important;
		margin: auto;
	}
	.space-10 {
		margin: 10px;
		overflow: hidden;
	}
	.space-20 {
		margin: 20px;
		overflow: hidden;		
	}	
	.menu-li {
		padding-left: 8px!important;
		padding-right: 8px!important;
	}
	#main_container {
		min-height: 400px;
	}
	body{
	  font: 12px sans-serif;
	  color: #333;
	}
	a:focus {
	  outline: 0px dashed;
	}
	hr {
	  border: 0 #ccc solid;
	  border-top-width: 1px;
	  clear: both;
	  height: 0;
	}	
	h1 {
	  font-size: 20px;
	}
	h2 {
	  font-size: 18px;
	}
	h3 {
	  font-size: 14px;
	}
	h4 {
	  font-size: 12px;
	}
	h5 {
	  font-size: 12px;
	}
	h6 {
	  font-size: 12px;
	}
	ol {
	  list-style: decimal;
	}
	p,
	dl,
	hr,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	ol,
	ul,
	pre,
	table,
	address {
	  margin-bottom: 10px;
	  -webkit-text-size-adjust: none;
	}
	.block h1,
	.block h2,
	.block h3,
	.block h4,
	.block h5,
	.block h6 {
	  color: #333;
	  margin-top: 15px;
	}
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	fieldset > label {
	  font-family: 'Open Sans', sans-serif;
	}	
	.block h1,
	.block h2,
	.flat_area h1,
	.flat_area h2,
	.flat_area h3,
	.flat_area h4,
	.flat_area h5,
	.flat_area h6 {
	  letter-spacing: -1px !important;
	  font-family: 'Open Sans', sans-serif;
	  margin-bottom: 15px;
	}
	.block h3,
	.block h4,
	.block h5,
	.flat_area h3,
	.flat_area h4,
	.flat_area h5 {
	  margin-bottom: 10px;
	}
	.block p,
	.flat_area p {
	  color: #666;
	  line-height: 20px;
	  margin: 0 0 10px;
	}
	.block p strong,
	.flat_area p strong {
	  color: #333;
	}
	.block ul,
	.block ol,
	.flat_area ul,
	.flat_area ol {
	  list-style-position: inside;
	  padding: 0;
	}
	.block ul,
	.block ol {
	  margin-bottom: 15px;
	}
	.flat_area ul,
	.flat_area ol {
	  margin-bottom: 5px;
	}
	.block > ul > li,
	.block > ol > li,
	.block > .section > ul > li,
	.block > .section > ol > li {
	  color: #666;
	  line-height: 24px;
	  padding: 0px 0;
	  margin: 0;
	  border-bottom: 1px solid #eee;
	}
	.flat_area ul li,
	.flat_area ul li {
	  color: #666;
	  padding: 5px 0;
	  margin: 0;
	  border-bottom: 1px solid #eee;
	}
	.block ul li:first-child,
	.block ol li:first-child,
	.flat_area ul li:first-child,
	.flat_area ul li:first-child {
	  padding-top: 0;
	}
	.flat_area small {
	  font-size: 12px;
	  color: #666;
	  font-weight: normal;
	  letter-spacing: 0;
	}
	.flat_area a {
	  font-weight: bold;
	}
	.flat_area h2 {
	  border: none;
	  background: none;
	  border-bottom: 1px solid #ccc;
	  padding: 2px 5px 10px;
	  box-shadow: 0 1px 0 #fff;
	}
</style>
@yield('append_css')

{{-- 
<link rel="stylesheet" href="/packages/styles/adminica/reset.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

<link rel="stylesheet" href="/packages/styles/plugins/all/plugins.css">
<link rel="stylesheet" href="/packages/styles/adminica/all.css">

<link rel="stylesheet" href="/packages/styles/themes/skin_light.css">
<link rel="stylesheet" href="/packages/styles/themes/nav_top.css">
<link rel="stylesheet" href="/packages/styles/themes/theme_green.css">

<link rel="stylesheet" href="/packages/styles/adminica/colours.css"> --}}