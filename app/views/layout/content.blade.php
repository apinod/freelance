<div id="pjax">
	<div id="wrapper" class="has_fixed_bar" data-adminica-nav-top="1" data-adminica-side-top="1">

		@include('layout.header')
	
		<div id="main_container" class="main_container container_16 clearfix">
			
			@if(empty($no_bootstrap))			
				@include('layout.components.tab-menu')
			@endif

			@yield("content")

			<div class="space-20"></div>
		</div>

	</div>
</div>