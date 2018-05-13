<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/login_page.css')}}">
	@include("page.pageTitle")
</head>
<body>
	<?php 
		//include("pageHeader.php");
	?>
	@include('page.pageHeader')
	<img src="{{asset('image/mls_background.png')}}">
	<div id="loginForm_div">
		<form method="post" action="{{ action('LoginController@Main') }}">
			<table>
				<tr>
					<td class="login-lbl-class">Username</td>
				</tr>
				<tr>
					<td><input type="text" id="userName_txt" name="userName_txt" class="login-txt-class" required/></td>
				</tr>
				<tr>
					<td class="login-lbl-class">Password</td>
				</tr>
				<tr>
					<td><input type="password" id="passWord_txt" name="passWord_txt" class="login-txt-class" required/></td>
				</tr>
				<tr>
					<td>
						<input type="submit" id="login_btn" name="login_btn" value="Log In" required/>
						<input type="reset" id="clear_btn" name="clear_btn" value="Clear" required/>
					</td>
				</tr>
			</table>
		</form>
	</div>




</body>
</html>
