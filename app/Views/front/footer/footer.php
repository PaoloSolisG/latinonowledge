<!-- Modern Footer Latino Knowledge -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    html,
    body {
        max-width: 100vw;
        overflow-x: hidden;
    }

    .footer-latino {
        background: linear-gradient(135deg, #e6d8a3, #cbb26b, #a68d43);
        padding: 60px 0 30px 0;
        font-family: 'Poppins', sans-serif;
        color: #f3f3f3;
        box-sizing: border-box;
    }

    .footer-latino .container {
        max-width: 1170px;
        margin: auto;
        width: 100%;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .footer-latino .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
        min-width: 220px;
        margin-bottom: 30px;
        min-width: 0;
        box-sizing: border-box;
        word-break: break-word;
    }

    .footer-col h4 {
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
        margin-bottom: 28px;
        font-weight: 600;
        position: relative;
        letter-spacing: 1px;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background: linear-gradient(90deg, #ffb347 0%, #ff5e62 100%);
        height: 3px;
        width: 50px;
        border-radius: 2px;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 12px;
    }

    .footer-col ul li,
    .footer-col address {
        color: black;
        font-size: 1.01rem;
        font-weight: 400;
        letter-spacing: 0.01em;
    }

    .footer-col ul li a {
        color: black;
        text-decoration: none;
        font-size: 1.01rem;
        transition: color 0.3s, padding-left 0.3s;
        display: block;
    }

    .footer-col ul li a:hover {
        color: #fff;
        padding-left: 8px;
    }

    .footer-col .social-links {
        margin-top: 10px;
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 44px;
        width: 44px;
        background: linear-gradient(135deg, #232a34 0%, #3a1c71 100%);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 44px;
        border-radius: 50%;
        color: #e0c3fc;
        font-size: 22px;
        box-shadow: 0 2px 12px #3a1c7133;
        transition: transform 0.18s, box-shadow 0.18s, filter 0.18s, background 0.18s, color 0.18s;
        outline: none;
    }

    .footer-col .social-links a:hover,
    .footer-col .social-links a:focus {
        color: #fff;
        background: linear-gradient(135deg, #b2b6ff 0%, #e0c3fc 100%);
        transform: scale(1.08) rotate(-2deg);
        box-shadow: 0 4px 24px #b2b6ff55;
        filter: brightness(1.05);
    }

    .footer-col .social-links a:active {
        filter: brightness(0.85) saturate(0.85);
        transform: scale(0.96);
        box-shadow: 0 2px 8px #3a1c7133;
    }

    .footer-col .social-links a.instagram:active {
        background: linear-gradient(135deg, #fcb045 0%, #fd5d47 80%);
        filter: brightness(0.85) saturate(0.85);
    }

    .footer-col .social-links a.linkedin:active {
        background: linear-gradient(135deg, #00c6fb 0%, #0077b5 80%);
        filter: brightness(0.85) saturate(0.85);
    }

    .footer-col .social-links a.facebook:active {
        background: linear-gradient(135deg, #00c6fb 0%, #1877f2 80%);
        filter: brightness(0.85) saturate(0.85);
    }

    .footer-bottom {
        text-align: center;
        color: black;
        margin-top: 20px;
        font-size: 15px;
    }

    /* Scrollbar vertical color plomo (gris oscuro) */
    ::-webkit-scrollbar {
        width: 10px;
        background: #e0e0e0;
    }

    ::-webkit-scrollbar-thumb {
        background: #888888;
        border-radius: 8px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #6e6e6e;
    }

    /* Firefox */
    html {
        scrollbar-color: #888888 #e0e0e0;
        scrollbar-width: thin;
    }

    .footer-col ul li.contact-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        line-height: 1.6;
        word-break: break-word;
    }

    .footer-col ul li.contact-item i {
        min-width: 22px;
        text-align: center;
        margin-top: 2px;
    }

    @media (max-width: 991px) {
        .footer-latino .row {
            flex-direction: column;
            align-items: center;
        }

        .footer-col {
            width: 80%;
            min-width: unset;
        }
    }

    @media (max-width: 767px) {
        .footer-col {
            width: 100%;
        }
    }
</style>
<footer class="footer-latino">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Latino Knowledge</h4>
                <ul>
                    <li>Financial solutions for your growth.</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/servicios">Services</a></li>
                    <li><a href="/contacto">Contact</a></li>
                    <li><a href="https://latino-knowledge.ueniweb.com/merchant-policies" target="_blank" rel="noopener">Privacy Policy</a></li>
                    <li><a href="https://latino-knowledge.ueniweb.com/legal-notice" target="_blank" rel="noopener">Terms</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li class="contact-item"><i class="fas fa-map-marker-alt"></i> 350 5th Ave, New York, NY 10118</li>
                    <li class="contact-item"><i class="fas fa-phone"></i> <a href="tel:+17576033631">(757) 603-3631</a></li>
                    <li class="contact-item"><i class="fas fa-envelope"></i> <a href="mailto:latinoknowledge@gmail.com">latinoknowledge@gmail.com</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/LatinoKnow" target="_blank" rel="noopener" class="facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/latinoknow" target="_blank" rel="noopener" class="instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/latino-knowledge" target="_blank" rel="noopener" class="linkedin" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?php echo date('Y'); ?> Latino Knowledge. All rights reserved.
        </div>
    </div>
</footer>