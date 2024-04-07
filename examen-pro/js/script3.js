
document.addEventListener('DOMContentLoaded', function() {
    // Obtiene el valor del token de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const token = urlParams.get('token');

    // Llena el campo oculto con el valor del token
    document.getElementById('token').value = token;
    // Asume que este es el formulario que envía la solicitud de cambio de contraseña
    document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita la recarga de la página
        var formData = new FormData(this);

        fetch('passwordUpdate.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Muestra un SweetAlert2 con el mensaje de respuesta
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: data.message,
                    confirmButtonText: 'Cerrar'
                });
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000); // Espera 2 segundos antes de redirigir
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message,
                    confirmButtonText: 'Cerrar'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un error al procesar tu solicitud.',
                confirmButtonText: 'Cerrar'
            });
        });
    });
    
});
