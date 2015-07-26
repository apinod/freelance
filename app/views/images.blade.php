@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-image"></i>&nbsp;Images</h2>
</div>

<div class="box grid_16 no_titlebar">
	<div class="block">
		<div class="section">

			@include('layout.components.gallery')
		
		</div>
	</div>
</div>

@stop