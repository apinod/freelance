<div id="pjax">
	<div id="wrapper" class="has_fixed_bar" data-adminica-nav-top="1" data-adminica-side-top="1">

		@include('layout.header')
	
		<div id="main_container" class="main_container container_16 clearfix">
			
			@include('layout.components.tab-menu')

			@yield("content")

		</div>

	</div>
</div>