document.addEventListener('DOMContentLoaded', function() {
    // Aseguramos que todos los recursos se carguen
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