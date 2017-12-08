<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use Session;
use App\catagory;
use App\question;
use App\empty_obj;
use App\notification;
use DB;
use App\examlist;

class examcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         if(session::has('email')){
            $email=session::get('email');

            $a_exams=DB::select("select * from examlists");
        return view('exam.exam_home',compact('a_exams'));
             }else{
            return redirect()->route('home',session('nul'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//get exam name date
    {
       if(session::has('email')){
            $email=session::get('email');
                $date_time=$request->year."-".$request->month."-".$request->day." ".$request->hour.":".$request->min.":".$request->sec;
                // 2017-08-31 13:23:19
                $examlist=new examlist;
                $examlist->title=$request->title;
                $examlist->email=$email;
                $examlist->date=$date_time;
                $examlist->save();
                $exam_id=DB::select("select id from examlists where email='$email' and title='$request->title' and date='$date_time'");
                  $id=$exam_id[0]->id;

                    $candidate="exam".$id."candidates";
                    $ans="exam".$id."question_answers";

                       Schema::create($candidate,function ($table){
                $table->increments('id');
                $table->string('email');
                
                $table->string('number')->default('0');
                $table->timestamps();

            });



                               Schema::create($ans,function ($table){
                $table->increments('id');
                $table->string('q_num')->default('0');
                $table->string('question',1000)->default('0');
                $table->string('op_1',200)->default('0');
                $table->string('op_2',200)->default('0');
                $table->string('op_3',200)->default('0');
                $table->string('op_4',200)->default('0');
                $table->string('q_ans',200)->default('0');
                $table->timestamps();

            });

                               session::put('exam_id',$id);
                //return $id;
              
         return view('exam.question_set');
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
    public function show($id)//print exam paper
    {
         if(session::has('email')){
            $email=session::get('email');

            $cnddt="exam".$id."candidates";
            if($pk=DB::select("select * from ".$cnddt." where email='$email'")){
                return view('exam.exam_done_past',compact('pk'));
            }else{
                 $qu_id="exam".$id."question_answers";
            $ques=DB::select("select * from ".$qu_id);

                    return view('exam.exam_paper',compact('ques','id'));

            }

           
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
    public function edit(Request $request, $id)//for checking exam paper 
    {
          if(session::has('email')){
            $email=session::get('email');
            $table_id="exam".$id."question_answers";

            $a_exams=DB::select("select * from ".$table_id);
            $cr_ans=0;
            foreach ($a_exams as $q_info) {
                $an="answer".$q_info->id;
                if($q_info->q_ans==$request->$an){
                    $cr_ans++;
                }

                
            }
                $point=$cr_ans*.0005;


                 $rating= DB::select("select rating from sign_in_ups  where email='$email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+$point;
              DB::update("update sign_in_ups set rating='$R_point' where email='$email'");
                $candidate_tbl="exam".$id."candidates";
              DB::insert("insert into ".$candidate_tbl." (email,number) values('$email','$cr_ans')");

              ?>
              <script type="text/javascript">
              var p="<?php  echo $cr_ans;?>"
                  alert("Your point is ::"+p);
              </script>
              <?php

              return self::index();
            //return $cr_ans;
        //return view('exam.exam_home',compact('a_exams'));
             }else{
            return redirect()->route('home',session('nul'));
        }
    }

    // public function check_paper(Request $request, $id){
    //         return "shgkhghg";
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//storing questions
    {
        if(session::has('email')){
            $email=session::get('email');
             $exam_id=session::get('exam_id');

             $que_table="exam".$exam_id."question_answers";
       for($i=1;$i<=10;$i++){
        $z="question".$i;
        $ques=$request->$z;
        $z="question".$i."option1";
        $op1=$request->$z;
        $z="question".$i."option2";
        $op2=$request->$z;
        $z="question".$i."option3";
        $op3=$request->$z;
        $z="question".$i."option4";
        $op4=$request->$z;
        $z="question".$i."answer";
        $q_ans=$request->$z;


        DB::insert("insert into ".$que_table."(q_num,question,op_1,op_2,op_3,op_4,q_ans) values ('$i','$ques','$op1','$op2','$op3','$op4','$q_ans')");
        session::forget('exam_id');

        $rating= DB::select("select rating from sign_in_ups  where email='$email'");
             $R_point=floatval($rating[0]->rating);
             $R_point=$R_point+0.0005;
              DB::update("update sign_in_ups set rating='$R_point' where email='$email'");




                  $a_exams=DB::select("select * from examlists");
        
        
        
       }
            }else{
            return redirect()->route('home',session('nul'));
        }
        return view('exam.exam_home',compact('a_exams'));
        
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
