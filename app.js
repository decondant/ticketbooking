//register
let username=document.getElementById("txtUsername");
let name=document.getElementById("txtName");
let surname=document.getElementById("txtSurname");
let idnumber=document.getElementById("txtIdnumber");
let password=document.getElementById("txtPassword");
let phone=document.getElementById("txtPhone");
let form=document.getElementById("form");
let smol=document.getElementById("smol");

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
	onSuccess(passwordL);
}
}

function validateInput(){

if (username.value.trim()==="") {
	onError(username,"UserName cannot be empty.");
}else{
	onSuccess(username);
}

if (name.value.trim()==="") {
	onError(name,"Name cannot be empty.");
}else{
	onSuccess(name);
}
if (surname.value.trim()==="") {
	onError(surname,"Surname cannot be empty.");
}else{
	onSuccess(surname);
}
if (idnumber.value.trim()==="") {
	onError(idnumber,"ID Number cannot be empty.");
}else{
	onSuccess(idnumber);
}
if (password.value.trim()==="") {
	onError(password,"Password cannot be empty.");
}else{
	onSuccess(password);
}

if (phone.value.trim()==="") {
	onError(phone,"Phone cannot be empty.");
}else{
		onSuccess(phone);
		// onSuccessCreation(smol);
		document.getElementById('form').submit();
		
	//	onSuccessCreation();
  //      return true;
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


//dsds
function onSuccessCreation(input){
	let parent=input.parentElement;
	let smol=parent.querySelector("span");
	smol.style.visibility="visible";
	smol.innerText="User Created!";
	parent.classList.remove("error");
	parent.classList.add("success");
}