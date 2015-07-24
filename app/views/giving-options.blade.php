@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2>Giving Options
		{{-- <small>- Welcome to Pletlanthropy.</small> --}}
	</h2>
</div>

<div class="grid_16 box">
	<h2 class="box_head bigger">
		<input style="margin-top: 0; margin-right: 5px;" type="checkbox" id="optionsCheckbox" value="option1" checked>Filters Active Only
	</h2>
	<div>	
		<div class="block">
			<div class="section">
				<button class="btn btn-primary pull-right" href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>

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
			            <td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small" data-toggle="modal"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>
			          </tr>
  			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-error" style="text-align: center;"><i class="fa fa-close"></i></td>
			            <td>Ei populo graeci consulatu</td>			            
			            <td>11/10/2015</td>
						<td>$12000</td>			            
			            <td>68</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small" data-toggle="modal"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>			            
			          </tr>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>08/12/2015</td>
						<td>$10500</td>			            			            
			            <td>5</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small" data-toggle="modal"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>			            			            
			          </tr>
  			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-error" style="text-align: center;"><i class="fa fa-close"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>11/10/2015</td>
						<td>$1000</td>			            			            			            
			            <td>68</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small" data-toggle="modal"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>			            			            
			          </tr>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td>Qui ut wisi vocibus</td>
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>
			            <td>Ei populo graeci consulatu</td>
			            <td>08/12/2015</td>
						<td>$500</td>			            			            
			            <td>5</td>
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small" data-toggle="modal"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>			            			            
			          </tr>			          
			        </tbody>
		      	</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<form action="" method="post">
	<div id="edit_form" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Giving Option Edit Form</h3>
		</div>
		<div class="modal-body">	
			<div class="space-10"></div>

			<div class="block">
				<div class="columns clearfix">
					<div class="col_40 offset1">
						<div class="section">
							{{-- <div class="control-group"> --}}
								<label class="control-label" for="input01">Description</label>
								<div class="controls controls-row">
									<input type="text" class="span4" id="input01" value="Lorem ipsum ad his scripta.">
								</div>
							{{-- </div> --}}
				          	<div class="control-group">
								<label class="control-label">Narrative</label>
								<div class="controls">
									<span class="input-xlarge uneditable-input">Cute editor</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Category</label>
								<div class="controls">				
									<select multiple="multiple">
									  <option>Dogs</option>
									  <option>Cats</option>
									  <option>Medical</option>
									  <option>Toys</option>
									  <option>Beds</option>
									  <option>Emergency	</option>					  
									</select>
								</div>
							</div>
				          	<div class="control-group">
								<label class="control-label" for="input01">Keywords</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01">						
								</div>
								<span class="help-inline">free form multi-value</span>
							</div>
						</div>
					</div>
					<div class="col_40">
						<div class="section">
							<p>50% content</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button type="submit" class="btn btn-primary">Save changes</button>
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