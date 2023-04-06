const fa_bars = document.querySelector(".fa-bars");
const bg_gray = document.querySelector(".bg-gray-200")
const close = document.querySelector(".fa-x")
const body = document.querySelector("body")
fa_bars.addEventListener("click", ()=>{
    bg_gray.classList.remove("hidden")
    body.style.background = "rgba(0, 0, 0, 0.7)";
    
    body.style.zIndex = "999";
    
    
})
close.addEventListener("click", ()=>{
    bg_gray.classList.add("hidden")
    body.style.background = null;
    
    
})