const fa_bars = document.querySelector(".fa-bars");
const bg_gray = document.querySelector(".bg-gray-200")
const close = document.querySelector(".fa-x")
const body = document.querySelector("body")
const li = document.querySelectorAll(".li")
const span = document.querySelectorAll("span")
const add = document.querySelectorAll(".topla")
const minus = document.querySelectorAll(".minus")
const buyutec = document.querySelector(".fa-magnifying-glass")
const input = document.querySelector("input")
const shopping = document.querySelector(".fa-cart-shopping")
const cart = document.querySelector(".cart")
fa_bars.addEventListener("click", ()=>{
    bg_gray.classList.remove("hidden")
   
    
    
})
close.addEventListener("click", ()=>{
    bg_gray.classList.add("hidden")
    
    
    
})


// set the default active slide to the first one
let slideIndex = 1;
showSlide(slideIndex);

// change slide with the prev/next button
function moveSlide(moveStep) {
    showSlide(slideIndex += moveStep);
}

// change slide with the dots
function currentSlide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n) {
    let i;
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName('dot');
    
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }

    // hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
    }

    // remove active status from all dots
    for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove('bg-yellow-500');
        dots[i].classList.add('bg-green-600');
    }

    // show the active slide
    slides[slideIndex - 1].classList.remove('hidden');

    // highlight the active dot
    dots[slideIndex - 1].classList.remove('bg-green-600');
    dots[slideIndex - 1].classList.add('bg-yellow-500');
}
document.addEventListener('click', function handleClickOutsideBox(event) {
    const box = document.querySelector('.bg-gray-200');
  
    if (!box.contains(event.target)&&(!box.classList==="hidden")) {
      box.style.display = 'none';
    }
});
function hid(){
    span.forEach(function(spans){
        spans.addEventListener("click",()=>{

            add.forEach(function(adds){
                
                adds.classList.add("hidden");
                
                
               
            })
            
        })
        
    })
    
    
    
    
}
hid()

buyutec.addEventListener("click",()=>{
    input.classList.toggle("hidden")
    input.classList.toggle("block")
    
   
})
shopping.addEventListener("click",()=>{
    cart.classList.toggle("hidden")
    cart.classList.toggle("block")
    
   
})

    
    
