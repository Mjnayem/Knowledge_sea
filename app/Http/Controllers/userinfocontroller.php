<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\catagory;
use App\userinfo;
use App\notification;
use Cookie;
use DB;

class userinfocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //session::flush();
       // session::forget('email');
        if(session::has('email')){
            $email=session::get('email');


             $userid=userinfo::select('id')->where('email',$email)->first();

            $userAllInfo=userinfo::find($userid->id);

            session::put('address',$userAllInfo->address);
            session::put('phone',$userAllInfo->phone);
            
            session::put('name',$userAllInfo->name);
            session::put('facebook',$userAllInfo->facebook);
            session::put('twitter',$userAllInfo->twitter);
            session::put('google',$userAllInfo->google);
            session::put('aboutme',$userAllInfo->aboutme);
            $user=DB::connection('mysql');
            $not=DB::select("select * from notifications where email='$email'");
                
             session::put('notifi',$not[0]->check_not);
            return view('user.timeline',compact('email'));
        }else{
            return redirect()->route('home',session('nul'));
        }

        
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 100000000;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         if(session::has('email')){
            $email=session::get('email');
            $userid=userinfo::select('id')->where('email',$email)->first();

            $userAllInfo=userinfo::find($userid->id);
            return view('user.myinfo',compact('userAllInfo'));
            //return $userAllInfo;
         }else{
             return redirect()->route('home',session('nul'));
         }
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
        if(session::has('email')){
             $email=session::get('email');
            if( $request->chk_collage=="on")
            {
                $chk_collage=1;
            }else {
                $chk_collage=0;
            }

             if( $request->chk_school=="on")
            {
                $chk_school=1;
            }else {
                $chk_school=0;
            }

             if( $request->chk_university=="on")
            {
                $chk_university=1;
            }else {
                $chk_university=0;
            }

              if( $request->chk_it=="on")
            {
                $chk_it=1;
            }else {
                $chk_it=0;
            }

          $catagory_id=catagory::select('id')->where('email',$email)->first();
          $catagory=catagory::find($catagory_id->id);
          $catagory->school=$chk_school;
          $catagory->college=$chk_collage;
          $catagory->university=$chk_university;
          $catagory->it=$chk_it;
          $catagory->save();




            
            $userinfo=userinfo::find($id);

            $dateOfBirth=$request->dob_date.".".$request->dob_month.".".$request->dob_year;
            $userinfo->name=$request->name;
            $userinfo->aboutme=$request->about;
            $userinfo->address=$request->address;
            $userinfo->phone=$request->phone;
            $userinfo->facebook=$request->facebook;
            $userinfo->twitter=$request->twitter;
            $userinfo->google=$request->google;
            $userinfo->school=$request->school;

            $userinfo->collage=$request->collage;
            $userinfo->university=$request->university;
            $userinfo->district=$request->district;
            $userinfo->country=$request->country;
            $userinfo->dateofbirth=$request->dateofbirth;
            $userinfo->gender=$request->gander;
            $userinfo->dateofbirth=$dateOfBirth;
            $userinfo->save();
            return redirect('/userinfo');





            


        }else{
            return redirect()->route('home',session('nul'));
        }
    }


    public function logOut(){

        session::forget('email');


             session::forget('address');
            session::forget('phone');
           
            session::forget('name');
            session::forget('facebook');
            session::forget('twitter');
            session::forget('google');
            session::forget('aboutme');
            session::forget('notifi');

        return redirect()->route('home',session('nul'));


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
