@extends('question.app')
@section('body')
<hr>


<div class="container">
	<div class="row">
		  <legend id="nam_clr">{{$userinfo[0]->name}}</legend>

    <div class="col-md-6 pull-left">
      <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
 		 {{$userinfo[0]->email}}
   	 </div>

   	 <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Address</label>
 		{{$userinfo[0]->address}}
   	 </div>

   	 <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Phone Number</label>
 		 {{$userinfo[0]->phone}}
   	 </div>

   	  <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Facebook</label>
 		 {{$userinfo[0]->facebook}}
   	 </div>
    </div>


    <div class="col-md-6 pull-right">
      <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Country</label>
 		{{$userinfo[0]->country}}
   	 </div>

   	 <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Date of Birth</label>
 		{{$userinfo[0]->dateofbirth}}
   	 </div>

   	 <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Sex</label>
 		{{$userinfo[0]->gender}}
   	 </div>

   	  <div class="well">
      <label for="inputEmail" class="col-lg-4 control-label">Facebook</label>
 		 {{$userinfo[0]->google}}
   	 </div>
    </div>
	</div>
</div>
@endsection