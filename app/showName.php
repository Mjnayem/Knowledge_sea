<?php 
use App\sign_in_up;
class showName{
	public show($email){
		$name=sign_in_up::select('name')->where('email',$email)->first();
		return $name;

	}
}

?>