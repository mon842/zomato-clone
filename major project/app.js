 //header section

let location_bx=document.getElementById("location-bx");
let search_address=document.getElementById("search_address");
let search_arrow=document.getElementById("search_arrow");

search_address.addEventListener("focusin",()=>{
    location_bx.style.visibility="visible";
    search_arrow.style.transform="rotate(180deg)";
    location_bx.style.opacity=1;
})


search_address.addEventListener("focusout",()=>{
    location_bx.style.visibility="hidden";
    search_arrow.style.transform="rotate(0deg)";
    location_bx.style.opacity=0;
})

// main
