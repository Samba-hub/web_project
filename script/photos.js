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
}

}















