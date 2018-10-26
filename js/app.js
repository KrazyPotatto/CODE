document.addEventListener("DOMContentLoaded",function(e){

	

	if(document.getElementById("continue-adventure") != null){
		document.getElementById("continue-adventure").addEventListener("click", function(){
			console.log("continue-adventure");
		})
		document.getElementById("reset-adventure").addEventListener("click", function(){
			console.log("reset-adventure");
		})
	}

	if(document.querySelector(".mission") != null){
		var t = document.querySelectorAll(".mission")
		t.forEach(function(target){
			target.addEventListener("click", function(e){
				document.querySelector("#mission-form").value = target.classList.item(3)
				console.log("Mission 1 selected")
				target.classList.toggle("disabled")
				target.innerHTML = "Mission - Loading ..."
				document.querySelector(".cb").classList.add("hide")
				document.querySelector("#progress").classList.remove("hide")
				var gameElement = document.querySelector(".game")

				var mission_id = document.querySelector("#mission-form").value
				var code_id = document.querySelector("#mission-code").value
				jQuery.get("php/questions.php", {mission: mission_id,code: code_id} ,function(data){ setLabel(data.question) }, "json")
				.done(function(jqxhr){
					gameElement.classList.toggle("hide")
					document.querySelector(".level-selection").classList.toggle("hide")
					setLabel(jqxhr.question)
				})
			})
		})

		document.querySelector("#form").addEventListener("submit", function(e){
			e.preventDefault()
			successToError()
			document.querySelector(".alert-danger p").innerHTML = "Validating Code ..."
			var mission_id = document.querySelector("#mission-form").value
			var code_id = document.querySelector("#mission-code").value
			jQuery.get("php/questions.php", {mission: mission_id,code: code_id} ,function(data){  }, "json")
			.done(function(jqxhr){
				if(document.querySelector("#answer").value.toString().toLowerCase() != jqxhr.answer){
					successToError()
					document.querySelector(".alert-danger p").innerHTML = "Code is Invalid"
				}else{
					if(document.querySelector(".alert-danger").classList.contains("hide")){}else{
						errorToSuccess()
						document.querySelector(".alert-success p").innerHTML = "Good Answer."
						loadNext(mission_id,code_id)
						document.querySelector("#answer").value = ""
					}
				}
			})
		})


	}
})

var setLabel = function(title){
	document.querySelector("#label").innerHTML = title
}
var setMission = function (mission_id) {
	document.querySelector("#mission-form").value = mission_id
}
var setCode = function(code_id){
	document.querySelector("#mission-code").value = code_id
}
var errorToSuccess = function(){
	if(document.querySelector(".alert-danger") != null){
		document.querySelector(".alert-danger").classList.replace("alert-danger", "alert-success")
	}
}
var successToError = function(){
	if(document.querySelector(".alert-success") != null){
		document.querySelector(".alert-success").classList.replace("alert-success", "alert-danger")
	}
}

var loadNext = function(mission_id, code_id){
	setLabel("Loading next question ...")
	code_id++
	jQuery.get("php/questions.php", {mission: mission_id,code: code_id} ,function(data){  }, "json")
	.done(function(jqxhr){
		setLabel(jqxhr.question)
		setMission(jqxhr.mission)
		setCode(jqxhr.code)
	})
	.always(function(){
		console.log("Next Question")
	})

}