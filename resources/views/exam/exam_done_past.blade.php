@extends('user.app')
@section('body')
<hr>
<div class="container">
	<div class="row">
		<form class="form-horizontal">
  <fieldset>
    <legend style="color: red;">Sorry ,You already took part in this exam..</legend>
    <div class="form-group col-md-6">
      <label for="inputEmail" class="control-label">Your points  </label>
          </div>

          <div class="form-group col-md-6">
      <label for="inputEmail" class="col-lg-2 control-label" style="color: green;">{{$pk[0]->number}}</label>
          </div>
       
   
  
   
  </fieldset>
</form>
	</div>
</div>

@endsection