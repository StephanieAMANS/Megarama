const myImg = document.querySelector("#actualFilms");

myImg.addEventListener('mouseover', function(){
    myImg.style.backgroundColor = "red";
})
myImg.addEventListener('mouseleave', function(){
    myImg.style.backgroundColor = "white";
})