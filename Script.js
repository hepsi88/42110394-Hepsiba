document.getElementById('flightForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('Flight_Insert.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById('flightForm').reset();
    })
    .catch(error => console.error('Error:', error));
});
