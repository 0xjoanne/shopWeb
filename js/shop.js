$(document).ready(function(){
	// nav active
	if(/index/.test(document.location.href) || document.location.href==="http://localhost/shopweb/"){
		$('.home').addClass('active');
	}
	if(/registration/.test(document.location.href)){
		$('.registration').addClass('active');
	}
	if(/login/.test(document.location.href)){
		$('.login').addClass('active');
	}
	if(/catalog/.test(document.location.href) || /product/.test(document.location.href) ){
		$('.cat').addClass('active');
	}

	// check if passwords match
	function checkPswMatch(){
		var psw = $('.psw').val();
		var confirmPsw = $('.confirm-psw').val();
		if(psw == confirmPsw){
			$('.match-tip').html('');
			$('.signup-btn').prop('disabled',false);
			console.log('he');
		}else{
			$('.match-tip').html('Passwords do not match!');
			$('.signup-btn').prop('disabled', true);
			$('.match-tip').effect( "shake", {times:1}, 500 );
		}
	}
	$(".confirm-psw").focusout(checkPswMatch);
	
	// show cart
	$('.cart-btn').click(function(){
		$('.cart-area').toggle();
	})
})