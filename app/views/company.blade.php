@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-building-o"></i>&nbsp;Company</h2>
</div>


<div class="box grid_8">
	<h2 class="box_head">
		<div class="section no-padding">									
			<h3 style="display: inline">Account</h3>

			<button style="margin-top: 5px;" class="btn btn-warning btn-small pull-right padding-sides10" type="button"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</button>		
		</div>
	</h2>
	<div class="block">

			<fieldset class="label_side top">
				<label>Org. Name<span>Required</span></label>
				<div>
					<h3 class="text-info">Green & Associates Inc.</h3>
				</div>
			</fieldset>

			<fieldset class="label_side">
				<label>By Line<span>Required</span></label>
				<div>
					<h3 class="text-info">(123) 345-5678</h3>
				</div>
			</fieldset>

			<fieldset class="label_side">
				<label>User Name</label>
				<div class="clearfix">
					<h3 class="text-info">agreen79</h3>
				</div>
			</fieldset>
	</div>
</div>

<div class="box grid_8">
	<h2 class="box_head">Financial Stats</h2>

	<div class="block">
		<fieldset class="label_side top">
			<label># Active Donors</label>
			<div>
				<h3 class="text-info">150</h3>
			</div>
		</fieldset>

		<fieldset class="label_side">
			<label># Inactive Donors</label>
			<div>
				<h3 class="text-info">47</h3>
			</div>
		</fieldset>

		<fieldset class="label_side">
			<label>Total $ Fiscal Yr.</label>
			<div class="clearfix">
				<h3 class="text-info">$ 150,00.00</h3>
			</div>
		</fieldset>
	</div>
</div>

<div class="clearfix"></div>

<div class="box grid_8 light">
	<h2 class="box_head">		
		<div class="section no-padding">									
			<h3 style="display: inline">Month by Month Giving</h3>

			<select class="col_20">
				<option>This Fiscal Year</option>
				<option>Last Fiscal Year</option>
				<option selected="selected">This Year</option>
				<option>Last Year</option>				
			</select>		
		</div>
	</h2>

	<div class="block">
		<div class="section">

			<div id="flot_bar" class="flot"></div>

		</div>
	</div>
</div>

<div class="box grid_8 light">
	<h2 class="box_head">

		<div class="section no-padding">									
			<h3 style="display: inline">Giving by Fund</h3>

			<select class="col_20">
				<option>Daily</option>
				<option>Weekly</option>
				<option selected="selected">Monthly</option>
			</select>		
		</div>	
	</h2>

	<div class="block">
		<div class="section">

			<div id="flot_pie_1" class="flot"></div>

		</div>
	</div>
</div>

<div class="clearfix"></div>

<div class="box grid_8 light">
	<h2 class="box_head">

		<div class="section no-padding">									
			<h3 style="display: inline">Giving by Appeal</h3>

			<select class="col_20">
				<option>Daily</option>
				<option selected="selected">Weekly</option>
				<option>Monthly</option>
			</select>		
		</div>	
	</h2>

	<div class="block">
		<div class="section">

			<div id="flot_pie_2" class="flot"></div>

		</div>
	</div>
</div>

@stop

@section('append_css')
	<style type="text/css">
		.box_head h3 {
			font-family: sans-serif!important;
  			font-size: 12px!important;
		}
		select {
			float:right!important; 
			margin-top: 5px!important;
			font-family: sans-serif!important;
  			font-size: 12px!important;
		}
		.text-info {
			color: #3a87ad!important;
		}
	</style>
@append

@section('append_js')
	<script type="text/javascript">

		var T = "#9b6ca6";
		var n = [[0,5],[2,7],[4,11],[6,1],[8,8],[10,7],[12,9],[14,3]];
		var m = {colors:["#9b6ca6 ","#8d579a "]};
		var r = [[1,3],[3,8],[5,5],[7,13],[9,8],[11,5],[13,8],[15,5]];
		var c = {colors:["#4C5766 ","#313841 "]};
		
		$.plot($("#flot_bar"),[{shadowSize:25,label:"Bar Chart 1",color:T,data:n,bars:{show:!0,fill:!0,fillColor:m,lineWidth:0,border:!1}},{shadowSize:25,label:"Bar Chart 2",color:"#4C5766",data:r,bars:{show:!0,fill:!0,fillColor:c,lineWidth:0,border:!1}}],{grid:{show:!0,aboveData:!1,backgroundColor:{colors:["#fff","#eee"]},labelMargin:15,borderWidth:1,borderColor:"#cccccc",clickable:!0,hoverable:!0,autoHighlight:!0,mouseActiveRadius:10},legend:{show:!0,labelBoxBorderColor:"#fff",noColumns:5,margin:10,backgroundColor:"#fff"}});

		// $.plot($("#flot_line"),[{shadowSize:5,label:"Line Chart 1",color:w,data:e,lines:{show:!0,fill:!0,fillColor:y,lineWidth:4}},{shadowSize:5,label:"Line Chart 2",color:S,data:n,lines:{show:!0,fill:!1,lineWidth:4},points:{show:!0,fill:!1,lineWidth:2}}],{grid:{show:!0,aboveData:!1,backgroundColor:{colors:["#fff","#eee"]},labelMargin:15,borderWidth:1,borderColor:"#cccccc",clickable:!0,hoverable:!0,autoHighlight:!0,mouseActiveRadius:10},legend:{show:!0,labelBoxBorderColor:"#fff",noColumns:5,margin:10,backgroundColor:"#fff"}})		
		// $.plot($("#flot_points"),[{shadowSize:10,label:"Points Chart",color:w,data:o,points:{show:!0,fill:!0,fillColor:"#ffffff",lineWidth:3},lines:{show:!0,fill:!0,fillColor:c,lineWidth:5}}],{grid:{show:!0,aboveData:!1,backgroundColor:{colors:["#fff","#eee"]},labelMargin:15,borderWidth:1,borderColor:"#cccccc",clickable:!0,hoverable:!0,autoHighlight:!0,mouseActiveRadius:10},legend:{show:!0,labelBoxBorderColor:"#fff",noColumns:5,margin:10,backgroundColor:"#fff"}})		

		var f = [{label:"Slice 1",data:[[1,117]],color:"#122b45"},{label:"Slice 2",data:[[1,30]],color:"#064792"},{label:"Slice 3",data:[[1,44]],color:"#4C5766"},{label:"Slice 4",data:[[1,90]],color:"#9e253b"},{label:"Slice 5",data:[[1,70]],color:"#8d579a"},{label:"Slice 6",data:[[1,80]],color:"#2b4356"}];
		$.plot($("#flot_pie_1"),f,{series:{pie:{innerRadius:0,show:!0},grid:{hoverable:!0,clickable:!0}}});
		
		var f1 = [{label:"Slice 2",data:[[1,30]],color:"#064792"},{label:"Slice 3",data:[[1,44]],color:"#4C5766"},{label:"Slice 4",data:[[1,90]],color:"#9e253b"},{label:"Slice 6",data:[[1,80]],color:"#2b4356"}];		
		$.plot($("#flot_pie_2"),f1,{series:{pie:{innerRadius:0,show:!0},grid:{hoverable:!0,clickable:!0}}});		
	</script>
@append