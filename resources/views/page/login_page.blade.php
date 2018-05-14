@extends('layout.header')

@section('css')
@endsection

@section('body')
	<div id="img_div">
		<img src="{{asset('image/mls_background.png')}}">
	</div>
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
@endsection




</body>
</html>
