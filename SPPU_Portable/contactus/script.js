document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page reload

    let formData = new FormData(this);

    fetch("process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("statusMessage").innerText = data.message;
        document.getElementById("statusMessage").style.color = data.success ? "green" : "red";
        if (data.success) {
            document.getElementById("contactForm").reset();
        }
    })
    .catch(error => console.error("Error:", error));
});