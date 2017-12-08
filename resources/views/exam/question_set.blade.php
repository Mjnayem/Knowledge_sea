@extends('user.app')
@section('body')
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				
					<form class="form-horizontal" action="/exam/0" method="post">
					{{csrf_field()}}
					{{method_field("PUT")}}
  <fieldset>
    <legend>Questions</legend>
    @for($i=1;$i<=10;$i++)
    <div class="jumbotron">
    <div class="form-group ">
      <label for="inputEmail" class="col-lg-2 control-label">Question{{$i}}</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Question" name="question{{$i}}">
      </div>
    </div>
   		<div class="col-md-6">
     <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Option 1</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Option 1" name="question{{$i}}option1">
      </div>
    </div>

    <div class="form-group ">
      <label for="inputEmail" class="col-lg-4 control-label">Option 2</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Option 2" name="question{{$i}}option2">
      </div>
    </div>
    </div>



    <div class="col-md-6">
     <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Option 3</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Option 3" name="question{{$i}}option3">
      </div>
    </div>

    <div class="form-group ">
      <label for="inputEmail" class="col-lg-4 control-label">Option 4</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Option 4" name="question{{$i}}option4">
      </div>
    </div>
    </div>
     <div class="form-group ">
      <label for="inputEmail" class="col-lg-4 control-label">Answer</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" id="inputEmail" placeholder="Answer" name="question{{$i}}answer">
      </div>
    </div>
   
    <hr>
    <hr>
   </div>
   @endfor
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-1">
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

			</div>
			
		</div>
	</div>
@endsection