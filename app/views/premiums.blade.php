@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-star"></i>&nbsp;Premiums</h2>
</div>

<div class="grid_16 box">
	<h2 class="box_head bigger">&nbsp;</h2>
	<div>	
		<div class="block">
			<div class="section">
			
				<button class="btn btn-primary pull-right padding-sides10" type="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>
				
				<div class="space-20"></div>

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr class="success">
			            <th width="200px">Description</th>
			            <th class="text-center">Code</th>
			            <th class="text-center">Fair Market Value</th>
			            <th class="text-center">Active</th>
			            <th class="text-center">Action</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td class="text-center">HJ76MN09</td>
						<td class="text-center">$10500</td>			            			            			            
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>						
						<td style="text-align: center;"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	
			          </tr>
  			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td class="text-center">GH785Bh8</td>
						<td class="text-center">$12000</td>			    
			            <td class="text-error" style="text-align: center;"><i class="fa fa-close"></i></td>
						<td class="text-center"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	           
			          </tr>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td class="text-center">OI98JH56</td>
						<td class="text-center">$10500</td>			    
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>						        			            
						<td class="text-center"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	   			            
			          </tr>
  			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td class="text-center">09PL8JM</td>
						<td class="text-center">$1000</td>			    
			            <td class="text-error" style="text-align: center;"><i class="fa fa-close"></i></td>						        			            			            
						<td style="text-align: center;"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>	
			          </tr>
			          <tr>
			            <td width="200px">Lorem ipsum ad his scripta.</td>
			            <td class="text-center">AB98ML</td>
						<td class="text-center">$500</td>			    
			            <td class="text-success" style="text-align: center;"><i class="fa fa-check"></i></td>						        			            
						<td style="text-align: center;"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>			            			            
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

<div class="grid_16 box">
	<h2 class="box_head bigger">Report of Shipping Log</h2>
	<div>	
		<div class="block">
			<div class="section">

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr class="success">
			            <th class="text-center">Code</th>
			            <th width="200px">Description</th>			            
			            <th class="text-center"># Ordered</th>
			            <th class="text-center"># Shipped</th>
			            <th class="text-center"># Not Shipped</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td class="text-center">HJ76MN09</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>			            
						<td class="text-center">10</td>			            			            			            
						<td class="text-center">10</td>	
						<td class="text-center">0</td>	
			          </tr>
			          <tr>
			            <td class="text-center">GH785Bh8</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>			            
						<td class="text-center">7</td>			            			            			            
						<td class="text-center">4</td>	
						<td class="text-center">3</td>	
			          </tr>			          
			          <tr>
			            <td class="text-center">OI98JH56</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>			            
						<td class="text-center">5</td>			            			            			            
						<td class="text-center">4</td>	
						<td class="text-center">1</td>	
			          </tr>			          	
  			          <tr>
			            <td class="text-center">09PL8JM</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>			            
						<td class="text-center">8</td>			            			            			            
						<td class="text-center">8</td>	
						<td class="text-center">0</td>	
			          </tr>	
  			          <tr>
			            <td class="text-center">AB98ML</td>
			            <td width="200px">Lorem ipsum ad his scripta.</td>			            
						<td class="text-center">11</td>			            			            			            
						<td class="text-center">11</td>	
						<td class="text-center">0</td>	
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

<form action="" method="post">
	<div class="display_none">
		<div id="dialog_form" class="dialog_content wide">
			<div class="block">		
				<div class="section">
					<h2>Produce Packing Slips</h2>
					<hr>
				</div>

				<div class="columns clearfix">
					<div class="col_20"><div class="section">&nbsp;</div></div>
					<div class="col_60">
						<div class="section no-padding-sides horizontal-center" style="width: 250px;">
							<div class="uniform" style="display: inline-block; vertical-align: bottom;">
								<input type="checkbox" name="answer4" id="yes4"/>
							</div>
							<label class="custom-label">Change Status to Shipped?</label>									
						</div>
						<div class="horizontal-center" style="width: 140px;">
					        <button id="download_pdf_btn" style="margin-top: 20px;" type="button" class="btn btn-danger padding-sides10 icon_only text_only"><i class="fa fa-download"></i>&nbsp;&nbsp;PDF</button>			
			        		<button id="download_csv_btn" style="margin-top: 20px;" type="button" class="btn btn-warning padding-sides10 icon_only text_only"><i class="fa fa-download"></i>&nbsp;&nbsp;CSV</button>			
	        			</div>
					</div>
				</div>

				<div class="space-10"></div>
				<div class="button_bar clearfix">
					<button class="dark red close_dialog pull-right">
						<div class="ui-icon ui-icon-closethick"></div>
						<span>Cancel</span>
					</button>				
					<button class="dark green close_dialog pull-right">
						<div class="ui-icon ui-icon-check"></div>
						<span>Submit</span>
					</button>
				</div> 
			</div>
		</div>
	</div>
</form>
@stop

@section('append_css')
	<style type="text/css">
		.horizontal-center {
			overflow: hidden;
			margin-left: auto; 
			margin-right: auto;
		}
	</style>
@append