<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luciano Villarreal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor contenedor-header">
            <a href="/">
                <p class="nombre-pagina">Luciano Villarreal</p>
            </a>

            <div class="contenedor-nav">
                <!-- <div class="utilidades">
                    <svg id="moon" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon-stars" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e6e6e6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                        <path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                        <path d="M19 11h2m-1 -1v2" />
                    </svg>

                    <svg id="sun" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e6e6e6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="4" />
                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </div> -->

                <nav class="navegacion">
                    <a href="/">Sobre mi</a>
                    <a href="/portafolio">Portafolio</a>
                    <a href="/servicios">Servicios</a>
                    <a href="/contacto">Contacto</a>
                </nav>
            </div>
        </div>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer">
        <div class="contenedor contenedor-footer">
            <div class="redes">
                <a href="https://github.com/Luciano-17">
                    <img src="build/img/github.svg" alt="github red social">
                </a>

                <a href="https://www.facebook.com/luchoo.villarreal">
                    <img src="build/img/facebook.svg" alt="facebook red social">
                </a>

                <a href="https://www.instagram.com/_lucianovi/">
                    <img src="build/img/instagram.svg" alt="instagram red social">
                </a>

                <a href="https://www.linkedin.com/in/luciano-martin-villarreal-b69a93165/">
                    <img src="build/img/linkedin.svg" alt="linkedin red social">
                </a>

                <a href="https://api.whatsapp.com/send/?phone=3515282167&text=Hola%21+me+gustar%C3%ADa+hablar+sobre+un+proyecto+contigo.&app_absent=0">
                    <img src="build/img/whatsapp.svg" alt="whatsapp red social">
                </a>
            </div>

            <h3>Luciano Villarreal</h3>

            <div class="texto-copy">
                <p class="copyright">&copy; Todos los derechos reservado <?php echo date('Y'); ?></p>
            </div>
        </div>
    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>