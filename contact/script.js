let message = "Nous avons bien pris en compte votre demande. Nous vous recontacterons dès que possible."

let button = document.getElementById("button");
button.addEventListener("click", function (event) {
  event.preventDefault();
  alert(message); 
});