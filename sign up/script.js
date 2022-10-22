// JavaScript Document

let form = document.getElementById("form");
let username = document.getElementById("username");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirm = document.getElementById("confirm");

function setError(input , message){
	let box = input.parentNode;
	box.className = "boxa error";
	let small = box.querySelector("small");
	small.innerHTML = message;
}

function setSuccess(input){
	let box = input.parentNode;
	box.className = "boxa success";
}

function checkEmail(input){
	let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(re.test){
		setSuccess(input);
	}else{
		setError(input , "Email is not valid");
	}
}

function checkReq(array){
	array.forEach(function(input){
		if(input.value === ''){
			setError(input , `${alphaCaps(input)} is required`);
		}else{
			setSuccess(input);
		}
	});
}

function checkPass(input , min , max){
	if(input.value.length < min){
		setError(input , `${alphaCaps(input)} must be atleast ${min}`);
	}else if(input.value.length > max){
		setError(input , `${alphaCaps(input)} must be lesser than ${max}`);
	}else{
		setSuccess(input);
	}
}

function alphaCaps(input){
	return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function matchPass(input1 , input2){
	if(input1.value !== input2.value){
		setError(input2 , "Password does not match");
	}
}


form.addEventListener("submit" , function(e){
	e.preventDefault();
	
	checkEmail(email);
	checkReq([username , email , password , confirm]);
	checkPass(username , 2 , 15);
	checkPass(password , 5 , 9);
	matchPass(password , confirm);
});