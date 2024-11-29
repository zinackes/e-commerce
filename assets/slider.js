
let arrowNavs = document.querySelectorAll(".arrowNav");
let sliderContainer = document.querySelector("#slider_container1");
let imgWidth = sliderContainer.childNodes[1].width + 20;
let position = 0;
let moreContainer = document.getElementById("moreContainer");
let moreContainerHeight = moreContainer.childNodes[1].offsetHeight + 30;
loadSlider();

function loadSlider(){
    for(let i = 0; i < arrowNavs.length; i++){
        if(arrowNavs[i].classList.contains("arrow-left") && !sliderContainer.getAttribute("style") ||
        arrowNavs[i].classList.contains("arrow-left") &&
         sliderContainer.style.transform === "translateX(0px)"
        || arrowNavs[i].classList.contains("arrow-right")
    && position === -(sliderContainer.childElementCount-1 )* imgWidth){

            arrowNavs[i].classList.add("cannot_use");
        }
        else{
            arrowNavs[i].classList.remove("cannot_use");
        }
    }
}

function slider(arrowNav){

    navIndex = arrowNav.parentElement.id;
    sliderContainer = document.querySelector(`#slider_container${navIndex}`);

    if(arrowNav.classList.contains("arrow-right")){
        position -= imgWidth;
        console.log("enlevé");
    }
    else if(!arrowNav.classList.contains("cannot_use") && arrowNav.classList.contains("arrow-left")){
        position += imgWidth;
        console.log("rajouté");
    }
    console.log(position);
    sliderContainer.style.transform = `translateX(${position}px)`;
    loadSlider(arrowNav);
}

arrowNavs.forEach(function (arrow){
    arrow.addEventListener("click", function(){
        slider(this);
    });
})


function showMore(){
    moreContainerHeight += moreContainerHeight;
    moreContainer.style.maxHeight = moreContainerHeight + "px";
}