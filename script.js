function toggleMenu () {  
  const navbar = document.querySelector('.navbar');
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', (e) => {    
    navbar.classList.toggle('show-nav');
  });    
};
toggleMenu();




let message = "Essayez toujours ! Personne ne vous répondra 😜 ..."
let button = document.getElementById("button");
button.addEventListener("click", function (event) {
  event.preventDefault();
  alert(message); 
});