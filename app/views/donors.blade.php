@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-user"></i>&nbsp;Donors</h2>

	<form class="form-search" action="" method="get">
	  	<input type="text" class="pull-left input-medium search-query">  
	  	<button style="margin-left: 5px;" type="submit" class="btn btn-primary padding-sides10 icon_only text_only pull-left"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</button>	
	</form>
</div>

<div class="grid_16 box">
	<h2 class="box_head bigger">&nbsp;</h2>
	<div>	
		<div class="block">
			<div class="section">

				<div class="space-20"></div>

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr>
			            <th>Last Name</th>
			            <th>First Name</th>
			            <th>Spouse</th>
			            <th>Organization Name</th>
			            <th>Email</th>
			            <th class="text-center">Actions</th>
			          </tr>
			        </thead>
			        <tbody>			        
			        	<tr>
		        			<td>Miller</td>
		        			<td>Roger</td>
		        			<td>Janet Smith</td>
		        			<td>ABC LLC.</td>
		        			<td>roger.miller@acme.com</td>
							<td class="text-center"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	   			            		        			
			        	</tr>
			        	<tr>
		        			<td>Green</td>
		        			<td>John</td>
		        			<td>Janet Sayers</td>
		        			<td>Green Partners LLC.</td>		        			
							<td>john.green@acme.com</td>		        			
							<td class="text-center"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	   			            		        						        	
			        	</tr>			        	
			        	<tr>
		        			<td>Birech</td>
		        			<td>Kara</td>
		        			<td>Peter Davids</td>
		        			<td>XYZ LLC.</td>		        			
							<td>kara.birech@acme.com</td>		        			
							<td class="text-center"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	   			            		        						        	
			        	</tr>			    
			        	<tr>
		        			<td>White</td>
		        			<td>Owen</td>
		        			<td>Mary Reiners</td>
		        			<td>White Inc.</td>		        			
							<td>owen.white@acme.com</td>		        			
							<td class="text-center"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	   			            		        						        	
			        	</tr>			    
			        </tbody>
		        </table>
			</div>
		</div>
	</div>
</div>

<div class="space-4"></div>

