@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-bar-chart"></i>&nbsp;Reports</h2>
</div>

<div class="box grid_10">
	<h2 class="box_head">Gifts</h2>
	<div class="block">
		<div class="columns clearfix">
			<div class="space-10"></div>		
			<div class="col_5"><div class="section">&nbsp;</div></div>
			<div class="col_90">
				<div class="columns clearfix">
					<div class="col_80">
						<div class="columns clearfix">
							<div class="col_50">
								<fieldset class="label_side top no_lines">
									<label for="text_field_inline" class="text-right">Date Range</label>
									<div>
										<input type="text" class="datepicker" name="from">
									</div>
								</fieldset>
							</div>
							<div class="col_50">
								<fieldset class="label_side label_small top no_lines">
									<label for="text_field_inline" class="text-center">to</label>
									<div>
										<input type="text" class="datepicker" name="to">
									</div>
								</fieldset>
							</div>
						</div>
					</div>					
				</div>
				<div class="columns clearfix">
					<div class="col_50">
						<fieldset class="label_side top no_lines">
							<label for="text_field_inline" class="text-right">Giving Option</label>
							<div>
								<select>
									<option>Red</option>
									<option>Green</option>
									<option selected="selected">Blue</option>
									<option>Cyan</option>
									<option>Magenta</option>
									<option>Yellow</option>
									<option>Black</option>
								</select>
							</div>
						</fieldset>
					</div>
					<div class="col_50">
						<fieldset class="label_side label_small top no_lines">
							<label for="text_field_inline" class="text-right">Interest Code</label>
							<div>
								<select>
									<option>Red</option>
									<option>Green</option>
									<option>Blue</option>
									<option>Cyan</option>
									<option>Magenta</option>
									<option>Yellow</option>
									<option selected="selected">Black</option>
								</select>
							</div>
						</fieldset>
					</div>					
				</div>

				<div class="columns clearfix">
					<div class="col_80">
						<div class="columns clearfix">
							<div class="col_50">
								<fieldset class="label_side top no_lines">
									<label for="text_field_inline" class="text-right">Amount</label>
									<div>
										<input type="text" name="amnt_from">
									</div>
								</fieldset>
							</div>
							<div class="col_50">
								<fieldset class="label_side label_small top no_lines">
									<label for="text_field_inline" class="text-center">to</label>
									<div>
										<input type="text" name="amnt_to">
									</div>
								</fieldset>
							</div>
						</div>
					</div>					
				</div>	

				<div class="columns clearfix">
					<div class="col_50">
						<fieldset class="label_side top no_lines">
							<div class="uniform inline clearfix">
								<label class="radio" for="detail"><input type="radio" name="choice" id="detail" checked/>Detail</label>
								<label class="radio" for="summ_fund"><input type="radio" name="choice" id="summ_fund"/>Summary by Fund</label>
								<label class="radio" for="summ_appeal"><input type="radio" name="choice" id="summ_appeal"/>Summary by Appeal</label>								
								<label class="radio" for="summ_camp"><input type="radio" name="choice" id="summ_camp"/>Summary by Campaign</label>
								<label class="radio" for="summ_donor"><input type="radio" name="choice" id="summ_donor"/>Summary by Donor</label>
								<label class="radio" for="summ_month"><input type="radio" name="choice" id="summ_month"/>Summary by Month</label>																
							</div>
						</fieldset>	
					</div>
				</div>

			</div>
		</div>
		<div class="space-10"></div>
		<div class="button_bar clearfix text-center">
			<a onclick="return false;" style="margin-right: 10px;" class="btn btn-danger padding-sides10 icon_only text_only" href="#"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Produce PDF</a>		
			<a onclick="return false;" class="btn btn-success padding-sides10 icon_only text_only" href="#"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp;Produce CSV</a>			
		</div>	
	</div>	
</div>

<div class="box grid_6 light">
	<h2 class="box_head">Global Match Codes Report</h2>
	<div class="block">
		<div class="columns clearfix">

		</div>

		<div class="space-10"></div>
		<div class="button_bar clearfix text-center">
			<a onclick="return false;" style="margin-right: 10px;" class="btn btn-danger padding-sides10 icon_only text_only" href="#"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Produce PDF</a>		
			<a onclick="return false;" class="btn btn-success padding-sides10 icon_only text_only" href="#"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp;Produce CSV</a>			
		</div>					
	</div>
</div>

@stop

@section('append_css')
	<style type="text/css">
		input, select {
			font-family: sans-serif!important;
  			font-size: 12px!important;
		}
		label.radio {
			font-size: 13px;
  			font-weight: 700;
		}
	</style>
@append