<!DOCTYPE html>
<html>
<head>
<style>
.footer {
    background: linear-gradient(45deg, #0a0a2e 0%, #1a0505 100%);
    color: white;
    padding: 40px 0;
    border-radius: 50px 50px 0 0;
    margin-top: 50px;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    padding: 0 20px;
}

.footer-section {
    padding: 20px;
}

.footer-section h3 {
    color: white;
    margin-bottom: 20px;
    font-size: 18px;
}

.footer-section p {
    color: #cccccc;
    line-height: 1.6;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: white;
}

.newsletter-form {
    display: flex;
    gap: 10px;
}

.newsletter-form input {
    padding: 10px;
    border-radius: 5px;
    border: none;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    flex-grow: 1;
}

.newsletter-form button {
    padding: 10px 15px;
    border-radius: 5px;
    border: none;
    background: white;
    color: #0a0a2e;
    cursor: pointer;
    transition: background 0.3s ease;
}

.social-icons {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.social-icons a {
    color: white;
    text-decoration: none;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s ease;
}

.social-icons a:hover {
    background: rgba(255, 255, 255, 0.2);
}

.footer-bottom {
    text-align: center;
    padding-top: 40px;
    color: #cccccc;
    font-size: 14px;
}

@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>

<footer class="footer">
    <div class="footer-content">
        <!-- Logo and About Section -->
        <div class="footer-section">
            <h3>PixelByte</h3>
            <p>Una empresa dedicada al desarrollo web, desarrollo de aplicaciones web y móviles, diseño de interfaces y experiencia de usuario.</p>
        </div>

        <!-- Office Section -->
        <div class="footer-section">
            <h3>Oficina</h3>
            <p>Pichincha-Cayambe<br>
            La "Y" de Cusubamba<br>
            Ecuador</p>
            <p><a href="mailto:avinashdm@outlook.com">1029cristianvasquez@gmail.com</a></p>
            <p>+593 0961278095</p>
        </div>

        <!-- Links Section -->
        <div class="footer-section">
            <h3>Links</h3>
            <ul class="footer-links">
                <li><a href="#">Hogar</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Experiencia</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
        </div>

        <!-- Newsletter Section -->
        <div class="footer-section">
            <h3>Newsletter</h3>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email id">
                <button type="submit">→</button>
            </form>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>PixelByte © 2025 - All Rights Reserved</p>
    </div>
</footer>

<!-- Font Awesome for social icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>