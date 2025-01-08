// Open Modal
function openModal() {
    document.getElementById('modal').style.display = 'block';
}

// Close Modal
function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

// Close Modal if clicked outside the modal content
window.onclick = function(event) {
    if (event.target == document.getElementById('modal')) {
        closeModal();
    }
}
