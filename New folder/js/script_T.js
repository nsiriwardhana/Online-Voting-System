
function voterBtn(){
    //Get a reference to the button element
var button=document.getElementsByClassName("voterbtn")[0];
    //Add a click event listener to the button
    button.addEventListener("click",function(){
        //Openning the voter page
        window.open("signup-voter.html","_self");
    });
}
function constBtn(){
        //Get a reference to the button element
    var button=document.getElementsByClassName("contbtn")[0];
        //Add a click event listener to the button
        button.addEventListener("click",function(){
            //Openning the contestant page
            window.open("signup-contestant.html","_self");
        });
}

//Password eye icon
const showPassword=document.querySelector("#show-password");
const passwordField=document.querySelector("#show-password");

showPassword.addEventListener("click",function(){
    this.classList.toggle("fa-eye-slash");
    const type=passwordField.getAttribute("type")==="password" ? "text" : "password";
    passwordField.setAttribute("type",type);
});