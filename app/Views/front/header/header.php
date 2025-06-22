<header id="mainHeader">
    <!-- header inner -->
    <div class="head-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="email">
                        <a href="#"><img src="images/mail_icon.png" /> Email : demo@gmail.com</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" /></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="contact_nu">
                        <a href="#"> <img src="images/phone_icon.png" /> Contact : +71 71234567</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <nav class="navigation navbar-expand-md navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#slider">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yoga">Yoga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#online">Yoga Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(event) {
            const targetId = this.getAttribute('href').substring(1); // Obtiene el ID de la sección
            const targetElement = document.getElementById(targetId); // Busca el elemento por ID
            if (targetElement) {
                event.preventDefault(); // Previene el comportamiento por defecto
                const headerHeight = document.getElementById('mainHeader').offsetHeight; // Altura del encabezado
                const offset = 5; // Ajusta el margen adicional para la posición exacta
                const elementPosition = targetElement.offsetTop; // Posición de la sección
                window.scrollTo({
                    top: elementPosition - headerHeight - offset, // Calcula la posición exacta
                    behavior: 'smooth' // Desplazamiento suave
                });
            }
        });
    });

    window.addEventListener('scroll', function() {
        const header = document.getElementById('mainHeader');
        if (window.scrollY > 50) {
            header.style.transition = 'background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out';
            header.style.position = 'fixed';
            header.style.top = '0';
            header.style.width = '100%';
            header.style.zIndex = '1000';
            header.style.backgroundColor = '#fff';
            header.style.boxShadow = '0px 4px 6px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.transition = 'background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out';
            header.style.position = 'fixed';
            header.style.top = '0';
            header.style.width = '100%';
            header.style.backgroundColor = 'transparent';
            header.style.boxShadow = 'none';
        }
    });
</script>
