document.querySelector("form").addEventListener("submit", function(event) {
    const user = document.getElementById("username").value.trim();
    const pass = document.getElementById("password").value.trim();
    const errorDiv = document.getElementById("error-message");

    if (user === "" || pass === "") {
        event.preventDefault();
        errorDiv.textContent = "Por favor complete todos los campos.";
    } else {
        errorDiv.textContent = "";
    }
});
