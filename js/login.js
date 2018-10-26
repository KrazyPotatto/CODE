$(function(){
	$(".alert").hide();
	$(".alert").removeClass("hide");
	$('#login').submit(function(){
		$(".alert").fadeOut();
		username = $(this).find("input[id=UserName]").val();
		passw = $(this).find("input[id=PassWord]").val();
		$("#UserName").val("")
		$("#PassWord").val("");
		$(".btn-success").addClass("disabled");
		$(".btn-success").val("Loading ...")
		$.post("php/login.script.php", {username : username, password : passw})
			.done(function(data, text, jqxhr){
				var audio = new Audio('audio/achievement.mp3');
				audio.play();
				$("#message-success").html("Succesfully login. Refreshing in 5 seconds");
				$("#alert-success").fadeIn();
				$("#container").fadeOut();
				setTimeout(function(){ location.reload(); }, 5750);
			})
			.fail(function(jqxhr){
				$("#message-error").html(jqxhr.responseText);
				$("#alert-error").fadeIn();
			}).always(function(jqxhr){
				$(".btn-success").removeClass("disabled");
				$(".btn-success").val("Validate")
			});
		return false;

	});
});