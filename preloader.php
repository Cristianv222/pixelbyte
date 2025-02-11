<?php
// preloader.php

// Inicia el almacenamiento en búfer de salida
ob_start();
?>
    <style>
        /* Estilos del Preloader */
        .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(32, 32, 32);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
}

.preloader.fade-out {
    opacity: 0;
    visibility: hidden;
}

.loader {
    width: 15vw; /* Usamos un valor relativo a la anchura de la ventana */
    height: 15vw;
    position: relative;
    animation: rotate 2s linear infinite;
}

.loader-circle {
    width: 100%;
    height: 100%;
    border: 10px solid transparent;
    border-top-color: rgb(2, 11, 37);
    border-radius: 50%;
    position: absolute;
}

.loader-circle:nth-child(1) {
    animation: rotate 2s linear infinite;
}

.loader-circle:nth-child(2) {
    width: 80%;
    height: 80%;
    top: 10%;
    left: 10%;
    border-top-color: #ffffff;
    animation: rotate 1.5s linear infinite reverse;
}

.loader-circle:nth-child(3) {
    width: 60%;
    height: 60%;
    top: 20%;
    left: 20%;
    border-top-color: rgb(21, 168, 226);
    animation: rotate 1s linear infinite;
}

.loader-text {
    position: absolute;
    bottom: -40px;
    color: white;
    font-size: 1.2rem;
    font-family: Arial, sans-serif;
    animation: pulse 1.5s ease-in-out infinite;
}

/* Estilos del Contenido Principal */
.main-content {
    opacity: 0;
    transition: opacity 1s ease-in;
}

.main-content.visible {
    opacity: 1;
}

@keyframes rotate {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

/* Media queries para adaptar el preloader a diferentes tamaños de pantalla */
@media (max-width: 768px) {
    .loader {
        width: 20vw; /* En pantallas pequeñas, lo ajustamos más */
        height: 20vw;
    }
    .loader-text {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .loader {
        width: 25vw;
        height: 25vw;
    }
    .loader-text {
        font-size: 0.9rem;
    }
}

    </style>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <div class="loader-circle"></div>
            <div class="loader-circle"></div>
            <div class="loader-circle"></div>
            <div class="loader-text"></div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Aseguramos que todos los recursos se hayan cargado
            window.addEventListener('load', function() {
                const preloader = document.getElementById('preloader');
                const mainContent = document.getElementById('main-content');

                // Simulamos un tiempo mínimo de carga de 1 segundo
                setTimeout(() => {
                    preloader.classList.add('fade-out');
                    mainContent.classList.add('visible');

                    // Removemos el preloader del DOM después de la animación
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 500);
                }, 1000);
            });
        });
    </script>
</body>
</html>
<?php
// Finaliza el almacenamiento en búfer de salida y envía el contenido al navegador
ob_end_flush();
?>
