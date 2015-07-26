@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-list-ol"></i>&nbsp;Giving Options</h2>
</div>

<div class="grid_16 box">
	<h2 class="box_head bigger">		
		<div class="section no-padding">									
			<div class="uniform" style="display: inline-block; vertical-align: middle;">
				<input type="checkbox" name="answer4" id="yes4" checked/>
			</div>
			<h3 style="display: inline">Filters Active Only</h3>
		</div>		
	</h2>
	<div>	
		<div class="block">
			<div class="section">
				<button class="btn btn-primary pull-right padding-sides10" href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>

				<div class="space-20"></div>

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr class="success">
			            <th width="200px">Description</th>
			            <th>Appeal</th>
			            <th style="text-align: center;">Fund</th>
			            <th>Campaign</th>
			            <th>Date</th>
			            <th>$ Raised</th>
			            <th># Donations</th>
			            <th>Action</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>08/12/2015</td>
						<td>$10500</td>			            			            			            
			            <td>5</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	
			          </tr>
  			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-error" style="text-align: center;"><i class="fa fa-close"></i></td>
			            <td>Ei populo graeci consulatu</td>			            
			            <td>11/10/2015</td>
						<td>$12000</td>			            
			            <td>68</td>
						<td class="text-center"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	           
			          </tr>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>08/12/2015</td>
						<td>$10500</td>			            			            
			            <td>5</td>
						<td class="text-center"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	   			            
			          </tr>
  			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-error" style="text-align: center;"><i class="fa fa-close"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>11/10/2015</td>
						<td>$1000</td>			            			            			            
			            <td>68</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	
			          </tr>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>08/12/2015</td>
						<td>$500</td>			            			            
			            <td>5</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>			            			            
			          </tr>			          
			        </tbody>
		      	</table>
			</div>

			<div class="button_bar clearfix">
			
				<div class="pagination">
				  <ul>
				    <li><a href="#">Prev</a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li><a href="#">Next</a></li>
				  </ul>
				</div>
			</div>			
		</div>
	</div>
</div>

