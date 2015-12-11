$(document).ready(function(){
	function checkPswMatch(){
		var psw = $('.psw').val();
		var confirmPsw = $('confirm-psw').val();

		if(psw != confirmPsw){
			$('.match-tip').html('Passwords do not match!');
		}else{
			$('.match-tip').html('');
		}
	}
	$(".confirm-psw").keyup(checkPswMatch);
})