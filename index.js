
// For the pop-up in the login.php
document.addEventListener("DOMContentLoaded", function() {
  var popUpLink = document.getElementById("pop-up");
  var popupOverlay = document.getElementById("popup-overlay");

  if (popUpLink && popupOverlay) {
    popUpLink.addEventListener("click", function(e) {
      e.preventDefault();
      popupOverlay.style.display = "block";
    });

    var closePopup = document.getElementById("close-popup");
    if (closePopup) {
      closePopup.addEventListener("click", function() {
        popupOverlay.style.display = "none";
      });
    }
  }
});

// To disable the input tags in registration.php 

document.addEventListener("DOMContentLoaded", function() {
  var sscBanner = document.querySelector(".banner-ssc");
  var depBanner = document.querySelector(".banner-dep");
  var sscSection = document.querySelector(".ssc");
  var depSection = document.querySelector(".departmental");
  var registrationForm = document.querySelector(".registration-form");



  sscBanner.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default anchor link behavior

    // Toggle visibility of SSC section
    if (sscSection.style.display === "grid") {
      sscSection.style.display = "none"; // Hide the SSC section
      registrationForm.style.display = "none"; // Hide the registration form

    } else {
      sscSection.style.display = "grid"; // Show the SSC section
      depSection.style.display = "none"; // Hide the departmental section
      registrationForm.style.display = "grid"; // Show the registration form

    }

    // Scroll to the SSC section
    sscSection.scrollIntoView({ behavior: "smooth" });
  });


  depBanner.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default anchor link behavior

    // Toggle visibility of departmental section
    if (depSection.style.display === "grid") {
      depSection.style.display = "none"; // Hide the departmental section
      registrationForm.style.display = "none"; // Hide the registration form
    
    } else {
      depSection.style.display = "grid"; // Show the departmental section
      sscSection.style.display = "none"; // Hide the SSC section
      registrationForm.style.display = "grid"; // Show the registration form

    }

    // Scroll to the departmental section
    depSection.scrollIntoView({ behavior: "smooth" });
  });
});




