


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


//js para el boton de usuario
    function toggleUserPanel() {
      var options = document.getElementById("userOptions");
      options.style.display = options.style.display === "block" ? "none" : "block";
    }


// Función para establecer una cookie
function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Función para obtener una cookie
function getCookie(name) {
  const cname = name + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(cname) == 0) {
      return c.substring(cname.length, c.length);
    }
  }
  return "";
}

// Verificación de edad
function checkAge() {
  const day = document.getElementById('day').value;
  const month = document.getElementById('month').value;
  const year = document.getElementById('year').value;

  if (!day || !month || !year) {
    showError('Por favor, completa todos los campos.');
    return;
  }

  const birthDate = new Date(year, month - 1, day);
  const today = new Date();
  let age = today.getFullYear() - birthDate.getFullYear();
  const monthDiff = today.getMonth() - birthDate.getMonth();
  const dayDiff = today.getDate() - birthDate.getDate();

  if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
    age--;
  }

  if (age >= 18) {
    setCookie('ageVerified', 'true', 2); 
    document.getElementById('age-modal').style.display = 'none';
    document.getElementById('main-content').classList.remove('blur-background');
  } else {
    showError('Debes tener 18 años o más para entrar.');
  }
}

// Función para mostrar el mensaje de error
function showError(message) {
  const errorMessage = document.getElementById('error-message');
  errorMessage.textContent = message;
  errorMessage.style.display = 'block';
}

// Función para iniciar la verificación de edad
function initAgeVerification() {
  const ageVerified = getCookie('ageVerified');
  if (!ageVerified || ageVerified !== 'true') {
    document.getElementById('age-modal').style.display = 'flex';
    document.getElementById('main-content').classList.add('blur-background');
  } else {
    document.getElementById('age-modal').style.display = 'none';
    document.getElementById('main-content').classList.remove('blur-background');
  }
}

window.onload = initAgeVerification;

// animacion para los cards para-aprender
document.addEventListener('DOMContentLoaded', function() {
  var elements = document.querySelectorAll('.fade-in-scroll');

  function checkVisibility() {
      var windowHeight = window.innerHeight;

      elements.forEach(function(element) {
          var rect = element.getBoundingClientRect();
          if (rect.top < windowHeight - 50) {
              element.classList.add('visible');
          }
      });
  }

  window.addEventListener('scroll', checkVisibility);
  window.addEventListener('resize', checkVisibility);

  checkVisibility(); // Initial check
});