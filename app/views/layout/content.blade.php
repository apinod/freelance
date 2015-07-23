
<div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1" class="has_fixed_bar">

	@include('layout.header')
	
	<div id="main_container" class="main_container container_16 clearfix">
		
		@include('layout.components.tab-menu')

		<div class="flat_area grid_16">
			<h2>Dashboard
				<small>- Welcome to Adminica.</small>
				<div class="holder">
				</div>
			</h2>
		</div>

		@yield("content")

	</div>
</div>