document.addEventListener("DOMContentLoaded", function () {
    const nombre = document.getElementById("nombre");
    nombre.addEventListener("blur", () => {
        if (nombre.value.length < 3) {
            alert("El nombre debe tener al menos 3 caracteres.");
        }
    });
});
