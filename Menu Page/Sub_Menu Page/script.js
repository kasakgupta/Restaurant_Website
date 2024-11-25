// script.js

function searchDish() {
  const searchTerm = document.getElementById('search-input').value.toLowerCase();
  const menuItems = document.querySelectorAll('.food-menu-item');
  
  // Check if the search term is empty
  if (searchTerm === "") {
    // If empty, display all items and remove highlight
    menuItems.forEach(item => {
      item.style.display = 'flex'; // Show all items
      item.classList.remove('highlight'); // Remove highlight from all
    });
  } else {
    // If there is a search term, filter the items
    menuItems.forEach(item => {
      const title = item.querySelector('.food-title').textContent.toLowerCase();
      
      if (title.includes(searchTerm)) {
        item.style.display = 'flex'; // Show matching items
        item.classList.add('highlight'); // Highlight matching items
      } else {
        item.style.display = 'none'; // Hide non-matching items
        item.classList.remove('highlight');
      }
    });
  }
}

// // Select all food menu items
// const menuItems = document.querySelectorAll('.food-menu-item');

// // Load the sound effect
// const hoverSound = new Audio();
// hoverSound.src = "./click.mp3";

// // Attach event listeners to each menu item
// menuItems.forEach(item => {
//   item.addEventListener('mouseover', () => {
//     hoverSound.currentTime = 0; // Reset sound to start
//     hoverSound.play(); // Play the sound
//   });
// });

// let isPlaying = false;

// menuItems.forEach(item => {
//   item.addEventListener('mouseover', () => {
//     if (!isPlaying) {
//       hoverSound.currentTime = 0;
//       hoverSound.play();
//       isPlaying = true;
//       hoverSound.onended = () => isPlaying = false; // Reset after sound ends
//     }
//   });
// });
