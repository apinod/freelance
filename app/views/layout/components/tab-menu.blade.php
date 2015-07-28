	
@if(!empty($menu))
	<div id="nav_top" class="dropdown_menu clearfix round_top">
		<ul class="clearfix">
			<li {{ $menu == 'home' ? 'class="current"' : ''}}><a href="/home" class="menu-li"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></li>								
			<li {{ $menu == 'company' ? 'class="current"' : ''}}><a href="/company" class="menu-li"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Company</a></li>										
			<li {{ $menu == 'giving-options' ? 'class="current"' : ''}}><a href="/giving-options" class="menu-li"><i class="fa fa-list-ol"></i>&nbsp;&nbsp;Giving Options</a></li>	
			<li {{ $menu == 'pages' ? 'class="current"' : ''}}><a href="/pages" class="menu-li"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;Pages</a></li>
			<li {{ $menu == 'donors' ? 'class="current"' : ''}}><a href="/donors" class="menu-li"><i class="fa fa-user"></i>&nbsp;&nbsp;Donors</a></li>
			<li {{ $menu == 'premiums' ? 'class="current"' : ''}}><a href="/premiums" class="menu-li"><i class="fa fa-star"></i>&nbsp;&nbsp;Premiums</a></li>		
			<li {{ $menu == 'gift-cards' ? 'class="current"' : ''}}><a href="/gift-cards" class="menu-li"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Gift Cards</a></li>
			<li {{ $menu == 'codes' ? 'class="current"' : ''}}><a href="/codes" class="menu-li"><i class="fa fa-barcode"></i>&nbsp;&nbsp;Codes</a></li>
			<li {{ $menu == 'reports' ? 'class="current"' : ''}}><a href="/reports" class="menu-li"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Reports</a></li>						
			<li {{ $menu == 'communication' ? 'class="current"' : ''}}><a href="/communication" class="menu-li"><i class="fa fa-phone"></i>&nbsp;&nbsp;Communication</a></li>
			<li {{ $menu == 'utilities' ? 'class="current"' : ''}}><a href="/utilities" class="menu-li"><i class="fa fa-wrench"></i>&nbsp;&nbsp;Utilities</a></li>
			<li {{ $menu == 'images' ? 'class="current"' : ''}}><a href="/images" class="menu-li"><i class="fa fa-image"></i>&nbsp;&nbsp;Images</a></li>								
			<li><a href="/images_v1" class="menu-li"><i class="fa fa-image"></i>&nbsp;&nbsp;Images V1</a></li>
	</div><!-- #nav_top -->
@endif