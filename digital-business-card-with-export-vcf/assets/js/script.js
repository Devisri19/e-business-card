// In assets/js/scripts.js
fetch('fetch_users.php')
    .then(response => response.json())
    .then(data => {
        console.log(data); // Display data dynamically
    });
