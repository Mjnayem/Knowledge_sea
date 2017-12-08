<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\catagory;
use App\question;
use App\empty_obj;
use App\notification;
use DB;

class notificationcontroller extends Controller
{





     public function get_show_question($email){

        try{

           // $questiuns=question::all();

            $catagory=new catagory;

             $catagory=catagory::where('email',$email)->first();

          
           
          
           

            // if($catagory->school=='0'){
            //      $school=(object)array("id"=>"null");
            // }else{ 
            //     (array)$school=question::where('catagory','=','school')->get();

            // }

            //   if($catagory->college=='0'){
            //     $college=(object)array("id"=>"null");

            // }else{
            //     (array)$college=question::where('catagory','=','collage')->get();
            // }


            //   if($catagory->university=='0'){
            //      $university=(object)array("id"=>"null");
            // }else{
            //      (array)$university=question::where('catagory','=','university')->get();
            // }


            //    if($catagory->it=='0'){
            //     $it=(object)array("id"=>"null");
            // }else{
            //       (array)$it=question::where('catagory','=','it')->get();
            // }



           
         
            //  (object)$scl_col=array_merge((array) $school, (array) $college);
             

            //  // (object)$uni_it=array_merge((array) $university, (array) $it);
            //  // (object)$scl_col_uni_it=array_merge((array) $uni_it, (array) $scl_col);
            // // $uni_it=$university->merge($it);

             return $catagory;



        }catch(Exception  $ex){

        }



          
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()///for showing ranklist
    {
        if(session::has('email')){
            $email=session::get('email');
            $myRank=DB::select("select * from sign_in_ups where email='$email'");

            $allRank=DB::select("select * from sign_in_ups ORDER BY  rating DESC");

           // $mypos=DB::select("SELECT ROW_NUMBER() OVER(ORDER BY rating) AS RowNumber From sign_in_ups WHERE email='$email'");

           // SELECT ROW_NUMBER() OVER (Order by Id) AS RowNumber, Field1, Field2, Field3 FROM User
            $i=1;
            $rt=0;
            foreach ($allRank as $rnk) {

               if($rnk->email==$email)
               {
                    $rt=$i;
               }
               $i++;
            }


        return view('user.ranklist',compact('myRank','allRank','rt'));
            //return $mypos;
    }else{
            return redirect()->route('home',session('nul'));
        }
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


            DB::update("update notifications set check_not='0' where email='$email'");
            $catagory=$this->get_show_question($email);

            if($catagory->school=='1'){
                 $school=question::where('catagory','=','school')->orderBy('id', 'DESC')->get();
             }else{
                $school=null;
             }

               if($catagory->college=='1'){
                 $college=question::where('catagory','=','collage')->orderBy('id', 'DESC')->get();
             }else{
                $college=null;
             }

               if($catagory->university=='1'){
                 $university=question::where('catagory','=','university')->orderBy('id', 'DESC')->get();
             }else{
                $university=null;
             }

               if($catagory->it=='1'){
                 $it=question::where('catagory','=','it')->orderBy('id', 'DESC')->get();
             }else{
                $it=null;
             }

           

          //$questions=$school;
           //return $college;

            return view('question.see_question',compact('school','college','university','it'));
        }else{
            return redirect()->route('home',session('nul'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)///for see someones profile
    {
        if(session::has('email')){
           // $email=session::get('email');
             $userinfo=DB::select("select * from userinfos where email='$id'");





        return view('user.user_info',compact('userinfo'));
    }else{
            return redirect()->route('home',session('nul'));
        }
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
