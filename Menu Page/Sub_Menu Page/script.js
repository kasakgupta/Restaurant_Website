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
  