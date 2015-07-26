@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-credit-card"></i>&nbsp;Gift Cards</h2>
</div>

<div class="grid_16 box">
	<h2 class="box_head bigger">&nbsp;</h2>
	<div>	
		<div class="block">
			<div class="section">

				<table class="table table-bordered table-striped">
			        <thead>
			          <tr class="success">
			            <th class="text-center">Date Sold</th>
			            <th class="text-center">Date Redemeed</th>
			            <th class="text-center">$ Value</th>
			            <th class="text-center">Purchaser</th>
			            <th class="text-center">Unique Code</th>
			            <th class="text-center">Action</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td class="text-center">02/05/2015</td>
			            <td class="text-center muted">N/A</td>
						<td class="text-center">$500.00</td>			            			            			            
						<td class="text-center">Roger Miller</td>	
			            <td class="text-center">HJ76MN09</td>
						<td style="text-align: center;"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-ticket"></i>&nbsp;&nbsp;Redeem</a></td>	
			          </tr>
			          <tr>
			            <td class="text-center">10/12/2013</td>
			            <td class="text-center">11/05/2015</td>
						<td class="text-center">$250.99</td>			            			            			            
						<td class="text-center">John Green</td>	
			            <td class="text-center">GH785Bh8</td>
						<td style="text-align: center;"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form" disabled><i class="fa fa-ticket"></i>&nbsp;&nbsp;Redeem</a></td>	
			          </tr>	
			          <tr>
			            <td class="text-center">01/05/2015</td>
			            <td class="text-center muted">N/A</td>
						<td class="text-center">$1000.00</td>			            			            			            
						<td class="text-center">Kara Birech</td>	
			            <td class="text-center">OI98JH56</td>
						<td style="text-align: center;"><a href="#" role="button" class="btn btn-warning btn-small dialog_button" data-dialog="dialog_form"><i class="fa fa-ticket"></i>&nbsp;&nbsp;Redeem</a></td>	
			          </tr>	
			          	          
	          		</tbody>
          		</table>
			</div>
		</div>
	</div>
</div>

@stop