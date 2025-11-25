window.onload = function (){


// Look for the images: gird containers
const x = document.querySelectorAll(".photo_gallery img");

// Travese them one by one. For each one, add two event listener
for(var i = 0; i < x.length; i++){
    let y = x[i];

    // 2. Attach the listener
    y.addEventListener("mouseenter", function(){
       
        //Increase the width
        this.style.flexBasis = "400px";
        
       
    });

    y.addEventListener("mouseout", function(){
       
        //Decrease the width
        this.style.flexBasis = "250px";
         
       
    });

    y.addEventListener("click",function (){
 let popup_window  = document.querySelector(".popup-imag");
 let popup_window_img = document.querySelector(".popup-imag img");

 popup_window_img.src = this.getAttribute("src");
 popup_window.style.display = "block";

    });
}

let exit = document.querySelector(".popup-imag span");
exit.addEventListener("click",function (){


let popup_window  = document.querySelector(".popup-imag");
popup_window.style.display = "none";


})

}















