@extends('question.app')
@section('body')
<dir class="container">
<dir class="row-md-8">
	
<form class="form-horizontal" method="post" action="/question">
{{csrf_field()}}
  <fieldset>
    <legend>Post Your Question</legend>

    	 <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Select Catagory</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="catagory">
          <option value="school">School</option>
          <option value="collage">Collage</option>
          <option value="university">University</option>
          <option value="it">IT</option>
        </select>
      
    </div>
    </div>
  
  
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Your Question</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="12" id="textArea" required="" name="question"></textarea>
        <span class="help-block">Please post the detail question so that others can understand what you want to know.</span>
      </div>
    </div>
   

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
       <input type="submit" name="submit" value="Submit" class="qsub"> 
      </div>
    </div>
  </fieldset>
</form>
</dir>
</dir>

@endsection