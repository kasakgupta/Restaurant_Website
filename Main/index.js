// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute("href"));
    target.scrollIntoView({
      behavior: "smooth",
    });
  });
});

// Mobile Navigation
const toggleButton = document.querySelector(".toggle-button");
const mobileNav = document.querySelector(".mobile-nav");

toggleButton.addEventListener("click", () => {
  mobileNav.classList.toggle("open");
});

// Form Validation (example)
const form = document.querySelector("#contactForm");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  // Implement form validation logic here
  // Example: Check if fields are not empty before submitting
  const name = document.querySelector("#name").value;
  const email = document.querySelector("#email").value;

  if (name.trim() === "" || email.trim() === "") {
    alert("Please fill in all fields.");
  } else {
    // Submit the form
    form.submit();
  }
});

// Responsive Navigation
window.addEventListener("resize", () => {
  const screenWidth = window.innerWidth;
  if (screenWidth > 768) {
    // Hide mobile navigation if screen width is larger than 768px
    mobileNav.classList.remove("open");
  }
});

//search
document.getElementById('search-bar').addEventListener('input', function () {
  const query = this.value.toLowerCase();
  const menuItems = document.querySelectorAll('.food-menu-item');

  menuItems.forEach(item => {
      const title = item.querySelector('.food-title').textContent.toLowerCase();
      if (title.includes(query)) {
          item.style.display = ''; // Show the item
      } else {
          item.style.display = 'none'; // Hide the item
      }
  });
});
