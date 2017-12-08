
@extends('question.app')
@section('body')
<hr>

	<script type="text/javascript">
					function lk1(id){
									 var xhttp = new XMLHttpRequest();
  										xhttp.onreadystatechange = function() {
    									if (this.readyState == 4 && this.status == 200) {
    										
    								 document.getElementById(id).innerHTML = this.responseText;
    								 document.getElementById(id).style.background="blue";
    }
  };								//id=5;
  								xhttp.open("GET", "/like_up/"+id, true);
 								 xhttp.send();
 			//window.location.replace("/like_up/21");



					}



					function lk2(id){


						 var xhttp = new XMLHttpRequest();
  							xhttp.onreadystatechange = function() {
  						  if (this.readyState == 4 && this.status == 200) {
    						 document.getElementById(id+"mj").innerHTML = this.responseText;
    						 document.getElementById(id+"mj").style.background="blue";
    }
  };
 									 xhttp.open("GET", "/dislike_up/"+id, true);
 									 xhttp.send();

					}
				</script>
<div class="container">
<div class="row">
@if($school!=null )
@foreach($school as $school)
	

		<div class="jumbotron">
		
		
  			<h2>{{$school->catagory}}</h2>
  			<h3 class="pull-right">{{$school->created_at->diffForHumans()}}</h3>
 			 <p>{{$school->question}}</p>
 			 

 			 	<div class="row">
 			 		<div class="col-md-3 pull-left">
 			 			<a href="/see_ans/{{$school->id}}" class="btn btn-primary">See Ans</a>
 			 			<a href="/question/{{$school->id}}/edit" class="btn btn-success">Do Ans</a>
 			 			{{csrf_field()}}
 			 		</div>
 			 		<div class="col-md-3 pull-right">
 			 			<ul class="nav nav-pills">
 			 			<!-- <script type="text/javascript">
 			 				var id_l="<?php echo $school->id ;?>";
 			 			</script> -->
 						 <li class="lik_btn"><a  onclick="lk1(<?php echo $school->id ;?>)">Like <span class="badge" id={{$school->id}}>{{$school->liked}}</span></a>
 						
						<li class="colr_dis "><a onclick="lk2(<?php echo $school->id ;?>)">Unlike <span class="badge " id={{$school->id."mj"}}>{{$school->disliked}}</span></a>
  </li>
</ul>
 			 		</div>
 			 		
 			 	</div>
  			
		</div>



			


		@endforeach

		@else
		{{''}}
		@endif





@if($college!=null )
@foreach($college as $college)
	

		<div class="jumbotron">
		
		
  			<h2>{{$college->catagory}}</h2>
  			<h3 class="pull-right">{{$college->created_at->diffForHumans()}}</h3>
 			 <p>{{$college->question}}</p>
 			 	<div class="row">
 			 		<div class="col-md-3 pull-left">
 			 			<a href="" class="btn btn-primary">See Ans</a>
 			 			<a href="/question/1/edit" class="btn btn-success">Do Ans</a>
 			 		</div>
 			 		<div class="col-md-3 pull-right">
 			 			<ul class="nav nav-pills">
 			 			<!-- <script type="text/javascript">
 			 				var id_l="<?php echo $college->id ;?>";
 			 			</script> -->
 						 <li class="lik_btn"><a  onclick="lk1(<?php echo $college->id ;?>)">Like <span class="badge" id={{$college->id}}>{{$college->liked}}</span></a>
 						
						<li class="colr_dis "><a onclick="lk2(<?php echo $college->id ;?>)">Unlike <span class="badge " id={{$college->id}}>{{$college->disliked}}</span></a>
  </li>
</ul>
 			 		</div>
 			 		
 			 	</div>
  			
		</div>

		@endforeach

		@else
		{{''}}
		@endif







@if($university!=null )
@foreach($university as $university)
	

		<div class="jumbotron">
		
		
  			<h2>{{$university->catagory}}</h2>
  			<h3 class="pull-right">{{$university->created_at->diffForHumans()}}</h3>
 			 <p>{{$university->question}}</p>
 			 	<div class="row">
 			 		<div class="col-md-3 pull-left">
 			 			<a href="" class="btn btn-primary">See Ans</a>
 			 			<a href="" class="btn btn-success">Do Ans</a>
 			 		</div>
 			 			<div class="col-md-3 pull-right">
 			 			<ul class="nav nav-pills">
 			 			<!-- <script type="text/javascript">
 			 				var id_l="<?php echo $university->id ;?>";
 			 			</script> -->
 						 <li class="lik_btn"><a  onclick="lk1(<?php echo $university->id ;?>)">Like <span class="badge" id={{$university->id}}>{{$university->liked}}</span></a>
 						 
						<li class="colr_dis "><a onclick="lk2(<?php echo $university->id ;?>)">Unlike <span class="badge " id={{$university->id}}>{{$university->disliked}}</span></a>
  </li>
</ul>
 			 		</div>
 			 		
 			 	</div>
  			
		</div>

		@endforeach

		@else
		{{''}}
		@endif







@if($it!=null )
@foreach($it as $it)
	

		<div class="jumbotron">
		
		
  			<h2>{{$it->catagory}}</h2>
  			<h3 class="pull-right">{{$it->created_at->diffForHumans()}}</h3>
 			 <p>{{$it->question}}</p>
 			 	<div class="row">
 			 		<div class="col-md-3 pull-left">
 			 			<a href="" class="btn btn-primary">See Ans</a>
 			 			<a href="" class="btn btn-success">Do Ans</a>
 			 		</div>
 			 			<div class="col-md-3 pull-right">
 			 			<ul class="nav nav-pills">
 			 			<!-- <script type="text/javascript">
 			 				var id_l="<?php echo $it->id ;?>";
 			 			</script> -->
 						 <li class="lik_btn"><a  onclick="lk1(<?php echo $it->id ;?>)">Like <span class="badge" id={{$it->id}}>{{$it->liked}}</span></a>
 						
						<li class="colr_dis "><a onclick="lk2(<?php echo $it->id ;?>)">Unlike <span class="badge " id={{$it->id}}>{{$it->disliked}}</span></a>
  </li>
</ul>
 			 		</div>
 			 		
 			 	</div>
  			
		</div>

		@endforeach

		@else
		{{''}}
		@endif











	</div>
<hr>
</div>

@endsection
