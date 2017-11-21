$(document).ready(function(){
	$("#signinbox").show();
	$("#signupbox").hide();
	$(".tab").click(function(){
		var x = $(this).attr("id");
		if(x=='signup'){
			$("#signin").removeClass("select");
			$("#signup").addClass("select");
			$("#signupbox").show();
			$("#signinbox").hide();
			$("#signup").css('color','white');
			$("#signin").css('color','rgb(35, 78, 170)');
			$("#signin").css('font-weight','bold');
		}else{
			$("#signup").removeClass("select");
			$("#signin").addClass("select");
			$("#signinbox").show();
			$("#signupbox").hide();
			$("#signup").css('color','rgb(35, 78, 170)');
			$("#signup").css('font-weight','bold');
			$("#signin").css('color','white');
		}
	});
});