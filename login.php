<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='language' content='ES'>
    <meta name='keywords' lang="ES" content='bootstrap, plantilla, diseño web, diseño, html, css,
                                             Susana Piñero, susananzth'>
    <meta name='keywords' lang="EN" content='bootstrap, template, web desing, desing, html, css,
                                             Susana Piñero, susananzth'>
    <meta name='description' lang="ES" content='Una Página web usando bootstrap, con landing page,
                                                sección de artículos, galería de imágenes y vídeo,
                                                contacto por Susana Piñero.'>
    <meta name='description' lang="EN" content='Website using bootstrap, with landing page,
                                                section of articles, gallery of images and video,
                                                contact by Susana Piñero.'>
    <meta name='author' content='Susana Piñero, susananzth@gmail.com'>
    <meta name='target' content='all'>
    <meta name='HandheldFriendly' content='True'>
    <meta name='robots' content='noarchive'>
    <meta http-equiv="title" lang="ES" content="Plantilla usando Bootstrap - por Susana Piñero"/>
    <meta http-equiv="title" lang="EN" content="Template using Bootstrap - by Susana Piñero"/>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Set-Cookie" content="name=data; path=path; expires=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <title>Template with Bootstrap</title>
</head>
<body>

<nav id="navbar" class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <!--Mobile menu button | Botón de menú móvil-->
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#nav">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <!--Logo-->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    Susana Piñero <small> SusanaNzth</small>
                </a>
            </div>
        </div>
        <!--Drop-down navigation bar | Barra de navegación desplegable-->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav navbar-right text-right">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="article.html">Artículos</a></li>
                <li><a href="galery.html">Galería</a></li>
                <li><a href="login.php">Regístrate</a></li>
                <li><a href="contact.html">Contáctame</a></li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="container ecc">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 border pd">
                <h3>Registro</h3>
                <form role="form" id="signin">
                    <div class="form-group">
                        <label for="email_r">Email:</label>
                        <input type="email" class="form-control" id="email_r"
                               placeholder="Ingresa tu email" title="Ingresa tu email">
                        <span class="help-block">Por ejemplo: nombre@ejemplo.com</span>
                    </div>
                    <div class="form-group">
                        <label for="password_r">Contraseña:</label>
                        <input type="password" class="form-control" id="password_r"
                               placeholder="Ingresa una contraseña" title="Ingresa una contraseña">
                        <span class="help-block">La contraseña debe tener mínimo 6 y máximo 15
                                                 caracteres. Te recomiendo que combines tu
                                                 contraseña con letras, números y caracteres especiales.</span>
                    </div>
                    <div class="form-group">
                        <label for="archivo">Selecciona una imágen para tu avatar</label>
                        <input type="file" id="archivo" accept="img/jpeg, jpg, png, gif"
                               title="Selecciona una imágen para tu avatar">
                        <span class="help-block">Sólo pueden ser imágenes de:
                            <br>Tipo: .jpg .png y .gif.
                            <br>Tamaño: mínimo 50x50 pixeles y máximo 350x350 píxeles.
                            <br>Volumen: máximo 2Mb.</span>
                    </div>
                    <button type="submit" class="btn btn-default"
                            title="Enviar datos y registrarse">Registrarse
                    </button>
                </form>
                <br>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 pd">
                <h3>Iniciar sesión</h3>
                <form role="form" id="login">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email"
                               placeholder="Ingresa tu email" title="Ingresa tu email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password"
                               placeholder="Ingresa una contraseña" title="Ingresa una contraseña">
                    </div>
                    <div class="checkbox" id="connected">
                        <label title="Mantenerse conectado">
                            <input type="checkbox"> No cerrar sesión
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default"
                            title="Iniciar sesión">Iniciar sesión
                    </button>
                </form>
                <br>
            </div>
        </div>

    </div>

</section>
<footer class="footer">
    <div class="container">
        <p class="text-muted">2017 Susana Piñero. Todos los derechos reservados.</p>
    </div>
</footer>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>