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



let currentIndex = 0;

function moveSlide(direction) {
    const cards = document.querySelectorAll('.ticketCard');
    const totalCards = cards.length;
    const container = document.querySelector('.scroller');
    const cardWidth = cards[0].offsetWidth + 20; // Card width + margin between cards
    
    // Calculate new index based on direction
    if (direction === 'right') {
        currentIndex = (currentIndex + 1) % totalCards; // Loop to the first card after the last one
    } else if (direction === 'left') {
        currentIndex = (currentIndex - 1 + totalCards) % totalCards; // Loop to the last card when going left
    }

    // Apply the new transform to slide the cards
    container.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}
