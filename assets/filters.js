let filtersCategory = document.querySelectorAll(".filterCategory");

filtersCategory.forEach(function (category){
    category.addEventListener("click", function(){
        let parent = category.parentElement;
        let divHeight = parent.childNodes[3].offsetHeight + 30;

        if(!parent.getAttribute("style")){
            parent.style.maxHeight = divHeight + category.offsetHeight + "px";
        }
        else{
            parent.style.removeProperty("max-height");
        }

        category.childNodes[1].classList.toggle("fa-chevron-down");
        category.childNodes[1].classList.toggle("fa-chevron-up");
    });
})