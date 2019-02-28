window.onload=function(){
function adaptaciya(){
document.querySelector(".form").style.height=innerHeight-58+"px";
}
setInterval(adaptaciya, 250);
}