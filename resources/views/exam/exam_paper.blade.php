@extends('user.app')
@section('body')

<hr>
<div class="container">
	<div class="row">
		<form class="form-horizontal" action="/exam/{{$id}}/edit" method="get">
		{{csrf_field()}}
		<!-- {{method_field("PUT")}} -->
  <fieldset>
    <legend>Write the answer in ans field and answer must be as like as answer</legend>

    			 
    			 
    			 @foreach($ques as $qu)

    			 <div class="jumbotron">
    			 <div class="form-group">
    			 <div class="col-md-12">
      <label for="inputEmail" class="col-lg-2 control-label">Question No {{$qu->id}}</label>
      
        <label for="inputEmail" class="col-lg-10 control-label" style="color:red">{{$qu->question}}</label>
      
    
			</div>

<div class="form-group col-md-6">
      <label for="inputEmail" class="col-lg-1 control-label">A</label>
      <div class="col-lg-10">
        <label for="inputEmail" class="col-lg-5 control-label " style="color:green">{{$qu->op_1}}</label>
      </div>
    </div>


<div class="form-group col-md-6">
      <label for="inputEmail" class="col-lg-1 control-label">B</label>
      <div class="col-lg-10">
        <label for="inputEmail" class="col-lg-5 control-label" style="color:green">{{$qu->op_2}}</label>
      </div>
    </div>


<hr>


    <div class="form-group col-md-6">
      <label for="inputEmail" class="col-lg-1 control-label">C</label>
      <div class="col-lg-10">
        <label for="inputEmail" class="col-lg-5 control-label" style="color:green">{{$qu->op_3}}</label>
      </div>
    </div>


<div class="form-group col-md-6">
      <label for="inputEmail" class="col-lg-1 control-label">D</label>
      <div class="col-lg-10">
        <label for="inputEmail" class="col-lg-5 control-label" style="color:green">{{$qu->op_4}}</label>
      </div>
    </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Answer</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Answer" name="answer{{$qu->id}}">
      </div>
    </div>
   
      </div>

    </div>
   <hr>
   @endforeach
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
	</div>
</div>

@endsection