@extends('layout.header')

@section('css')
{{asset("css/sys_admin/create.css")}}
@endsection


@section('body')
    <div class="wrapper">
    <label>Create new Admin123</label>
    <div class="div register">
        <form id="register_form" action="{{action('AdminController@store')}}" method="POST">
            <table class="table register">
                <tr>
                    <td>
                        <input type="text" name="firstName_txt" class="text register two_line left" placeholder="First Name..." required/>
                        <input type="text" name="lastName_txt" class="text register two_line right" placeholder="Last Name..." required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="email_txt" class="text register one_line" placeholder="Email Address..." required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username_txt" class="text register two_line left" placeholder="Username..." required/>
                        <input type="text" name="nickName_txt" class="text register two_line right" placeholder="Nickname..." required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="password_txt" name="password_txt" class="text register two_line left" placeholder="Password..." required/>
                        <input type="password" id="passwordConfirm_txt" name="passwordConfirm_txt" class="text register two_line right" placeholder="Confirm Password..." required/>
                        <label style="display:none; color: red; font-size: 20px;" id="passwordNotMatch_lbl">*Password did not match!</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn one_line" name="register_btn" value="Register"/>
                    </td>
                </tr>
            </table>
        </form>
    </div><!-- end .inner -->
</div><!-- end .outer -->
@endsection


@section('javascript')
{{asset('js/sys_admin/create.js')}}
@endsection
