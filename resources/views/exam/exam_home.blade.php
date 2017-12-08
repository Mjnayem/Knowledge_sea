@extends('user.app')
@section('body')
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-7 pull-left">
			
			<form class="form-horizontal" action="/exam" method="post">
			{{csrf_field()}}
  <fieldset>
    <legend>Arrange Exam</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-3 control-label">Exam Title</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="title" required="">
      </div>
    </div>

   <!--  2017-09-28 06:04:20 -->
    
   <div class="form-group">
      <label for="select" class="col-lg-3 control-label">Date</label>
      <div class="col-lg-3">
        <select class="form-control" id="select" name="day">
       @for($i=1;$i<=31;$i++)
          <option>{{$i}}</option>
          @endfor
        </select>
      </div>

      <div class="col-lg-3">
        <select class="form-control" id="select" name="month">
          @for($i=1;$i<=12;$i++)
          <option>{{$i}}</option>
          @endfor
        </select>
      </div>

      <div class="col-lg-3">
        <select class="form-control" id="select" name="year">
         @for($i=2010;$i<=2050;$i++)
          <option>{{$i}}</option>
          @endfor
        </select>
      </div>
    </div>





     <div class="form-group">
      <label for="select" class="col-lg-3 control-label">Time</label>
      <div class="col-lg-3">
        <select class="form-control" id="select" name="hour">
         @for($i=0;$i<=23;$i++)
          <option>{{$i}}</option>
          @endfor
        </select>
        
      </div>


        <div class="col-lg-3">
        <select class="form-control" id="select" name="min">
         @for($i=0;$i<=59;$i++)
          <option>{{$i}}</option>
          @endfor
        </select>
        
      </div>


        <div class="col-lg-3">
        <select class="form-control" id="select" name="sec">
          @for($i=0;$i<=59;$i++)
          <option>{{$i}}</option>
          @endfor
        </select>
        
      </div>
    </div>
    
  
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
		</div>


		<div class="col-md-5 pull-right">
			

			
  <fieldset>
    <legend>Active Exams</legend>
    @foreach($a_exams as $exam)
    <form class="form-horizontal" >
    <?php
date_default_timezone_set('Asia/Dhaka'); // CDT

$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year =intval($info['year']);
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];
$cd=strtotime($current_date = "$year-$month-$date $hour:$min:$sec");
$ed=strtotime($exam_t=$exam->date);

$x=$ed-$cd;


    ?>
  
   @if($x>=0)
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
      <label for="inputEmail" class="col-lg-3 control-label">{{$exam->title}}</label>
      <div class="col-lg-2 pull-right">
      
        <a href="/exam/{{$exam->id}}" type="submit" class="btn btn-primary">Start</a>
      </div>
    </div>
    <hr>
    @endif
   @endforeach
   
   
   
  </fieldset>
</form>
		</div>
	</div>
</div>
@endsection