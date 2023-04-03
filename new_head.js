$("#cli").click(()=>{
    // console.log("njhr") 
    $("#nav-list-mb").addClass("active") 
    $("#hambar").addClass("unactive") 

})  
$("#remove").click(()=>{ 
    $("#nav-list-mb").removeClass("active") 
    $("#hambar").removeClass("unactive") 

})

window.onscroll=function(){
    mysc()
} 
let nav=document.getElementById("nav-list-mb");
let sk=nav.offsetTop; 
function mysc(){
    if(window.pageYOffset>=sk){
        nav.classList.add("stky")
    } 
    else{
        nav.classList.remove("stky")
    } 
    console.log("hello90")
}