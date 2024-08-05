const navbarToggler = document.querySelector('.navbar-toggler');
const navbarHamburger = document.querySelector('#navbar-hamburger');
const navbarClose = document.querySelector('#navbar-close');

navbarToggler.addEventListener('click', () => {
  navbarHamburger.classList.toggle('d-none');
  navbarClose.classList.toggle('d-block');
});

var login_form= document.querySelector(".loginbox");
var register_form= document.querySelector(".registerbox");
var popupoverlay= document.querySelector(".overlay");
var popupoverlay2= document.querySelector(".overlay2");

var open_login= document.querySelector("#loginbtn");
var open_register= document.querySelector("#registerbtn");

var closelogin=document.querySelector("#close-loginform");
var closeregister=document.querySelector("#close-registerform");

var openfp=document.querySelector("#open-fpform");
var closefp=document.querySelector("#close-fpform");

var forgot_pwd =document.querySelector(".fpbox");

var username=document.getElementById("username");
var email=document.getElementById("emailid");
var phone=document.getElementById("phone");
var pwd=document.getElementById("pwd");
var session=document.getElementById("session");


open_login.addEventListener("click",function()
{
  popupoverlay.style.display="block";
  login_form.style.display="block";

  email.value="";
  pwd.value="";
})

open_register.addEventListener("click",function()
{
  popupoverlay.style.display="block";
  register_form.style.display="block";

  email.value="";
  pwd.value="";
  username.value="";
  phone.value="";
  session.value="Select your Session";


})

closelogin.addEventListener("click",function(){
  popupoverlay.style.display="none";
  login_form.style.display="none";
})

closeregister.addEventListener("click",function(){
  popupoverlay.style.display="none";
  register_form.style.display="none";
})

closefp.addEventListener("click",function(){
  popupoverlay2.style.display="none";
  forgot_pwd.style.display="none";
})

openfp.addEventListener("click",function(){
  popupoverlay2.style.display="block";
  forgot_pwd.style.display="block";
})