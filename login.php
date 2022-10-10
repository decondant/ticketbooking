<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking App</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">

  <nav>
    <label class="logo">Ticket Booking App</label>
    <ul>
      <li><a class="btn" href="index.php">Register</a></li>
    </ul>
  </nav>

    <div class="loginform">

      <?php
        if (isset($_SESSION['wrongPass']) && isset($_SESSION['wrongPass'])!='' ) {
            echo '<div class="success"><h3 align="center">'.$_SESSION['wrongPass'].'<h3></div>';
            unset($_SESSION['wrongPass']);
        }
        if (isset($_SESSION['doesntExist']) && isset($_SESSION['doesntExist'])!='' ) {
            echo '<div class="danger"><h3 align="center">'.$_SESSION['doesntExist'].'<h3></div>';
            unset($_SESSION['doesntExist']);
        }        
      ?>

    <div class="header">
      <h2>Login</h2>
    </div>
    
    <form class="form" id="form" method="POST" action="login_check.php">
      <div class="form-control">
        <label for="username" name="username">Username</label>
        <input type="text" name="username" id="txtUsername">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <label for="password" name="password">Password</label>
        <input type="password" name="password" id="txtPassword">
        <small>Error Message</small>
      </div>
      <div class="form-control">
        <button type="submit">Login</button>
      </div>      
    </form>
  </div>
  </div>

<!-- <footer>
  <h2 class="footer_txt">All @copyright reserved by web tech knowledge.</h2>
</footer> -->
<!-- <script src="app.js"></script> -->
<script type="text/javascript">
  
let username=document.getElementById("txtUsername");
let password=document.getElementById("txtPassword");
let form=document.getElementById("form");
  
function validateInput(){

if (username.value.trim()==="") {
  onError(username,"UserName cannot be empty.");
}else{
  onSuccess(username);
}

if (password.value.trim()==="") {
  onError(password,"Password cannot be empty.");
}else{
  onSuccess(password);
      document.getElementById('form').submit();
}

}

document.querySelector("button")
.addEventListener("click", (event)=>{
  event.preventDefault();
  
   validateInput();
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


</script>
</body>
</html>