@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-wrench"></i>&nbsp;Utilities</h2>
</div>

<div class="grid_9 box">
	<h2 class="box_head bigger">User Setup</h2>
	<div>	
		<div class="block">
			<div class="section">		
				
				<div class="space-20"></div>

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr>
			            <th>Name</th>
			            <th>Email</th>
			            <th class="text-center">Password</th>
			            <th class="text-center">System Admin</th>			            
			            <th class="text-center">Action</th>			            
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>Roger Miller</td>
			            <td>roger.miller@acme.com</td>
						<td class="text-center">AB09*07_</td>
			            <td class="text-success text-center"><i class="fa fa-check"></i></td>						
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>
			          <tr>
			            <td>John Green</td>
			            <td>john.green@acme.com</td>
						<td class="text-center">87JPL0*</td>
			            <td class="text-error text-center"><i class="fa fa-close"></i></td>						
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>
  			          <tr>
			            <td>Kara Birech</td>
			            <td>kara.birech@acme.com</td>
						<td class="text-center">_G65M*65</td>
			            <td class="text-error text-center"><i class="fa fa-close"></i></td>						
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>
  			          <tr>
			            <td>Owen White</td>
			            <td>owen.white@acme.com</td>
						<td class="text-center">A%V67&M</td>
			            <td class="text-error text-center"><i class="fa fa-close"></i></td>						
						<td style="text-align: center;"><a href="#edit_form" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>							
			          </tr>			          
			        </tbody>
		      	</table>
			</div>
		</div>
	</div>
</div>

<div class="box grid_7 light">
	<h2 class="box_head">&nbsp;</h2>
	<div class="block">
		<div class="columns clearfix">
			<div class="col_15"><div class="section"></div></div>

			<div class="col_30 text-center">
				<h1 style="margin-bottom: 3px">Export</h1>

				<div class="section clearfix">
					<a href="#" class="btn btn-blue"><i class="fa fa-file-text-o bigger"></i><h2 class="no-margin">Names to CSV</h2></a>		
				</div>
				
				<div class="section clearfix">
					<a href="#" class="btn btn-blue"><i class="fa fa-file-text-o bigger"></i><h2 class="no-margin">Gifts to CSV</h2></a>		
				</div>		

				<div class="section clearfix">
					<a href="#" class="btn btn-blue"><i class="fa fa-file-text-o bigger"></i><h2 class="no-margin">Pledges to CSV</h2></a>		
				</div>		
			</div>
			
			<div class="col_10"><div class="section"></div></div>

			<div class="col_30 text-center">
				<h1 style="margin-bottom: 3px">Duplicates</h1>

				<div class="section clearfix">
					<a href="#" class="btn btn-blue"><i class="fa fa-link bigger"></i><h2 class="no-margin">Combine 2 Names</h2></a>		
				</div>
				
				<div class="section clearfix">
					<a href="#" class="btn btn-blue"><i class="fa fa-files-o bigger"></i><h2 class="no-margin">Duplicate Merge Report</h2></a>		
				</div>		
			</div>
		</div>

		<div class="space-10"></div>
		<div class="button_bar clearfix"></div>		
	</div>
</div>

@stop

@section('append_css')
	<style type="text/css">
		.bigger {
		  font-size: 300%;
		}
		.btn-blue {
			padding: 20px;		
			text-shadow: none!important;			
			background-color: #004E82 !important;
		    border-color: #02436e!important;			
			background-image: linear-gradient(to bottom, #337FB1, #004E82)!important;
			background-repeat: repeat-x!important;
		    color: #FFF!important;	
			width: 120px;
			height: 90px;		    		
		}
		.btn-blue:hover {
			background-image: linear-gradient(to bottom, #02436e, #004E82)!important;
		    color: #FFF!important;		    
		}
		.btn-blue:active {
			background-image: linear-gradient(to bottom, #337FB1, #004E82)!important;
		}
		.btn-blue h2 {
			line-height: 23px;	
			padding-top: 10px;
		}
		.btn-blue h2, .btn-blue i {
			color: #FFF!important;		
		}		
	</style>
@append