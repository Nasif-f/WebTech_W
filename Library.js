document.getElementById('library-form').addEventListener('submit', addBook);

function addBook(event) {
    event.preventDefault();

    let bookTitle = document.getElementById('book-title').value.trim();
    let publicationYear = document.getElementById('publication-year').value.trim();

   
    if (!bookTitle || !/^[A-Za-z]+$/.test(bookTitle)) {
        alert('Title must contain only alphabetic characters, no spaces, and cannot be empty.');
        return;
    }

    const currentYear = new Date().getFullYear();
    if (!/^\d{4}$/.test(publicationYear) ||
        Number(publicationYear) < 1900 ||
        Number(publicationYear) > currentYear
    ) {
        alert('Year must be a 4-digit number between 1900 and ' + currentYear + '.');
        return;
    }

    
    let row = document.createElement('tr');
    row.innerHTML = `<td>${bookTitle}</td><td>${publicationYear}</td>`;

    
    if (Number(publicationYear) < 2000) {
        row.style.backgroundColor = '#e0e0e0'; 
    } else {
        row.style.backgroundColor = '#c0ffc0'; 
    }

    document.getElementById('book-list').appendChild(row);

    document.getElementById('book-title').value = '';
    document.getElementById('publication-year').value = '';
}
