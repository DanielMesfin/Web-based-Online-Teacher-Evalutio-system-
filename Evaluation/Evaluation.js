

let popup = document.getElementById('popup');
let submit=document.getElementById('submit');
let exit=document.getElementById('exit');
function passwordChange(){
   popup.classList.add("open-popup");
}
function close(){
    popup.classList.remove('open-popup');
}

submit.addEventListener('click',close);
exit.addEventListener('click',close);

function logout(){
    window.location.href="../index.html";
}