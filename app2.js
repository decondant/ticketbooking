
let passwordL=document.getElementById("txtPasswordL");
let usernameL=document.getElementById("txtUsernameL");
let formL=document.getElementById("formL");


function validateLoginInput(){
if (usernameL.value.trim()==="") {
	onError(usernameL,"UserName cannot be empty.");
}else{
	onSuccess(usernameL);
}
if (passwordL.value.trim()==="") {
	onError(passwordL,"Password cannot be empty.");
}else{
	onSuccess(password);
}
}

document.querySelector("button")
.addEventListener("click", (event)=>{
	event.preventDefault();
	validateLoginInput();
});

function onSuccess(input){
	let parent=input.parentElement;
	let messageEle=parent.querySelector("small");
	messageEle.style.visibility="hidden";
	messageEle.innerText="";
	parent.classList.remove("error");
	parent.classList.add("success");
}

function onError(input, message){
	let parent=input.parentElement;
	let messageEle=parent.querySelector("small");
	messageEle.style.color ="red";
	messageEle.style.visibility="visible";
	messageEle.innerText=message;	
	parent.classList.add("error");
	parent.classList.remove("success");	
}