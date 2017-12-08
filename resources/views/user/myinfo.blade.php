@extends('user.app')
@section('body')
<hr>
<div class="container">
<div class="w3ls-heading">
				<h3>ALL OF YOUR INFO</h3>
				<p class="sub">You can see your info and also can update these</p>
			</div>
<div class="row">
<form class="form-horizontal" action="{{'/userinfo/'.$userAllInfo->id}}" method="post">

{{csrf_field()}}
 	    {{method_field("PUT")}}
<div class="col-md-6">
	
					
  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="name" required="" value="{{$userAllInfo->name}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">About</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputPassword" name="about" value="{{$userAllInfo->aboutme}}">
       
      </div>
    </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="address" required="" value="{{$userAllInfo->address}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputPassword" name="phone" required="" value="{{$userAllInfo->phone}}">
       
      </div>
    </div>



    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Facebook</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="facebook" value="{{$userAllInfo->facebook}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Twitter</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputPassword" name="twitter" value="{{$userAllInfo->twitter}}">
       
      </div>
    </div>

     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Google</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="google" value="{{$userAllInfo->google}}">
      </div>
    </div>



    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Catagory</label>
      <div class="col-lg-5">
        <label class="col-lg-6">
            <input type="checkbox" name="chk_school"> School
          </label>

           <label class="col-lg-6">
            <input type="checkbox" name="chk_collage"> College
          </label>
      </div>


       <div class="col-lg-5">
        <label class="col-lg-8">
            <input type="checkbox" name="chk_university"> University
          </label>

           <label class="col-lg-4">
            <input type="checkbox" name="chk_it"> IT
          </label>

           
      </div>
    </div>
   
 

    
  </fieldset>
  </div>





<div class="col-md-6">
	
					
  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">School</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="school" value="{{$userAllInfo->school}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Collage</label>
      <div class="col-lg-10" >
        <input type="text" class="form-control" id="inputPassword" name="collage" value="{{$userAllInfo->collage}}">
       
      </div>
    </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">University</label>
      <div class="col-lg-10" >
        <input type="text" class="form-control" id="inputEmail" name="university" value="{{$userAllInfo->university}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label" required="">District</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputPassword" name="district" value="{{$userAllInfo->district}}">
       
      </div>
    </div>



    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label" required="">Country</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="country" value="{{$userAllInfo->country}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label" required="">D.O.B</label>
      <div class="col-lg-10">
        <div class=" control-label col-lg-4">
           <select class="form-control" id="select" name="dob_date" required="">
           @for($i=1;$i<=31;$i++)
          <option value="{{$i}}">{{$i}}</option>
         @endfor
        </select>
      </div>

       <div class=" control-label col-lg-4">
           <select class="form-control" id="select" name="dob_month">
           @for($i=1;$i<=12;$i++)
          <option value="{{$i}}">{{$i}}</option>
         @endfor
         
        </select>
      </div>

       <div class=" control-label col-lg-4 pull-right">
           <select class="form-control" id="select" name="dob_year">
          @for($i=1990;$i<=2050;$i++)
          <option value="{{$i}}">{{$i}}</option>
         @endfor
         
        </select>
      </div>
       
      </div>
    </div>

     <div class="form-group ">
      <label for="inputEmail" class="col-lg-2 control-label">Gander</label>
      <div class=" control-label col-lg-10">
           <select class="form-control" id="select" name="gander">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
         
        </select>
      </div>
    </div>
   
   

    
  </fieldset>
  </div>


 <input type="submit" class="btn btn-default btn-lg btn-block sbtn" value="UPDATE">
				
</form>
	

</div>
</div>
<hr>
@endsection
