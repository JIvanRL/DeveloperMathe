document.addEventListener('DOMContentLoaded', function() {
    // Función para mostrar el modal con Bootstrap
    function showModal(message) {
        var modalMessage = document.getElementById("modalMessage");
        modalMessage.innerHTML = message;
        $('#passwordRecoveryModal').modal('show');
    }

    // Función para manejar el envío del formulario
    function handleFormSubmit(event) {
        event.preventDefault(); // Evita la recarga de la página
        var formData = new FormData(event.target);

        fetch('recover_password.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            showModal(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Asegúrate de que el formulario de recuperación de contraseña esté presente y asigna el manejador de eventos
    document.getElementById('recoverForm').addEventListener('submit', handleFormSubmit);
});