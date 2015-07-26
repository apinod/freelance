@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-phone"></i>&nbsp;Communication</h2>
</div>

<div class="grid_16 box">
	<h2 class="box_head bigger">Letters</h2>
	<div>	
		<div class="block">
			<div class="section">		
				
				<div class="space-20"></div>

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr>
			            <th class="text-center">Code</th>
			            <th width="200px">Description</th>
			            <th class="text-center">Date Created</th>		            
			            <th class="text-center">Action</th>			            
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td class="text-center">HJ76MN09</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
						<td class="text-center">01/03/2014</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>	 
   			          <tr>
			            <td class="text-center">GH785Bh8</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
						<td class="text-center">12/10/2010</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>	 
   			          <tr>
			            <td class="text-center">OI98JH56</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
						<td class="text-center">07/12/2015</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>	 
 			          <tr>
			            <td class="text-center">09PL8JM</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
						<td class="text-center">11/05/2013</td>
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

<div class="space-10"></div>

<div class="box grid_6">
	<h2 class="box_head blue">List Selection of Donors</h2>
	<div class="block">

		<table class="table table-striped no-margin">
			<tbody>
				<tr>
					<td>
						<div class="uniform">
							<label class="checkbox" for="check1"><input type="checkbox" name="check1" id="check1"/>Current Donors</label>
						</div>
					</td>
					<td width="250px"></td>
				</tr>

				<tr>
					<td>					
						<div class="uniform">				
							<label class="checkbox" for="check2"><input type="checkbox" name="check2" id="check2"/>Lapsed Donors</label>
						</div>
					</td>
					<td width="250px"></td>				
				</tr>

				<tr>
					<td>
						<div class="uniform">				
							<label class="checkbox" for="check3"><input type="checkbox" name="check3" id="check3"/>Gave to Appeal</label>
						</div>
					</td>
					<td width="250px">
						<select class="no-margin">
							<option>Red</option>
							<option>Green</option>
							<option>Blue</option>
							<option>Cyan</option>
							<option>Magenta</option>
							<option>Yellow</option>
							<option selected="selected">Black</option>
						</select>							
					</td>
				</tr>

				<tr>
					<td>
						<div class="uniform">				
							<label class="checkbox" for="check4"><input type="checkbox" name="check4" id="check4"/>Gave to Campaign</label>
						</div>
					</td>
					<td width="250px">
						<select class="no-margin">
							<option>Red</option>
							<option>Green</option>
							<option selected="selected">Blue</option>
							<option>Cyan</option>
							<option>Magenta</option>
							<option>Yellow</option>
							<option>Black</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="uniform">				
							<label class="checkbox" for="check5"><input type="checkbox" name="check5" id="check5"/>Gave to Fund</label>
						</div>
					</td>
					<td width="250px">
						<select class="no-margin">
							<option>Red</option>
							<option>Green</option>
							<option>Blue</option>
							<option>Cyan</option>
							<option selected="selected">Magenta</option>
							<option>Yellow</option>
							<option>Black</option>
						</select>
					</td>
				</tr>

			</tbody>
		</table>		

		<div class="button_bar clearfix text-center" style="padding: 15px;">
			<a onclick="return false;" style="margin-right: 10px;" class="btn btn-primary padding-sides10 icon_only text_only" href="#"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mass Email</a>
			<a onclick="return false;" class="btn btn-success padding-sides10 icon_only text_only" href="#"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp;Export to CSV</a>					
		</div>		
	</div>
</div>

<div class="box grid_8 no_titlebar light" style="background: none; box-shadow: none;">
	<div class="box grid_16">
		<h2 class="box_head">End of Year Tax Statements</h2>
		<div class="block">

			<div class="space-10"></div>

			<table class="table no-margin">
				<tbody>
					<tr>
						<td class="no-border" width="80px" style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-primary btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Send</a></td>
						<td class="no-border" width="90px"><label>Select Letter</label></td>
						<td class="no-border" width="250px">
							<select class="no-margin">
								<option selected="selected">Red</option>
								<option>Green</option>
								<option>Blue</option>
								<option>Cyan</option>
								<option>Magenta</option>
								<option>Yellow</option>
								<option>Black</option>
							</select>																		
						</td>
						<td class="no-border"></td>						
					</tr>
				</tbody>
			</table>

			<div class="space-10"></div>		

			<div class="button_bar clearfix text-center">
				<a onclick="return false;" class="btn btn-warning btn-small padding-sides10 icon_only text_only" href="#"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit Template</a>				
			</div>	
		</div>
	</div>

	<div class="space-10"></div>

	<div class="box grid_16 light">
		<h2 class="box_head">Pledge Stements</h2>
		<div class="block">

			<div class="space-10"></div>

			<table class="table no-margin">
				<tbody>
					<tr>
						<td class="no-border" width="80px" style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-primary btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Send</a></td>
						<td class="no-border" width="90px"><label>Select Letter</label></td>
						<td class="no-border" width="250px">
							<select class="no-margin">
								<option>Red</option>
								<option>Green</option>
								<option>Blue</option>
								<option>Cyan</option>
								<option selected="selected">Magenta</option>
								<option>Yellow</option>
								<option>Black</option>
							</select>																		
						</td>
						<td class="no-border">
							<div class="uniform">				
								<label class="checkbox" for="check7"><input type="checkbox" name="check7" id="check7"/>Lapsed</label>
								<label class="checkbox" for="check8"><input type="checkbox" name="check8" id="check8"/>Current</label>
							</div>							
						</td>						
					</tr>
				</tbody>
			</table>

			<div class="space-10"></div>		

			<div class="button_bar clearfix text-center">
				<a onclick="return false;" class="btn btn-warning btn-small padding-sides10 icon_only text_only" href="#"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit Template</a>				
			</div>	
		</div>
	</div>
	</div>	
</div>

@stop

@section('append_css')
	<style type="text/css">
		label.checkbox .checker {
			margin-right: 15px!important;			
		}
		label, select {
			font-size: 13px;
  			font-weight: 700;
  			line-height: 26px;  			
		}
	</style>
@append