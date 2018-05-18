@extends('layout.header')

@section('css')
{{asset("css/sys_admin/index.css")}}
@endsection

@section('javascript')

@endsection

@section('body')
    <div id="wrapper">
        <div class="div table_index">
            <table class="table index">
                <tr>
                    <th style="margin-left: 20px;">First name</th>
                    <th>Last name</th>
                    <th>Nickname</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Active?</th>
                </tr>
                @foreach($sysAdmin as $_sysAdmin)
                <tr>
                    <th class="th index_icon"><td>{{$_sysAdmin->sa_firstname}}</td></th>
                    <td>{{$_sysAdmin->sa_lastname}}</td>
                    <td>{{$_sysAdmin->sa_nickname}}</td>
                    <td>{{$_sysAdmin->sa_email}}</td>
                    <td>{{$_sysAdmin->sa_username}}</td>
                    <td>{{$_sysAdmin->sa_password}}</td>
                    <td>
                        <?php 
                            echo ($_sysAdmin->sa_active == "1") ? "Active" : "Not active";
                        ?>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
        
@endsection
