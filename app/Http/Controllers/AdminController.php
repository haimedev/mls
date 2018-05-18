<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SystemAdmin;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function auth(Request $request)
    {
        //return "user:".$request->userName_txt." pass:".$request->passWord_txt;
        //return "auth";
        $_sysAdmin = SystemAdmin::where([
                ["sa_username","=",$request->userName_txt],
                ["sa_password","=",$request->passWord_txt]
            ])->get();

        //if login attempt is successful 
        if($_sysAdmin->count()>0)
        {
            foreach($_sysAdmin as $_tempSysAdmin)
            {
                Session::put("loggedAdmin", $_tempSysAdmin->sa_nickname);
                echo "1";
                break;
            }

            echo "2";
            return redirect("/");
        }
        else
        {
            Session::put("indexMsg","Invalid account!");
            return redirect("/");
        }
    }
    public function index()
    {
        $sysAdmin = SystemAdmin::orderBy("sa_id","desc")->get();
        return view("sys_admin.index")->with("sysAdmin", $sysAdmin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sys_admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_systemAdmin = new SystemAdmin;
        $_systemAdmin->timestamps = false;
        $_systemAdmin->sa_firstname = $request->firstName_txt;
        $_systemAdmin->sa_lastname = $request->lastName_txt;
        $_systemAdmin->sa_email = $request->email_txt;
        $_systemAdmin->sa_username = $request->username_txt;
        $_systemAdmin->sa_password = $request->password_txt;
        $_systemAdmin->sa_password_confirm = $request->passwordConfirm_txt;
        $_systemAdmin->sa_nickname = $request->nickName_txt;
        $_systemAdmin->save();
        Session::put("indexMsg", "Successfully Registered!");
        //Session::put("adminName", $request->nickName_txt);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
