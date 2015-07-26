
@include('layout.components.topbar')

@if(empty($no_bootstrap))
	@include('layout.components.navbar-fixed')
@endif