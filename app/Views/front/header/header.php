<header id="mainHeader" class="modern-header">
    <div class="head-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Columna izquierda: Información de contacto -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 contact-info-col d-flex align-items-center justify-content-xl-start justify-content-center mb-2 mb-xl-0">

                </div>
                <!-- Columna central: Logo -->

                <!-- Columna derecha: Teléfono y botón -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 contact-info-col d-flex align-items-center justify-content-xl-end justify-content-center">

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
                    <ul class="navbar-nav mr-auto modern-nav">
                        <li class="nav-item modern-nav-item">
                            <a class="nav-link" href="<?= base_url() ?>#slider">Home</a>
                        </li>

                        <li class="nav-item modern-nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item modern-nav-item">
                            <a class="nav-link" href="<?= base_url('team') ?>">Team</a>
                        </li>


                        <li class="nav-item modern-nav-item">
                            <a class="nav-link" href="#yoga">Insights</a>
                        </li>
                        <li class="nav-item modern-nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="navbar-nav ml-auto">
                        <li class="nav-item nav-book-now">
                            <a target="_blank" href="https://calendly.com/latinoknow" class="nav-link book-appointment modern-book-btn">
                                <span>Book Now</span>
                            </a>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<style>
    .modern-header {
        background-color: rgb(225 225 225 / 30%) !important;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
    }

    .head-top {
        padding: 0.3rem 0 0.1rem 0;
        /* reducido el padding superior e inferior */
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .contact-link {
        display: flex;
        align-items: center;
        color: #333;
        font-size: 1rem;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
        gap: 0.5rem;
    }

    .contact-link:hover {
        color: #5ab337;
    }

    .icon {
        width: 22px;
        height: 22px;
        margin-right: 0.2rem;
        filter: drop-shadow(0 1px 2px rgba(90, 179, 55, 0.10));
    }

    .logo-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .logo-img {
        max-width: 90px;
        height: auto;
        margin-bottom: 0.2rem;
    }

    .brand-name {
        font-weight: 700;
        font-size: 1.25rem;
        color: #5ab337;
        letter-spacing: 1px;
    }

    .book-now-btn {
        background-color: #5ab337 !important;
        color: white !important;
        padding: 0.65rem 1.3rem !important;
        border-radius: 25px !important;
        font-weight: 600 !important;
        text-decoration: none !important;
        transition: all 0.3s ease !important;
        border: none !important;
        margin-left: 0.5rem;
        margin-top: 0.3rem;
        display: inline-block;
    }

    .book-now-btn:hover {
        background-color: #4a9929 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(90, 179, 55, 0.3);
    }

    .bg {
        background-color: rgb(225 225 225 / 30%) !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    .modern-nav {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .modern-nav-item {
        margin: 0;
    }

    .modern-nav-item .nav-link {
        color: #333 !important;
        font-weight: 500;
        font-size: 1rem;
        padding: 0.5rem 0;
        text-decoration: none;
        transition: color 0.3s ease;
        border-bottom: 2px solid transparent;
    }

    .modern-nav-item .nav-link:hover {
        color: #5ab337 !important;
        border-bottom-color: #5ab337;
    }

    .modern-book-btn {
        background-color: #5ab337 !important;
        color: white !important;
        padding: 0.75rem 1.5rem !important;
        border-radius: 25px !important;
        font-weight: 600 !important;
        text-decoration: none !important;
        transition: all 0.3s ease !important;
        border: none !important;
    }

    .modern-book-btn:hover {
        background-color: #4a9929 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(90, 179, 55, 0.3);
    }

    .modern-book-btn span {
        font-size: 0.95rem;
    }

    @media (max-width: 991px) {
        .modern-nav {
            flex-direction: column;
            gap: 1rem;
        }

        .navbar-nav.ml-auto {
            margin-top: 1rem;
        }

        .head-top .row {
            flex-direction: column;
            gap: 1rem;
        }

        .contact-info-col,
        .logo-col {
            justify-content: center !important;
            align-items: center !important;
            text-align: center;
        }

        .contact-info {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.7rem;
        }
    }
</style>

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

    let isNavFixed = false;
    const nav = document.querySelector('.bg');
    const headTop = document.querySelector('.head-top');

    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        const headTopHeight = headTop.offsetHeight;
        if (scrollY > headTopHeight && !isNavFixed) {
            // Fijar el nav
            isNavFixed = true;
            nav.style.transition = 'all 0.3s ease-in-out';
            nav.style.position = 'fixed';
            nav.style.top = '0';
            nav.style.left = '0';
            nav.style.right = '0';
            nav.style.width = '100%';
            nav.style.zIndex = '1000';
            nav.style.backgroundColor = 'rgb(225 225 225 / 30%)';
            nav.style.boxShadow = '0px 4px 6px rgba(0, 0, 0, 0.1)';

            // Añadir padding-top al body para compensar el espacio
            document.body.style.paddingTop = nav.offsetHeight + 'px';

        } else if (scrollY <= headTopHeight && isNavFixed) {
            // Restaurar el nav
            isNavFixed = false;
            nav.style.transition = 'all 0.3s ease-in-out';
            nav.style.position = 'relative';
            nav.style.top = 'auto';
            nav.style.left = 'auto';
            nav.style.right = 'auto';
            nav.style.backgroundColor = 'rgb(225 225 225 / 30%)';
            nav.style.boxShadow = 'none';

            // Remover el padding-top del body
            document.body.style.paddingTop = '0';
        }
    });
</script>