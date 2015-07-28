@extends('layout.blank')

@section('content')

<div id="pjax">
	<div id="wrapper">
		<div class="isolate">
			<div class="center narrow" style="margin-top:100px;">
				<div class="main_container full_size container_16 clearfix">

					<div class="box">
						<div class="block">
							<div class="section">
								<div class="alert dismissible alert_light">
									<img width="24" height="24" src="/packages/images/icons/small/grey/locked.png">
									<strong>Welcome to Petlanthropy.</strong> Please enter your details to login.
								</div>
							</div>
							<form action="index.php" class="validate_form">
							<fieldset class="label_side top">
								<label for="username_field">Username<span>or email address</span></label>
								<div>
									<input type="text" id="username_field" name="username_field" class="required">
								</div>
							</fieldset>
							<fieldset class="label_side bottom">
								<label for="password_field">Password<span><a href="#">Do you remember?</a></span></label>
								<div>
									<input type="password" id="password_field" name="password_field" class="required">
								</div>
							</fieldset>
							<div class="button_bar clearfix">
								<button class="wide" type="submit">
									<img src="/packages/images/icons/small/white/key_2.png">
									<span>Login</span>
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<button data-dialog="dialog_register" class="dialog_button send_right" style="margin-top:10px;">
	<img src="/packages/images/icons/small/white/user.png">
	<span>Not Registered ?</span>
</button>

<div class="display_none">
	<div id="dialog_register" class="dialog_content no_dialog_titlebar wide" title="Register for Adminica">
		<div class="block">
			<div class="section">
				<h2>Registration Form</h2>
			</div>
			<div class="columns clearfix">
				<div class="col_50">
					<fieldset class="label_top top">
						<label for="text_field_inline">Username<span>Between 5 and 20 characters</span></label>
						<div>
							<input type="text">
						</div>
					</fieldset>
				</div>
				<div class="col_50">
					<fieldset class="label_top top right">
						<label for="text_field_inline">Username again…<span>so we know you're human</span></label>
						<div>
							<input type="text">
						</div>
					</fieldset>
				</div>
			</div>
			<div class="columns clearfix">
				<div class="col_50">
					<fieldset class="label_top">
						<label for="text_field_inline">Password<span>Between 5 and 20 characters</span></label>
						<div>
							<input type="text">
						</div>
					</fieldset>
				</div>
				<div class="col_50">
					<fieldset class="label_top right">
						<label for="text_field_inline">Repeat Password again…</label>
						<div>
							<input type="text">
						</div>
					</fieldset>
				</div>
			</div>

			<fieldset class="label_side bottom">
				<label>Permission</label>
				<div class="uniform inline clearfix">
					<label for="agree_1"><input type="checkbox" name="agree_1" value="yes" id="agree_1"/>I agree with the terms and conditions</label>
				</div>
			</fieldset>



			<div class="button_bar clearfix">
				<button class="dark blue no_margin_bottom link_button" data-link="index.php">
					<div class="ui-icon ui-icon-check"></div>
					<span>Register</span>
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
