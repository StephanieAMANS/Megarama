let message = "Essayez toujours ! Personne ne vous répondra 😜 ..."
let button = document.getElementById("button");
button.addEventListener("click", function (event) {
  event.preventDefault();
  alert(message); 
});