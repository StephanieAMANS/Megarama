const myImg = document.querySelector("#actualFilms");

myImg.addEventListener('mouseover', function(){
    myImg.style.backgroundColor = "red";
})
myImg.addEventListener('mouseleave', function(){
    myImg.style.backgroundColor = "white";
})

let message = "Essayez toujours ! Personne ne vous répondra 😜 ..."
let button = document.getElementById("button");
button.addEventListener("click", function (event) {
  event.preventDefault();
  alert(message); 
});