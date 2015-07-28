@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-building-o"></i>&nbsp;Company</h2>
</div>


<div class="box grid_8">
	<h2 class="box_head">
		<div class="section no-padding">									
			<h3 style="display: inline">Account</h3>

			<a href="#edit_form" role="button" style="font-weight: initial; text-indent: 0px; margin-right:10px; margin-top: 5px;" class="btn btn-warning btn-small pull-right dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
			{{-- <button style="margin-top: 5px;" class="btn btn-warning btn-small pull-right padding-sides10" type="button"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</button>		 --}}
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

<form action="" method="post">
	<div class="display_none">
		<div id="dialog_form" class="dialog_content wide">
			<div class="block">		
				<div class="section">
					<h2>Donors Edit Form</h2>
					<hr>
				</div>

				<div style="height: 450px; overflow: scroll;">

					<div class="columns clearfix">

						<div class="col_50">
							<fieldset class="label_side label_small top no_lines">
								<label for="text_field_inline" class="text-right">Org.Name</label>
								<div>
									<input type="text" name="org_name">															
								</div>						

								<label for="text_field_inline" class="text-right">Street 1</label>
								<div>
									<input type="text" name="street_1">
								</div>						

								<label for="text_field_inline" class="text-right">Street 2</label>
								<div>
									<input type="text" name="street_2">
								</div>						

								<label for="text_field_inline" class="text-right">State</label>
								<div>
									<input type="text" name="state">
								</div>						

								<label for="text_field_inline" class="text-right">Zip</label>
								<div>
									<input type="text" name="zip">
								</div>						

								<label for="text_field_inline" class="text-right">Country</label>
								<div>
									<input type="text" name="country">														
								</div>										
							</fieldset>
						</div>

						<div class="col_50">

							<fieldset class="label_side label_small top no_lines">					

								<label for="text_field_inline" class="text-right">Phone</label>
								<div>
									<input type="textt" name="phone">
								</div>	

								<label for="text_field_inline" class="text-right">Primary Contact Name</label>
								<div>
									<input type="text" name="primary_contact_name">
								</div>						

								<label for="text_field_inline" class="text-right">Primary Contact Email</label>
								<div>
									<input type="email" name="primary_contact_email">
								</div>																	
							</fieldset>																													
						</div>
					</div>

					<div class="columns clearfix">
						<div class="col_80">
							<fieldset class="label_side label_small no_lines">
								<label for="text_field_inline" class="text-right">CC #</label>							
								<div>	
									<input type="text" name="cc">
								</div>

								<label for="text_field_inline" class="text-right">Expiry</label>							
								<div>	
									<input type="text" name="expiry">
								</div>

								<label for="text_field_inline" class="text-right">CW</label>							
								<div>	
									<input type="text" name="cw">
								</div>

								<label for="text_field_inline" class="text-right">Bank Routing</label>							
								<div>	
									<input type="text" name="bank_routing">
								</div>							

								<label for="text_field_inline" class="text-right">Bank Account</label>							
								<div>	
									<input type="text" name="bank_account">
								</div>

								<label for="text_field_inline" class="text-right">EIN</label>							
								<div>	
									<input type="text" name="ein">
								</div>

								<label for="text_field_inline" class="text-right">By-Line</label>							
								<div>	
									<input type="text" name="by_line">
								</div>								
							</fieldset>
						</div>

						<div class="columns clearfix">
							<div class="col_70">
								<fieldset class="no_lines">
									<label>First Year Start Date</label>
									<div class="columns clearfix">
										<div class="col_50">
											<fieldset class="label_side label_small no_lines">
												<label for="text_field_inline" class="text-right">Month</label>							
												<div>	
													<input type="text" name="month">
												</div>
											</fieldset>
										</div>
										<div class="col_50">
											<fieldset class="label_side label_small no_lines">
												<label for="text_field_inline" class="text-right">Day</label>							
												<div>	
													<input type="text" name="day">
												</div>
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
					</div>		
				</div>

				<div class="space-10"></div>
				<div class="button_bar clearfix">
					<button class="dark green close_dialog">
						<div class="ui-icon ui-icon-check"></div>
						<span>Submit</span>
					</button>
					<button class="dark red close_dialog">
						<div class="ui-icon ui-icon-closethick"></div>
						<span>Cancel</span>
					</button>
				</div> 
			</div>
		</div>
	</div>
</form>

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