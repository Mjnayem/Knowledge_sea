@extends('user.app')
@section('body')
<!-- //gallery --> 
<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Get In Touch</h3>
				<p class="sub">Leave your suggestion or any kinds of word which will improve the site</p>
			</div>
			<div class="w3layouts-grids">
				
				<div class="col-md-12 contact-form">
					<form action="/complain" method="post">
						{{csrf_field()}}
						
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
@endsection