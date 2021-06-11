const registerBtn = document.getElementById("registerBtn");
const loginBtn = document.getElementById("loginBtn");

function register(){
  const username = document.getElementById("username").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const passwordConfirm = document.getElementById("passwordConfirm").value;

  const validMsg = document.getElementById("validMsg");

  let check = false;

  if (username.length == 0)
    validMsg.innerHTML = "*Please enter your username.";
  else if (email.length == 0)
    validMsg.innerHTML = "*Please enter your email address.";
  else if (password.length == 0)
    validMsg.innerHTML = "*Please enter your password.";
  else if (passwordConfirm.length == 0)
    validMsg.innerHTML = "*Please enter password confirmation.";
  else
    check = true;

  if(check){
    check = password.length >= 6;
    if(!check)
      validMsg.innerHTML = "*Password must contain atleast 6 characters.";
    else {
      check = password == passwordConfirm;
      if(!check)
        validMsg.innerHTML = "*Password confirmation did not match."
      else{
        validMsg.style.color = "#299229";
        validMsg.innerHTML = "User register succesful. You will be redirected shortly.";
        setTimeout(function () {
          window.location.href = "login.html"; 
       }, 3000);
      }
    }
  }
};

// function login(){
//   const username = document.getElementById("username").value;
//   const password = document.getElementById("password").value;

//   const validMsg = document.getElementById("validMsg");
  
//   let check = false;

//   if(username.length == 0)
//     validMsg.innerHTML = "*Please enter your username.";
//   else if (password.length == 0)
//     validMsg.innerHTML = "*Please enter your password.";
//   else {
//     check = true;
//   }

//   if(check){
//     if (username == "teguhs" && password == "123456"){
//       validMsg.style.color = "#299229";
//       validMsg.innerHTML = "Successfully logged in. You will be redirected shortly.";
//       setTimeout(function () {
//         window.location.href = "index.html"; 
//      }, 3000);
//     } else{
//       validMsg.innerHTML = "*Wrong username or password."
//     }

//   }
    
// };