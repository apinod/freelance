@extends('layout.default')

@section('content')

<div class="flat_area grid_16">
	<h2><i class="fa fa-image"></i>&nbsp;Images V1</h2>
</div>

<div class="box grid_16">
	<div class="block">
		<div class="columns clearfix">
			<div class="col_60">
				<fieldset class="label_side label_small bottom">
					<label>Filter by:<span>Colour</span></label>
					<div>
						<div class="jqui_radios">
							<input type="radio" name="filter" class="isotope_filter" id="f_all" data-isotope-filter="*" checked="checked"/><label for="f_all">All</label>
							<input type="radio" name="filter" class="isotope_filter" id="f_blue" data-isotope-filter=".blue"/><label for="f_blue">Blue</label>
							<input type="radio" name="filter" class="isotope_filter" id="f_sepia" data-isotope-filter=".sepia"/><label for="f_sepia">Sepia</label>
							<input type="radio" name="filter" class="isotope_filter" id="f_bw" data-isotope-filter=".bw"/><label for="f_bw">Grey</label>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="col_40">
				<fieldset class="label_side label_small bottom right">
					<label>Sort by:<span>Order</span></label>
					<div>
						<div class="jqui_radios">
							<input type="radio" name="sort" class="isotope_sort" id="s_name" data-isotope-sort="sort_1" checked="checked"/><label for="s_name">Name</label>
							<input type="radio" name="sort" class="isotope_sort" id="s_size" data-isotope-sort="sort_2"/><label for="s_size">Size</label>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</div>

<div class="grid_16">
	<div class="isotope_holder indented_area">
		<ul class="gallery fancybox delete_buttons clearfix">

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image01.jpg">
				<img src="/packages/images/content/gallery/blue/image01_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Blue 1</span>
				<span class="size sort_2">71234kb</span></a></li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image2.jpg">
				<img src="/packages/images/content/gallery/blue/image02_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Blue 2</span>
				<span class="size sort_2">7235kb</span></a></li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image3.jpg">
				<img src="/packages/images/content/gallery/blue/image03_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Blue 3</span>
				<span class="size sort_2">1456kb</span></a></li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image04.jpg">
				<img src="/packages/images/content/gallery/blue/image04_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Blue 4</span>
				<span class="size sort_2">45671kb</span></a></li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image05.jpg">
				<img src="/packages/images/content/gallery/blue/image05_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Blue 5</span>
				<span class="size sort_2">15678kb</span></a></li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image06.jpg">
				<img src="/packages/images/content/gallery/blue/image06_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Blue 6</span>
				<span class="size sort_2">16678kb</span></a></li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image07.jpg">
					<img src="/packages/images/content/gallery/blue/image07_thumb.jpg" height="84" width="148"/>
					<span class="name sort_1">Blue 7</span>
					<span class="size sort_2">17678kb</span>
				</a>
			</li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image08.jpg">
					<img src="/packages/images/content/gallery/blue/image08_thumb.jpg" height="84" width="148"/>
					<span class="name sort_1">Blue 8</span>
					<span class="size sort_2">19678kb</span>
				</a>
			</li>

			<li class="blue">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/blue/image09.jpg">
					<img src="/packages/images/content/gallery/blue/image09_thumb.jpg" height="84" width="148"/>
					<span class="name sort_1">Blue 9</span>
					<span class="size sort_2">110678kb</span>
				</a>
			</li>

		<!-- BW Images -->

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image01.jpg">
				<img src="/packages/images/content/gallery/grey/image01_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 1</span>
				<span class="size sort_2">234kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image02.jpg">
				<img src="/packages/images/content/gallery/grey/image02_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 2</span>
				<span class="size sort_2">2345kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image03.jpg"
				><img src="/packages/images/content/gallery/grey/image03_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 3</span>
				<span class="size sort_2">23456kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image04.jpg">
				<img src="/packages/images/content/gallery/grey/image04_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 4</span>
				<span class="size sort_2">456677kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image05.jpg">
				<img src="/packages/images/content/gallery/grey/image05_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 5</span>
				<span class="size sort_2">5678kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image06.jpg">
				<img src="/packages/images/content/gallery/grey/image06_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 6</span>
				<span class="size sort_2">678kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image07.jpg">
				<img src="/packages/images/content/gallery/grey/image07_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 7</span>
				<span class="size sort_2">7678kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image08.jpg">
				<img src="/packages/images/content/gallery/grey/image08_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 8</span>
				<span class="size sort_2">1978kb</span></a></li>

			<li class="bw">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/grey/image09.jpg">
				<img src="/packages/images/content/gallery/grey/image09_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Grey 9</span>
				<span class="size sort_2">1108kb</span></a></li>

		<!-- Sepia Images -->

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image01.jpg">
				<img src="/packages/images/content/gallery/sepia/image01_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 1</span>
				<span class="size sort_2">71234kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image02.jpg">
				<img src="/packages/images/content/gallery/sepia/image02_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 2</span>
				<span class="size sort_2">2345kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image03.jpg"
				><img src="/packages/images/content/gallery/sepia/image03_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 3</span>
				<span class="size sort_2">3456kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image04.jpg">
				<img src="/packages/images/content/gallery/sepia/image04_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 4</span>
				<span class="size sort_2">4567kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image05.jpg">
				<img src="/packages/images/content/gallery/sepia/image05_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 5</span>
				<span class="size sort_2">15678kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image06.jpg">
				<img src="/packages/images/content/gallery/sepia/image06_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 6</span>
				<span class="size sort_2">16678kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image07.jpg">
				<img src="/packages/images/content/gallery/sepia/image07_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 7</span>
				<span class="size sort_2">17678kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image08.jpg">
				<img src="/packages/images/content/gallery/sepia/image08_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 8</span>
				<span class="size sort_2">19678kb</span></a></li>

			<li class="sepia">
				<a rel="collection" class="no_loading" href="/packages/images/content/gallery/sepia/image09.jpg">
				<img src="/packages/images/content/gallery/sepia/image09_thumb.jpg" height="84" width="148"/>
				<span class="name sort_1">Sepia 9</span>
				<span class="size sort_2">110678kb</span></a></li>
		</ul>
	</div>
</div>

<div class="display_none">						
	<div id="dialog_delete" class="dialog_content narrow no_dialog_titlebar" title="Delete Confirmation">
		<div class="block">
			<div class="section">
				<h1>Delete File</h1>
				<div class="dashed_line"></div>	
				<p>Please confirm that you want to delete this file.</p>
			</div>
			<div class="button_bar clearfix">
				<button class="delete_confirm dark red no_margin_bottom close_dialog">
					<div class="ui-icon ui-icon-check"></div>
					<span>Delete</span>
				</button>
				<button class="light send_right close_dialog">
					<div class="ui-icon ui-icon-closethick"></div>
					<span>Cancel</span>
				</button>
			</div>
		</div>
	</div>
</div> 

@stop

@section('prepend_css') {{''}} @append

@section('prepend_js') {{''}} @append