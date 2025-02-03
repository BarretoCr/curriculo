document.getElementById("contactForm").addEventListener("submit", function(event) {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    if (name === "" || email === "" || message === "") {
        event.preventDefault();
        alert("Todos los campos son obligatorios.");
    }
});
