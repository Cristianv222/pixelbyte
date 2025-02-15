<?php
ob_start();
?>
    <style>
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
            /* Transición más suave para todos los cambios */
            transition: all 1.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .preloader.fade-out {
            opacity: 0;
            visibility: hidden;
            /* Efecto de desvanecimiento hacia arriba */
            transform: translateY(-20px);
        }

        .loader {
            width: 15vw;
            height: 15vw;
            position: relative;
            /* Transición suave para el loader */
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .preloader.fade-out .loader {
            transform: scale(0.95);
        }

        .logo-container {
            position: absolute;
            width: 40%;
            height: 40%;
            top: 30%;
            left: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
            transform: none;
            /* Transición suave para el logo */
            transition: opacity 0.8s ease;
        }

        .logo-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .circles-container {
            width: 100%;
            height: 100%;
            position: absolute;
            animation: rotate 2s linear infinite;
            /* Transición suave para los círculos */
            transition: opacity 0.8s ease;
        }

        .loader-circle {
            width: 100%;
            height: 100%;
            border: 10px solid transparent;
            border-top-color: rgb(2, 11, 37);
            border-radius: 50%;
            position: absolute;
            /* Transición suave para los bordes */
            transition: border-color 0.8s ease;
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
            /* Transición suave para el texto */
            transition: opacity 0.8s ease;
        }

        .main-content {
            opacity: 0;
            /* Transición más suave para el contenido principal */
            transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1);
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

        @media (max-width: 768px) {
            .loader {
                width: 20vw;
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
    <div class="preloader" id="preloader">
        <div class="loader">
            <div class="circles-container">
                <div class="loader-circle"></div>
                <div class="loader-circle"></div>
                <div class="loader-circle"></div>
            </div>
            <div class="logo-container">
                <img src="./images/logo_sin_fondo.png" alt="Logo de la empresa">
            </div>
            <div class="loader-text"></div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('load', function() {
                const preloader = document.getElementById('preloader');
                const mainContent = document.getElementById('main-content');

                // Aumentamos el tiempo de espera para una transición más suave
                setTimeout(() => {
                    preloader.classList.add('fade-out');
                    mainContent.classList.add('visible');

                    // Aumentamos el tiempo antes de ocultar completamente
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 1200); // Ajustado para coincidir con la duración de la transición
                }, 1000);
            });
        });
    </script>
</body>
</html>
<?php
ob_end_flush();
?>