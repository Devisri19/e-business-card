// Fetch data dynamically
document.addEventListener('DOMContentLoaded', function () {
    fetch('/api/getData')
        .then(response => response.json())
        .then(data => {
            // Update the UI
            document.getElementById('userCount').innerText = data.users;
            document.getElementById('postCount').innerText = data.posts;
        })
        .catch(err => console.error('Error fetching data:', err));
});
