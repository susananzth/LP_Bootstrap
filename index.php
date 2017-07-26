<?php /*Includes meta tags, links and page title |
        Incluye etiquetas meta, links y título de la página */
include("partials/top_page.php"); ?>

<div class="bg-cover">
    <nav id="navb" class="nv navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!--Mobile menu button | Botón de menú móvil-->
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#nav">
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>
                <!--Logo-->
                <div class="navbar-header">
                    <a class="navbar-brand link" href="index.php">SusanaNzth</a>
                </div>
            </div>
            <!--Drop-down navigation bar | Barra de navegación desplegable-->
            <div class="collapse navbar-collapse" id="nav">
                <ul class="nav navbar-nav navbar-right text-right">
                    <li><a class="link" href="index.php">Inicio</a></li>
                    <li><a class="link" href="portfolio.php">Portafolio</a></li>
                    <li><a class="link" href="article.php">Artículos</a></li>
                    <li><a class="link" href="galery.php">Galería</a></li>
                    <li><a class="link" href="login.php">Regístrate</a></li>
                    <li><a class="link" href="contact.php">Contáctame</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container sec">
            <h1>Susana Piñero</h1>
            <p>Una Página web usando bootstrap, con landing page,
                sección de artículos, galería de imágenes y vídeo,
                contacto</p>
        </div>

    </section>

    <footer class="ft">
        <div class="container">
            <p>2017 Susana Piñero. Todos los derechos reservados.</p>
        </div>
    </footer>
</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>