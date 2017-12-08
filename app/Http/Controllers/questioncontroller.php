<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Session;
use App\catagory;
use App\question;
use App\empty_obj;
use App\notification;
use DB;


class questioncontroller extends Controller
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
        if(session::has('address')){
            return view('question.post_question');
        }else{
            return redirect()->route('home',session('nul'));
        }
    }



    function Date_Time(){
    date_default_timezone_set('Asia/Dhaka'); // CDT

$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

//$current_date = "$date/$month/$year == $hour:$min:$sec";
$current_date = "$year-$month-$date $hour:$min:$sec";
return $current_date;
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)///For post question
    {
        if(session::has('email')){
            $email=session::get('email');
            $question=new question;
            $question->email=$email;
            $question->catagory=$request->catagory;
            $question->question=$request->question;
            $question->save();

            $queid=question::select('id')->where('email',$email)->orderBy('id','DESC')->first();
            //$queid="50";
            $ans_id="ques_".$queid->id."ans_table";
            Schema::create($ans_id,function ($table){
                $table->increments('id');
                $table->string('email');
                $table->string('answer',1500);
                $table->string('liked')->default('0');
                $table->string('disliked')->default('0');
                $table->timestamps();

            });


                  $ans_lik_dislik="ques_".$queid->id."lik_dislik_table";
            Schema::create($ans_lik_dislik,function ($table){
                $table->increments('id');
                $table->string('email')->default('mail');
                $table->string('qus_or_ans');
                $table->string('a_id')->default('0');
                $table->string('liked')->default('0');
                $table->string('disliked')->default('0');
                $table->timestamps();

            });


            //$notification=new notification();
            $catagory=new catagory();
            $cat=$request->catagory;
            $user_list=catagory::where($request->catagory,'=','1')->get();

            foreach ($user_list as $list) {
               //return $list->$cat;
                DB::update("update notifications set check_not='1' where email='$list->email'");
                // $notification=notification::find($list->email);
                // $notification->check_not='1';
                // $notification->save();

                
            }

            $rating= DB::select("select rating from sign_in_ups  where email='$email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0001;
              DB::update("update sign_in_ups set rating='$R_point' where email='$email'");

            return redirect('/question');

        }else{
            return redirect()->route('home',session('nul'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)///for show questions
    {

        

        if(session::has('email')){
            $email=session::get('email');
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
    public function edit($id)///calling doans view
    {
        if(session::has('email'))
        {
            $email=session::get('email');

            $queinfo=question::where('id','=',$id)->first();
           // $question= new question;
            // $queinfo=question::find()->get();

            return view("question.doans",compact('queinfo'));
            //return $id;
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
    public function update(Request $request, $id)///insert new answer
    {
        if(session::has('email'))
        {
             $email=session::get('email');

            $table="ques_".$id."ans_table";
             $user=DB::connection('mysql');
             $answer=$request->answer;
             $createdat=self::Date_Time();



            DB::insert("insert into ".$table." (email,answer,liked,disliked,created_at) values('$email','$answer','0','0','$createdat')");
              $table="ques_".$id."ans_table";

              $user=DB::connection('mysql');
              $answers= DB::select("select * from ".$table);
              $queinfo=question::where('id','=',$id)->first();


                  $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");

              

            return view('question.seeans',compact('answers','queinfo'));
           // // return view("question.doans",compact('id'));
           // return view('question.seeans');
         }else{
             return redirect()->route('home',session('nul'));
         }
    }



    public function see_ans($id){///see ans

        if(session::has('email'))
        {
             $email=session::get('email');
              $table="ques_".$id."ans_table";

              $user=DB::connection('mysql');
              $answers= DB::select("select * from ".$table);
              $queinfo=question::where('id','=',$id)->first();

              

             return view('question.seeans',compact('answers','queinfo'));


         }else{
            return redirect()->route('home',session('nul'));
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



    public function like_update($id){//like to the question
       if(session::has('email')){
        $quid="ques_".$id."lik_dislik_table";
            $email=session::get('email');
             $user=DB::connection('mysql');
             try{


                //$qulk_dlk_info=DB::select("select * from ".$quid." where email='$email'");
                   

                    
                 if($qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' and qus_or_ans='q'")){
                 
                   

                    

                    if($qulk_dlk_info[0]->liked=="1" ){
                        $dateTime=self::Date_Time();
                        DB::update("update ".$quid." set liked='0',updated_at='$dateTime' where email='$email' and qus_or_ans='q'");


                        $question=new question;
                         $question=question::where('id',$id)->first();

                         $liked=intval($question->liked);
             
                         $liked--;
                        $question=question::find($id);
                        $question->liked=$liked;
                         $question->save();


                             $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                         
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point-0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");

                         return $liked;
                    }
                    else if($qulk_dlk_info[0]->liked=="0"){
                          $dateTime=self::Date_Time();
                                         DB::update("update ".$quid." set liked='1',updated_at='$dateTime' where email='$email' and qus_or_ans='q'");


                        $question=new question;
                         $question=question::where('id',$id)->first();

                         $liked=intval($question->liked);
             
                         $liked++;
                         
                        $question=question::find($id);
                        $question->liked=$liked;
                         $question->save();

                             $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $liked;

                    }

                 }
                 
         
                 else{
                        $dateTime=self::Date_Time();

                        DB::insert("insert into ".$quid." (email,qus_or_ans,liked,disliked,created_at) values('$email','q','1','0','$dateTime')");
                                $question=new question;
                         $question=question::where('id',$id)->first();

                         $liked=intval($question->liked);
             
                         $liked++;
                        $question=question::find($id);
                        $question->liked=$liked;
                         $question->save();




                         $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $liked;
                    
                 }
  
                    

             }catch(Exception $e){


             }
            
        }

    }


 


    public function dislike_update($id){///Dislike the question
       if(session::has('email')){
        $quid="ques_".$id."lik_dislik_table";
            $email=session::get('email');
             $user=DB::connection('mysql');
             try{


                //$qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' and qus_or_ans='q'");
                   

                    
                 if($qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' and qus_or_ans='q'")){
                 
               
                    

                    if($qulk_dlk_info[0]->disliked=="1" ){
                        $dateTime=self::Date_Time();
                        DB::update("update ".$quid." set disliked='0',updated_at='$dateTime' where email='$email' and qus_or_ans='q'");


                        $question=new question;
                         $question=question::where('id',$id)->first();

                         $disliked=intval($question->disliked);
             
                         $disliked--;
                        $question=question::find($id);
                        $question->disliked=$disliked;


                         $question->save();


                             $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $disliked;
                    }
                    else if($qulk_dlk_info[0]->disliked=="0"){
                         $dateTime=self::Date_Time();
                                         DB::update("update ".$quid." set disliked='1',updated_at='$dateTime' where email='$email' and qus_or_ans='q'");


                        $question=new question;
                         $question=question::where('id',$id)->first();

                         $disliked=intval($question->disliked);
             
                         $disliked++;
                        $question=question::find($id);
                        $question->disliked=$disliked;
                         $question->save();


                             $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point-0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $disliked;

                    }

                 }
                
             
                 else{
                         $dateTime=self::Date_Time();

                        DB::insert("insert into ".$quid." (email,qus_or_ans,liked,disliked,created_at) values('$email','q','0','1','$dateTime')");
                                $question=new question;
                         $question=question::where('id',$id)->first();

                         $disliked=intval($question->disliked);
             
                         $disliked++;
                        $question=question::find($id);
                        $question->disliked=$disliked;
                         $question->save();



                             $email_find= DB::select("select email from questions  where id=$id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point-0.0002;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $disliked;
                    
                 }
  
                    

             }catch(Exception $e){


             }
            
        }

    }










function ques_ans_like($id){///like answer
        if(session::has('email')){
            $user=DB::connection('mysql');
            $all_ids=explode(",", $id);
            $q_id=$all_ids[0];
            $a_id=$all_ids[1];
        $quid="ques_".$q_id."lik_dislik_table";
        $ans_tbl_id="ques_".$q_id."ans_table";
            $email=session::get('email');
             $user=DB::connection('mysql');
             try{


               // $qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' ");
                   

                    
                 if( $qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' and qus_or_ans='a' and a_id='$a_id'")){
                 
                  

                    if($qulk_dlk_info[0]->liked=="1" ){
                        $dateTime=self::Date_Time();
                        DB::update("update ".$quid." set liked='0',updated_at='$dateTime' where email='$email' and qus_or_ans='a' and a_id='$a_id'");

                            
                           $ans_like_dis= DB::select("select * from ".$ans_tbl_id." where id=$a_id");

                       // $question=new question;
                         //$question=question::where('id',$id)->first();
                          // $ans_lk_dlk_count=$ans_like_dis[0]->liked;
                           //return $a_id;

                         $liked=intval($ans_like_dis[0]->liked);
             
                         $liked--;
                        DB::update("update ".$ans_tbl_id." set liked='$liked',updated_at='$dateTime' where id=$a_id");



                            $email_find= DB::select("select email from ".$ans_tbl_id."  where id=$a_id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point-0.0004;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $liked;
                    }
                    else if($qulk_dlk_info[0]->liked=="0"){
                          $dateTime=self::Date_Time();
                                         DB::update("update ".$quid." set liked='1' where email='$email' and qus_or_ans='a' and a_id='$a_id'");


                    

                          $ans_tbl_id="ques_".$q_id."ans_table";
                 

                         $ans_like_dis= DB::select("select * from ".$ans_tbl_id." where id=$a_id");

                           //$ans_lk_dlk_count=$ans_like_dis[0]->liked;

                         $liked=intval($ans_like_dis[0]->liked);
             
                         $liked++;
                         $dateTime=self::Date_Time();
                        DB::update("update ".$ans_tbl_id." set liked='$liked',updated_at='$dateTime' where id=$a_id");


                            $email_find= DB::select("select email from ".$ans_tbl_id."  where id=$a_id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0004;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $liked;

                    }

                 }
                
            
                 else{
                        $dateTime=self::Date_Time();

                        DB::insert("insert into ".$quid." (email,qus_or_ans,liked,disliked,created_at,a_id) values('$email','a','1','0','$dateTime','$a_id')");

                         $ans_tbl_id="ques_".$q_id."ans_table";
                 

                         $ans_like_dis= DB::select("select * from ".$ans_tbl_id." where id=$a_id");

                           //$ans_lk_dlk_count=$ans_like_dis[0]->liked;

                         $liked=intval($ans_like_dis[0]->liked);
             
                         $liked++;
                         $dateTime=self::Date_Time();
                        DB::update("update ".$ans_tbl_id." set liked='$liked',updated_at='$dateTime' where id=$a_id");

                               $email_find= DB::select("select email from ".$ans_tbl_id."  where id=$a_id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0004;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $liked;
                    
                 }
  
                    

             }catch(Exception $e){


             }
            
        }

}





function ques_ans_dislike($id){///dislike answer
        if(session::has('email')){
            $user=DB::connection('mysql');
            $all_ids=explode(",", $id);
            $q_id=$all_ids[0];
            $a_id=$all_ids[1];
        $quid="ques_".$q_id."lik_dislik_table";
         $ans_tbl_id="ques_".$q_id."ans_table";
            $email=session::get('email');
             $user=DB::connection('mysql');
             try{


               // $qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' ");
                   

                    
                 if( $qulk_dlk_info=DB::select("select * from ".$quid." where email='$email' and qus_or_ans='a' and a_id='$a_id'")){
                 
                  

                    if($qulk_dlk_info[0]->disliked=="1" ){
                        $dateTime=self::Date_Time();
                        DB::update("update ".$quid." set disliked='0',updated_at='$dateTime' where email='$email' and qus_or_ans='a' and a_id='$a_id'");

                            $ans_tbl_id="ques_".$q_id."ans_table";
                           $ans_like_dis= DB::select("select * from ".$ans_tbl_id." where id=$a_id");

                    

                         $disliked=intval($ans_like_dis[0]->disliked);
             
                         $disliked--;
                         $dateTime=self::Date_Time();
                        DB::update("update ".$ans_tbl_id." set disliked='$disliked',updated_at='$dateTime' where id=$a_id");


                              $email_find= DB::select("select email from ".$ans_tbl_id."  where id=$a_id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0005;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $disliked;
                    }
                    else if($qulk_dlk_info[0]->disliked=="0"){
                        $dateTime=self::Date_Time();
                                         DB::update("update ".$quid." set disliked='1',updated_at='$dateTime' where email='$email' and qus_or_ans='a' and a_id='$a_id'");


                    

                          $ans_tbl_id="ques_".$q_id."ans_table";
                 

                         $ans_like_dis= DB::select("select * from ".$ans_tbl_id." where id=$a_id");

                           //$ans_lk_dlk_count=$ans_like_dis[0]->liked;

                         $disliked=intval($ans_like_dis[0]->disliked);
             
                         $disliked++;
                         $dateTime=self::Date_Time();
                        DB::update("update ".$ans_tbl_id." set disliked='$disliked',updated_at='$dateTime' where id=$a_id");


                              $email_find= DB::select("select email from ".$ans_tbl_id."  where id=$a_id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point-0.0005;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $disliked;

                    }

                 }
                
            
                 else{
                        $dateTime=self::Date_Time();

                        DB::insert("insert into ".$quid." (email,qus_or_ans,liked,disliked,created_at,a_id) values('$email','a','0','1','$dateTime','$a_id')");

                         $ans_tbl_id="ques_".$q_id."ans_table";
                 

                         $ans_like_dis= DB::select("select * from ".$ans_tbl_id." where id=$a_id");

                           //$ans_lk_dlk_count=$ans_like_dis[0]->liked;

                         $disliked=intval($ans_like_dis[0]->disliked);
             
                         $disliked++;
                         $dateTime=self::Date_Time();
                        DB::update("update ".$ans_tbl_id." set disliked='$disliked',updated_at='$dateTime' where id=$a_id");

                               $email_find= DB::select("select email from ".$ans_tbl_id."  where id=$a_id");
                         $qu_email=$email_find[0]->email;
                          $rating= DB::select("select rating from sign_in_ups  where email='$qu_email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point-0.0005;
              DB::update("update sign_in_ups set rating='$R_point' where email='$qu_email'");
                         return $disliked;
                    
                 }
  
                    

             }catch(Exception $e){


             }
            
        }

}





   
}
