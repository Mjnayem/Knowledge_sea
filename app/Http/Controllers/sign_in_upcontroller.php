<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sign_in_up;
use App\userinfo;
use App\catagory;
use App\notification;
use App\Http\Controllers\userinfocontroller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

use Session;



class sign_in_upcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sign_in_up = new sign_in_up;
        $this->validate($request,[
                'email'=>'unique:sign_in_ups',     

            ]);
        $re_pass=$request->signup_re_password;
        $pass=$request->signup_password;
        if($re_pass==$pass){

                 $sign_in_up->name=$request->signup_name;
                $sign_in_up->email=$request->signup_email;
                $sign_in_up->password=$request->signup_password;
                $sign_in_up->save();


                $userinfo =new userinfo;
                $userinfo->email=$request->signup_email;
                $userinfo->name=$request->signup_name;
                $userinfo->save();


                $catagory=new catagory;
                $catagory->email=$request->signup_email;
                $catagory->save();
                 



                 $notification= new notification;
                 $notification->email=$request->signup_email;

                 $notification->check_not="0";
                 $notification->save();
                 return redirect('/home');

        }else{
            $msg="Password and Re-Enter password does not match";
            return view('alert',compact('msg'));
        }


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
       $email=$request->signin_email;
       $password=$request->signin_password;

       // $eml=sign_in_up::where('email',$email)->get();
       // //$arr=json_decode( $sign_in_up,true);
       // return $eml->email;
      
        try{
             $sign_in_up=sign_in_up::where('email',$email)->first();
             if($sign_in_up!=null){

                 //$email_inputed=$sign_in_up->email;
                 $password_from_list=$sign_in_up->password;
                 if($password_from_list==$password){
                   
                    // $result=new userinfocontroller;
                    // print($result->index());
                    session::put('email',$email);

                   return redirect()->route('userinfo',session('nul'));


                 }else{
                    $msg="Sorry Your Provided Password is not Currect.";
                      return view('alert',compact('msg'));

                 }




             }else{
                  $msg="Sorry Your Provided Email is not in the list.";
            return view('alert',compact('msg'));
             }
             

        }catch(Exception $e){
            // $msg="Name not exist";
            // return view('alert',compact('msg'));

        }

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
