// Optional: JavaScript for smooth scroll behavior or custom controls
const ticketsContainer = document.querySelector('.container.tickets');
let scrollAmount = 0;

function scrollRight() {
  scrollAmount += 300; // Change this value to adjust scroll speed
  ticketsContainer.scrollTo({
    left: scrollAmount,
    behavior: 'smooth'
  });
}

function scrollLeft() {
  scrollAmount -= 300;
  ticketsContainer.scrollTo({
    left: scrollAmount,
    behavior: 'smooth'
  });
}

// Example: Add buttons to scroll left and right
document.querySelector('#scrollRightBtn').addEventListener('click', scrollRight);
document.querySelector('#scrollLeftBtn').addEventListener('click', scrollLeft);
