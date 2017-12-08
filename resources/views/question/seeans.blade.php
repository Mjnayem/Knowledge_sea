@extends('question.app')
@section('body')

	<div class="container">



	<script type="text/javascript">
					function lk1(id){

						
									 var xhttp = new XMLHttpRequest();
  										xhttp.onreadystatechange = function() {
    									if (this.readyState == 4 && this.status == 200) {
    										
    								 document.getElementById(id[1]).innerHTML = this.responseText;
    }
  };								//id=5;
  								xhttp.open("GET", "/ques_ans_like/"+id, true);
 								 xhttp.send();
 			//window.location.replace("/ques_ans_like/"+id);



					}



					function lk2(id){
						


						 var xhttp = new XMLHttpRequest();
  							xhttp.onreadystatechange = function() {
  						  if (this.readyState == 4 && this.status == 200) {
    						 document.getElementById(id[1]+"mj").innerHTML = this.responseText;
    }
  };
 									 xhttp.open("GET", "/ques_ans_dislike/"+id, true);
 									 xhttp.send();

					}
				</script>
		
			<div class="row">
				<div class="jumbotron">
					<h3><b>Email</b> :{{$queinfo->email}}</h3>

					<h3><b>Catagory</b> :{{$queinfo->catagory}}</h3>
					<h4>{{$queinfo->question}}</h4>
					<br>
					<br>
					<hr>
				
					@foreach($answers as $ans)
					<h4 class="pull-right">{{$ans->created_at}}</h4>
				<h2><b>Name :</b>{{$ans->email}}</h2>

				<h4><b>Answer :</b>{{$ans->answer}}</h4>

				<?php
					//$n="s";
				$x=array($queinfo->id,$ans->id);
				
				$all_id=json_encode($x);
					//$ids=$queinfo->id.$n.$ans->id;

				?>

				<div class="col-md-3 pull-right">
 			 			<ul class="nav nav-pills">
 			 				{{csrf_field()}}
 						 <li class="lik_btn"><a  onclick="lk1(<?php echo $all_id ;?>)">Like <span class="badge"  id={{$ans->id}}>{{$ans->liked}} </span></a>
 						
						<li class="colr_dis "><a onclick="lk2(<?php echo $all_id ;?>)">Unlike <span class="badge " id={{$ans->id."mj"}}>{{$ans->disliked}}</span></a>
  </li>
</ul>
 			 		</div>
 			 		<hr>


 			 		@endforeach
			</div>
			</div>
	</div>

@endsection