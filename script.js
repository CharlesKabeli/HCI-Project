  function toggleReadMore(){
    const moreContent=document.getElementById('more-content');
    moreContent.classList.toggle('show-content');
}
 // Sample book data
const books = [
    { title: 'Book 1', author: 'Author 1' },
    { title: 'Book 2', author: 'Author 2' },
      // Add more books as needed
];

function searchBooks() {
    const searchQuery = document.getElementById('searchInput').value;
    const searchResults = books.filter(book =>
    book.title.toLowerCase().includes(searchQuery) || book.author.toLowerCase().includes(searchQuery)
    );

    displaySearchResults(searchResults);
    }

function displaySearchResults(results) {
    const searchResultsContainer = document.getElementById('searchResults');
    searchResultsContainer.innerHTML = '';

    if (results.length === 0) {
      searchResultsContainer.innerHTML = '<p>No results found.</p>';
    } 
    else {
        results.forEach(book => {
          const resultItem = document.createElement('div');
          resultItem.innerHTML = `<p><strong>Title:</strong> ${book.title}, <strong>Author:</strong> ${book.author}</p>`;
          searchResultsContainer.appendChild(resultItem);
        });
      }
    }
  
function toggleMenu() {
        var literatureSubMenu = document.getElementById("literatureSubMenu");
        literatureSubMenu.style.display = (literatureSubMenu.style.display === "block") ? "none" : "block";
    }