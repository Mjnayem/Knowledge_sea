@extends('question.app')
@section('body')

	<div class="container">
		
			<div class="row">
				<div class="jumbotron">

			
    			

					<h3><b>Email</b> :{{$queinfo->email}}</h3>
					<h3> <b>Catagory</b> :{{$queinfo->catagory}}</h3>
					<h4> {{$queinfo->question}}</h4>
					<br>
					<br>
					<hr>

				

				<form class="form-horizontal"  method="post" action="{{'/question/'.$queinfo->id}}">
				{{csrf_field()}}
				 {{method_field("PUT")}}
  <fieldset>
   
 
    <div class="form-group">
      
      <div class="col-lg-10">
        <textarea class="form-control" rows="12" id="textArea" placeholder="Post Your answer of this Question......." name="answer" required=""></textarea>
        
      </div>
    </div>
    
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-9">
        <input type="submit" class="btn btn-primary" name="submit" value=" Submit"/>
      </div>
    </div>
  </fieldset>
</form>

				
			</div>
			</div>
	</div>

@endsection