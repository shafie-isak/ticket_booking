
// TOGAL MENU BUTTON
const navMenu = document.getElementById('navMenu');
const hamburger = document.querySelector('.hamburger');

function toggleMenu() {
  navMenu.classList.add('show');
}

function closeMenu() {
  navMenu.classList.remove('show');
}

document.addEventListener('click', (event) => {
  const isClickInsideNav = navMenu.contains(event.target);
  const isClickOnHamburger = hamburger.contains(event.target);

  if (!isClickInsideNav && !isClickOnHamburger) {
    closeMenu();
  }
});



document.addEventListener('DOMContentLoaded', function() {
  const submenuToggles = document.querySelectorAll('.has-submenu > a');
  
  submenuToggles.forEach(function(toggle) {
      toggle.addEventListener('click', function(event) {
          event.preventDefault();
          
          const submenu = this.nextElementSibling;

          if (submenu.style.display === "block") {
              submenu.style.display = "none";
              toggle.style.backgroundColor = "transparent"; // Corrected this line
          } else {
              submenu.style.display = "block";
              toggle.style.backgroundColor = "#00859a"; // Corrected this line
          }
      });
  });
});



// This function toggles the dropdown when the profile image is clicked
function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");
    // Toggle the 'show' class to display or hide the dropdown
    dropdown.classList.toggle("show");
  }
  
  // This function closes the dropdown if the user clicks anywhere outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.profile') && !event.target.matches('.dropdown-content') && !event.target.matches('.dropdown-content a')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var dropdown = dropdowns[i];
        if (dropdown.style.display === "block") {
          dropdown.style.display = "none";
        }
      }
    }
  }
  
  // Add an event listener to the profile image to trigger dropdown toggle
  document.querySelector('.profile').addEventListener('click', toggleDropdown);
  
  

// JavaScript to handle image preview
function previewImage(event) {
    const file = event.target.files[0];  // Get the selected file
    const previewContainer = document.getElementById('image-preview-container');
    const previewImage = document.getElementById('image-preview');

    // Check if the file is an image
    if (file && file.type.startsWith('image')) {
        // Create a URL for the selected image
        const reader = new FileReader();
        reader.onload = function(e) {
            // Set the image source to the selected image
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';  // Show the preview container
        };
        reader.readAsDataURL(file);
    } else {
        // Hide the preview container if the selected file is not an image
        previewContainer.style.display = 'none';
        alert("Please select a valid image file.");
    }
}