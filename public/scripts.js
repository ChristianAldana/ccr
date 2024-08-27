

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('data-target');
        document.querySelectorAll('.card-container').forEach(container => {
            container.classList.remove('active'); // Oculta todas las tarjetas
        });
        document.getElementById(targetId).classList.add('active'); // Muestra la tarjeta seleccionada
    });
});

// Mostrar todas las tarjetas
document.getElementById('showAll').addEventListener('click', function() {
    document.querySelectorAll('.card-container').forEach(container => {
        container.classList.add('active'); // Muestra todas las tarjetas
    });
});

// Muestra la primera tarjeta por defecto
document.querySelector('.menu-item').click();


// Muestra en grande las imagenes 
document.querySelectorAll('.gallery-img').forEach(img => {
    img.addEventListener('click', function() {
        const src = this.src;
        document.getElementById('modalImage').src = src;
        const myModal = new bootstrap.Modal(document.getElementById('imageModal'));
        myModal.show();
    });
});






// Mostrar el botón cuando el usuario hace scroll hacia abajo
window.onscroll = function() {
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block"; // Muestra el botón
    } else {
        scrollTopBtn.style.display = "none"; // Oculta el botón
    }
};

// Mostrar u ocultar el botón según la posición del scroll
window.addEventListener('scroll', function() {
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    if (window.pageYOffset > 200) { // Muestra el botón si el scroll es mayor a 200px
        scrollTopBtn.style.display = 'block';
    } else {
        scrollTopBtn.style.display = 'none';
    }
});

// Cuando el usuario hace clic en el botón, vuelve al principio de la página
document.getElementById("scrollTopBtn").addEventListener("click", function() {
    const scrollDuration = 1000; // Duración en milisegundos
    const scrollStep = -window.scrollY / (scrollDuration / 15); // Ajuste de la velocidad del desplazamiento
    const scrollInterval = setInterval(function() {
        if (window.scrollY <= 0) {
            clearInterval(scrollInterval);
        }
        window.scrollBy(0, scrollStep);
    }, 15);
});








//Boton de inicio me lleve al contenido de toda la informacion.
document.querySelector('#scroll-btn').addEventListener('click', function(event) {
    event.preventDefault();

    const target = document.querySelector('#mission-vision');
    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 1000; // Duración en milisegundos
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = Math.min(timeElapsed / duration, 1);
        window.scrollTo(0, startPosition + distance * progress);

        if (timeElapsed < duration) {
            requestAnimationFrame(animation);
        }
    }

    requestAnimationFrame(animation);
});






//AQUI COMIENZA LAS SPA 
// Seleccionar todos los botones que tienen el atributo data-target
document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function() {
        // Mostrar solo la tarjeta correspondiente
        const targetId = this.getAttribute('data-target');
        document.querySelectorAll('.card-container').forEach(card => {
            if (card.id === targetId) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        // Limpiar el contenido dinámico
        document.querySelector('#dynamicContent').innerHTML = '';
    });
});

document.querySelectorAll('.btn-secondary').forEach(button => {
    button.addEventListener('click', () => {
        // Obtener el atributo data-target y separar las URLs
        const targetUrls = button.getAttribute('data-target').split(',');

        // Limpiar el contenido dinámico antes de cargar nuevo contenido
        const dynamicContent = document.querySelector('#dynamicContent');
        dynamicContent.innerHTML = '';

        // Crear promesas para las solicitudes fetch
        const fetchPromises = targetUrls.map(targetUrl =>
            fetch(targetUrl.trim()) // trim() para eliminar posibles espacios en blanco
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok: ' + response.statusText);
                    }
                    return response.text();
                })
                .catch(error => {
                    console.error('Error al cargar el contenido:', error);
                    return ''; // Devolver una cadena vacía en caso de error
                })
        );

        // Esperar a que todas las solicitudes fetch se completen
        Promise.all(fetchPromises)
            .then(dataArray => {
                // Combinar el contenido de todas las respuestas
                const combinedContent = dataArray.join('<hr>'); // Usa <hr> o cualquier separador que prefieras
                dynamicContent.innerHTML = combinedContent;
            })
            .catch(error => {
                console.error('Error al combinar el contenido:', error);
            });
    });

// Función para manejar el botón "Ocultar Pensum"
document.querySelectorAll('.hide-pensum').forEach(button => {
    button.addEventListener('click', () => {
        // Limpiar el contenido dinámico al hacer clic en "Ocultar Pensum"
        document.querySelector('#dynamicContent').innerHTML = '';
    });
});


    









// Manejo del clic en los elementos del menú para mostrar una tarjeta específica o mostrar todas las cards disponibles. 
document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('data-target');
        document.querySelectorAll('.card-container').forEach(container => {
            container.classList.remove('active'); // Oculta todas las tarjetas
        });
        document.getElementById(targetId).classList.add('active'); // Muestra la tarjeta seleccionada

        // Ocultar el contenido dinámico cuando se cambia de tarjeta
        document.querySelector('#dynamic-content').style.display = 'none';
    });
});

// Mostrar todas las tarjetas cuando se hace clic en el botón "Mostrar Todas"
document.getElementById('showAll').addEventListener('click', function() {
    document.querySelectorAll('.card-container').forEach(container => {
        container.classList.add('active'); // Muestra todas las tarjetas
        container.style.display = 'block'; // Asegúrate de que estén visibles
    });
});

// Muestra la primera tarjeta por defecto
document.querySelector('.menu-item').click();
















    

    // Manejo del clic en los elementos del menú para mostrar tarjetas
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');
            document.querySelectorAll('.card-container').forEach(container => {
                container.classList.remove('active'); // Oculta todas las tarjetas
            });
            document.getElementById(targetId).classList.add('active'); // Muestra la tarjeta seleccionada

            // Ocultar el contenido dinámico cuando se cambia de tarjeta
            document.querySelector('#dynamic-content').style.display = 'none';
        });
    });

    // Mostrar todas las tarjetas
    document.getElementById('showAll').addEventListener('click', function() {
        document.querySelectorAll('.card-container').forEach(container => {
            container.classList.add('active'); // Muestra todas las tarjetas
        });
    });

    // Muestra la primera tarjeta por defecto
    document.querySelector('.menu-item').click();
});








//CRUD
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            fetch(`/cursos/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.querySelector('#nombre').value = data.nombre;
                    document.querySelector('#descripcion').value = data.descripcion;
                    document.querySelector('#nivel').value = data.nivel;
                    document.querySelector('#cupo_maximo').value = data.cupo_maximo;
                    document.querySelector('#cursoForm').action = `/cursos/${id}`;
                });
        });
    });
});
