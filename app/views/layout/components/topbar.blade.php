<div id="topbar" class="clearfix">

	<a href="#" class="logo"><span>Petlanthropy</span></a>

	{{-- <div class="user_box dark_box clearfix">
		<img src="images/interface/profile.jpg" width="55" alt="Profile Pic" />
		<h2>Administrator</h2>
		<h3><a class="text_shadow" href="#">John Smith</a></h3>
		<ul>
			<li><a href="#">profile</a><span class="divider">|</span></li>
			<li><a href="#">settings</a><span class="divider">|</span></li>
			<li><a href="login_slide.php" class="dialog_button" data-dialog="dialog_logout">Logout</a></li>
		</ul>
	</div><!-- #user_box --> --}}

	@if(!empty($no_bootstrap))		
		<button onclick="redirectToHome()" class="blue large has_text pull-right" style="margin-right: 50px; font-size: 150%;">
			&nbsp;<i class="fa fa-hand-o-left"></i>&nbsp;<span>Back To Home Page</span>
		</button>
	@endif
</div><!-- #topbar -->

<script>

	function redirectToHome()
	{
		document.location.href = "/home";
	}

</script>