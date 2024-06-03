//Ya no se usa el siguiente script

// // JavaScript para cambiar el color de fondo del header al hacer scroll
// window.addEventListener('scroll', function () {
//   var header = document.querySelector('header');
//   var scrollPosition = window.scrollY;

//   // Cambiar el color de fondo del header basado en la posición de scroll
//   if (scrollPosition > 0) {
//     header.style.backgroundColor = 'rgba(166, 110, 41, 0.8)'; // Translúcido
//   } else {
//     header.style.backgroundColor = '#A66E29'; // Sólido
//   }
// });



// JavaScript para el funcionamiento del acordeón
document.addEventListener('DOMContentLoaded', function () {
  const accordionToggle = document.querySelector('.accordion__toggle');
  const accordionContent = document.querySelector('.accordion__content');

  accordionToggle.addEventListener('click', function () {
    accordionContent.classList.toggle('show');
    accordionToggle.classList.toggle('active');
  });
});

// User panel del navbar
function toggleUserPanel() {
  var panel = document.getElementById("userPanel");
  if (panel.style.display === "block") {
      panel.style.display = "none";
  } else {
      panel.style.display = "block";
  }
}


    function toggleUserPanel() {
      var options = document.getElementById("userOptions");
      options.style.display = options.style.display === "block" ? "none" : "block";
    }