<div class="columns clearfix">
	<div class="col_60">
		<div class="section">&nbsp;</div>
	</div>			
	<div class="col_40">
		<div class="grid_16 box">
			<h2 class="box_head bigger blue">Gift History</h2>

			<div class="block" style="height: 150px; overflow: scroll;">
				<table class="table table-striped">
					<thead>
			          <tr>
			            <th class="text-center">Date</th>
			            <th class="text-center">Amount</th>
			            <th class="text-center">Fund</th>
			            <th class="text-center">Appeal</th>
			          </tr>
			        </thead>
			        <tbody>			        
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">$ 500.00</td>
		        			<td class="text-center">$ 10,000.00</td>			        			
							<td class="text-success text-center"><i class="fa fa-check"></i></td>						
			        	</tr>								
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">$ 500.00</td>
		        			<td class="text-center">$ 10,000.00</td>			        			
							<td class="text-success text-center"><i class="fa fa-check"></i></td>						
			        	</tr>								
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">$ 500.00</td>
		        			<td class="text-center">$ 10,000.00</td>			        			
							<td class="text-error text-center"><i class="fa fa-close"></i></td>						
			        	</tr>								
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">$ 500.00</td>
		        			<td class="text-center">$ 10,000.00</td>			        			
							<td class="text-success text-center"><i class="fa fa-check"></i></td>						
			        	</tr>												        	
					</tbody>
				</table>
			</div> 
		</div>

		<div class="space-4"></div>


		<div class="box grid_16 light">
			<h2 class="box_head">Interests</h2>
			<div class="block">
				<table class="table"
					<thead>
			          <tr>
			            <th class="text-center">Available</th>
			            <th style="width: 50px;">&nbsp;</th>
			            <th class="text-center">Selected</th>
			          </tr>
			        </thead>
			        <tbody>			        
			        	<tr style="height: 200px;">
			            	<td>
								<select name="categories" multiple="multiple" class="col_90">
									<option>Dogs</option>
									<option>Cats</option>
									<option>Medical</option>
									<option>Toys</option>
									<option>Beds</option>
									<option>Emergency</option>					  
									<option>Other</option>												  
								</select>
			            	</td>
		        			<td class="text-center" style="width: 50px; vertical-align: middle;">
		        				<a href="#" role="button" onclick="return false;" class="btn btn-warning" style="display: block;"><i class="fa fa-long-arrow-left"></i></a>
		        				<div class="space-4"></div>
								<a href="#" role="button" onclick="return false;" class="btn btn-warning" style="display: block;"><i class="fa fa-long-arrow-right"></i></a>
		        			</td>
			            	<td>
								<select name="categories" multiple="multiple" class="col_90">
									<option>Women</option>
									<option>Cars</option>
								</select>
			            	</td>
			        	</tr>											        	
					</tbody>
				</table>

				<div class="button_bar clearfix"></div>		
			</div>
		</div>

		<div class="space-4"></div>

		<div class="grid_16 box">
			<h2 class="box_head bigger blue">Pledges</h2>

			<div class="block" style="height: 150px; overflow: scroll;">
				<table class="table table-striped">
					<thead>
			          <tr>
			            <th class="text-center">Start Date</th>
			            <th class="text-center">End Date</th>
			            <th class="text-center">Amount</th>
			            <th class="text-center">Frequency</th>
			          </tr>
			        </thead>
			        <tbody>			        
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">01/12/2016</td>
		        			<td class="text-center">$ 10,000.00</td>			        			
		        			<td class="text-center">2 months</td>					
			        	</tr>								
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">01/12/2016</td>
		        			<td class="text-center">$ 500.00</td>			        			
		        			<td class="text-center">6 months</td>					
			        	</tr>								
			        	<tr>
			            	<td class="text-center">01/05/2015</td>
		        			<td class="text-center">01/12/2016</td>
		        			<td class="text-center">$ 200.00</td>			        			
		        			<td class="text-center">1 months</td>					
			        	</tr>							
					</tbody>
				</table>
			</div> 
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
						<div class="col_100">
							<div class="col_50">
								<fieldset class="label_side label_small top no_lines">
									<label for="text_field_inline" class="text-right">ID #</label>
									<div>
										<input type="text" value="AB980F" class="disabled" disabled>															
									</div>						

									<label for="text_field_inline" class="text-right">First Name</label>
									<div>
										<input type="text" name="first_name">
									</div>						

									<label for="text_field_inline" class="text-right">Last Name</label>
									<div>
										<input type="text" name="last_name">
									</div>						

									<label for="text_field_inline" class="text-right">Spouse</label>
									<div>
										<input type="text" name="spouse">
									</div>						

									<label for="text_field_inline" class="text-right">Organization Name</label>
									<div>
										<input type="text" name="organization">
									</div>						

									<label for="text_field_inline" class="text-right">Date Added</label>
									<div>
										<input type="text" value="07/05/2015" class="disabled" disabled>															
									</div>										
								</fieldset>

								<div class="columns clearfix">
									<div class="col_100">
										<div class="section no-padding">
											<label class="custom-label">Wants email updates</label>
											<div class="uniform" style="display: inline-block; vertical-align: bottom;">
												<input type="checkbox" name="answer4" id="yes4"/>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col_50">

								<fieldset class="label_side label_small top no_lines">					

									<label for="text_field_inline" class="text-right">Email</label>
									<div>
										<input type="email" name="email">
									</div>	

									<label for="text_field_inline" class="text-right">Phone</label>
									<div>
										<input type="text" name="phone">
									</div>						

									<label for="text_field_inline" class="text-right">Street 1</label>
									<div>
										<input type="text" name="street1">
									</div>						

									<label for="text_field_inline" class="text-right">Street 2</label>
									<div>
										<input type="text" name="street2">
									</div>						

									<label for="text_field_inline" class="text-right">City</label>
									<div>
										<input type="text" name="city">
									</div>						

									<label for="text_field_inline" class="text-right">State</label>
									<div>
										<input type="text" name="state">
									</div>						

									<label for="text_field_inline" class="text-right">Zip</label>
									<div>
										<input type="text" name="zip">
									</div>						
								</fieldset>																													
							</div>
						</div>
					</div>

					<div class="columns clearfix">
						<div class="col_80">
							<fieldset class="label_side label_small no_lines">
								<label for="text_field_inline" class="text-right">Password</label>							
								<div class="clearfix no-border">	
									<input type="password" name="appeal" style="width: 50%!important; margin-right: 5px;" class="pull-left">
									<button type="button" class="btn btn-success padding-sides10 icon_only text_only pull-left" href="#"><i class="fa fa-lock"></i>&nbsp;&nbsp;Reset</button>
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
		select { 
			height: 100%!important; 
			margin-left: 5%;
			font-family: sans-serif!important;
  			font-size: 12px!important;			
		}
		select option {
			padding: 5px;
		}
	</style>
@append