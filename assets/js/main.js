// // Optional: JavaScript for smooth scroll behavior or custom controls
// const ticketsContainer = document.querySelector('.container.tickets');
// let scrollAmount = 0;

// function scrollRight() {
//   scrollAmount += 300; // Change this value to adjust scroll speed
//   ticketsContainer.scrollTo({
//     left: scrollAmount,
//     behavior: 'smooth'
//   });
// }

// function scrollLeft() {
//   scrollAmount -= 300;
//   ticketsContainer.scrollTo({
//     left: scrollAmount,
//     behavior: 'smooth'
//   });
// }

// // Example: Add buttons to scroll left and right
// document.querySelector('#scrollRightBtn').addEventListener('click', scrollRight);
// document.querySelector('#scrollLeftBtn').addEventListener('click', scrollLeft);



// let currentIndex = 0;

// function moveSlide(direction) {
//     const cards = document.querySelectorAll('.ticketCard');
//     const totalCards = cards.length;
//     const container = document.querySelector('.scroller');
//     const cardWidth = cards[0].offsetWidth + 20; // Card width + margin between cards
    
//     // Calculate new index based on direction
//     if (direction === 'right') {
//         currentIndex = (currentIndex + 1) % totalCards; // Loop to the first card after the last one
//     } else if (direction === 'left') {
//         currentIndex = (currentIndex - 1 + totalCards) % totalCards; // Loop to the last card when going left
//     }

//     // Apply the new transform to slide the cards
//     container.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
// }


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