<form action="" enctype="multipart/form-data" method="post">
	<div class="display_none">
		<div id="dialog_form" class="dialog_content wide">
			<div class="block">		
				<div class="section">
					<h2>Giving Option Edit Form</h2>
					<hr>
				</div>

				<div style="height: 450px; overflow: scroll;">
					<div class="columns clearfix">
						<div class="col_60">
							<fieldset class="label_side label_small top no-border">
								<label for="text_field_inline" class="no-border">Description</label>
								<div class="no-border">
									<input type="text" name="description">
								</div>

								<label for="text_field_inline" class="no-border">Narrative</label>
								<div class="no-border">
									<input type="text" value="Cute editor" class="disabled" disabled>
								</div>

								<label for="text_field_inline" class="no-border">Category</label>
								<div class="no-border">
									<select name="categories" multiple="multiple">
									  <option>Dogs</option>
									  <option>Cats</option>
									  <option>Medical</option>
									  <option>Toys</option>
									  <option>Beds</option>
									  <option>Emergency	</option>					  
									</select>
								</div>	
							</fieldset>
						</div>
						<div class="col_30">
							<img data-src="holder.js/140x140" class="clearfix img-polaroid pull-right" alt="140x140" src="data:image/jpg;base64,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" style="width: 140px; height: 140px;">						   
					        <input type="file" accept="image/jpg, image/jpeg, image/gif, image/png, image/bmp" id="file-input" name="file-input" style="display: none;"/>
					        <button id="upload_btn" style="margin-top: 20px;" type="button" class="pull-right btn btn-primary padding-sides10 icon_only text_only"><i class="fa fa-upload"></i>&nbsp;&nbsp;Upload</button>
						</div>
					</div>
					<div class="columns clearfix">
						<div class="col_70">
							<fieldset class="label_side label_small top no-border">
								<label for="text_field_inline" class="no-border">Keywords</label>
								<div class="no-border">
									<input type="text" name="keywords">																
								</div>
							</fieldset>
						</div>
						<div class="col_30">						
							<div class="space-10"></div>
							<span class="muted">free form multi-value</span>
						</div>
					</div>				

					<div class="columns clearfix">
						<div class="col_70">
							<fieldset class="label_side label_small top no-border">
								<label for="text_field_inline" class="no-border">Goal</label>
								<div class="no-border">
									<input type="text" name="goal" placeholder="$">																
								</div>						
							</fieldset>
						</div>
						<div class="col_30">
							<div class="section no-padding-sides">									
								<div class="uniform" style="display: inline-block; vertical-align: bottom;">
									<input type="checkbox" name="answer4" id="yes4"/>
								</div>
								<label class="custom-label">Remove if met</label>									
							</div>
						</div>
					</div>			

					<div class="columns clearfix">
						<div class="col_70">
							<fieldset class="label_side label_small top no-border">
								<label for="text_field_inline" class="no-border">Expiration</label>
								<div class="no-border">
									<div class="clearfix">
										<input type="text" class="datepicker">
									</div>
								</div>							
							</fieldset>
						</div>
						
						<div class="col_30">
							<div class="section no-padding-sides">									
								<div class="uniform" style="display: inline-block; vertical-align: bottom;">
									<input type="checkbox" name="answer4" id="yes4"/>
								</div>
								<label class="custom-label">Remove if expired</label>									
							</div>
						</div>

					</div>	

					<div class="columns clearfix">
						<div class="col_100">
							<fieldset class="label_side no-border">
								<label class="label_20 no-border">Match Donor ID</label>							
								<div class="clearfix no-border">									
									<button type="button" class="btn btn-primary padding-sides10 icon_only text_only" href="#"><i class="fa fa-search"></i>&nbsp;&nbsp;Lookup Donors</button>
								</div>								
							</fieldset>
						</div>
					</div>			

					<div class="columns clearfix">
						<div class="col_100">
							<fieldset class="label_side label_small no-border">
								<label for="text_field_inline" class="no-border">Appeal</label>							
								<div class="clearfix no-border">	
									<select class="no-margin col_50">
										<option>Red</option>
										<option>Green</option>
										<option selected="selected">Blue</option>
										<option>Cyan</option>
										<option>Magenta</option>
										<option>Yellow</option>
										<option>Black</option>
									</select>
									<button style="margin-left: 5px;" type="button" class="btn btn-success padding-sides10 icon_only text_only" href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>
								</div>								

								<label for="text_field_inline" class="no-border">Fund</label>							
								<div class="clearfix no-border">	
									<select class="no-margin col_50">
										<option>Red</option>
										<option>Green</option>
										<option>Blue</option>
										<option>Cyan</option>
										<option>Magenta</option>
										<option selected="selected">Yellow</option>
										<option>Black</option>
									</select>
									<button style="margin-left: 5px;" type="button" class="btn btn-success padding-sides10 icon_only text_only" href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>
								</div>							

								<label for="text_field_inline" class="no-border">Letter</label>							
								<div class="clearfix no-border">	
									<select class="no-margin col_50">
										<option>Red</option>
										<option>Green</option>
										<option>Blue</option>
										<option selected="selected">Cyan</option>
										<option>Magenta</option>
										<option>Yellow</option>
										<option>Black</option>
									</select>
									<button style="margin-left: 5px;" type="button" class="btn btn-success padding-sides10 icon_only text_only" href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>
								</div>							
							</fieldset>
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
		.bigger{
			 font-size: 14px!important;
		}

		tr td {
			vertical-align: middle!important;
		}
	</style>
@append

@section('append_js')
	<script type="text/javascript">

	$('#upload_btn').click(function(){
		$("#file-input").trigger('click');
	});

	</script>
@append