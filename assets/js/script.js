'use strict';



const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navbarToggler = document.querySelector("[data-nav-toggler]");

navbarToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function () {
    navbar.classList.remove("active");
    navbarToggler.classList.remove("active");
  });
}



/**
 * search toggle
 */

const searchTogglers = document.querySelectorAll("[data-search-toggler]");
const searchBox = document.querySelector("[data-search-box]");

for (let i = 0; i < searchTogglers.length; i++) {
  searchTogglers[i].addEventListener("click", function () {
    searchBox.classList.toggle("active");
  });
}



/**
 * header
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 200) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});
// Sample data
const data = [
  { name: "Creeper", health: 20, size: "Medium", rarity: "Common" },
  { name: "Zombie", health: 18, size: "Medium", rarity: "Common" },
  { name: "Enderman", health: 40, size: "Tall", rarity: "Rare" },
  // Add more data items as needed
];

const searchInput = document.getElementById("searchInput");
const searchButton = document.getElementById("searchButton");
const sortBy = document.getElementById("sortBy");
const resultsDiv = document.querySelector(".results");

function renderResults(items) {
  resultsDiv.innerHTML = ""; // Clear previous results
  items.forEach(item => {
      const resultItem = document.createElement("div");
      resultItem.classList.add("result-item");
      resultItem.textContent = `Name: ${item.name}, Health: ${item.health}, Size: ${item.size}, Rarity: ${item.rarity}`;
      resultsDiv.appendChild(resultItem);
  });
}

searchButton.addEventListener("click", () => {
  const searchTerm = searchInput.value.toLowerCase();
  const sortByValue = sortBy.value;

  let filteredItems = data.filter(item => item.name.toLowerCase().includes(searchTerm));

  filteredItems.sort((a, b) => {
      if (sortByValue === "name") {
          return a.name.localeCompare(b.name);
      } else {
          return a[sortByValue] - b[sortByValue];
      }
  });

  renderResults(filteredItems);
});

// Initial render on page load
renderResults(data);
