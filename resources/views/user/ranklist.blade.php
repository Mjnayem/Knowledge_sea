@extends('question.app')
@section('body')
<hr>
<div class="container">
<div class="row">



	<label class=" col-md-4 pull-left fnt_clr">My Rating</label>
		<p class=" col-md-4 pull-right fnt_clr">{{$rt}}</p>
		<p class=" col-md-4 pull-right fnt_clr">{{$myRank[0]->rating}}</p>
		
<hr>


				<label class=" col-md-4 pull-left">Name</label>
				<label class=" col-md-4 pull-right">Position</label>
		<label class=" col-md-4 pull-right">Rating Points</label>
		
		<hr>



		<hr>
		<?php $pos=1;?>
		@foreach($allRank as $rank)

	<div class="jumbotron">
		<a href="/notification/{{$rank->email}}/edit" class=" col-md-4 pull-left">{{$rank->name}}</a>
		<p class=" col-md-4 pull-right">{{$pos}}</p>
		<p class=" col-md-4 pull-right">{{$rank->rating}}</p>
		

	</div>
	<hr>
			<?php $pos++;?>
	@endforeach
</div>
</div>
@endsection