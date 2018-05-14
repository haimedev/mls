@extends('layout.header')

@section('css')
{{asset("css/page/index.css")}}
@endsection

@section('body')
	<div id="img_div">
		<img src="{{asset('image/mls_background.png')}}">
	</div>
	<div id="loginForm_div">
		<form method="post" action="{{action('AdminController@index')}}">
			<table class="table login">
				<tr>
					<td><input type="text" id="userName_txt" name="userName_txt" class="txt login_input" placeholder="Username..." required/></td>
				</tr>
				<tr>
					<td><br/></td>
				</tr>
				<tr>
					<td><input type="password" id="passWord_txt" name="passWord_txt" class="txt login_input" placeholder="Password..." required/></td>
				</tr>
				<tr>
					<td>
						<input type="submit" id="login_btn" name="login_btn" value="Log In" class="btn login"/>
						<input type="reset" id="clear_btn" name="clear_btn" value="Clear" class="btn login"/>
					</td>
                </tr>
				<tr>
					<td>
						<br/>
						<br/>
						<br/>
					</td>
				</tr>
                <tr>
                    <td><label>Do not have an Account?</label>&nbsp<a href="sys_admin/create">Register...</a></td>
                </tr>
                <tr>
                    <td>
						<label>Have any comments or suggestions? File it!</label>
					</td>
                </tr>
				<tr>
					<td><textarea rows="4" class="textarea"></textarea></td>
				</tr>
				<tr>
					<td>
						<input type="button" value="Send It" class="btn one_line"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
@endsection




</body>
</html>