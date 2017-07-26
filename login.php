<?php /*Includes meta tags, links and page title |
        Incluye etiquetas meta, links y título de la página */
    include("partials/top_page.php"); ?>
<?php /*Includes navigation bar |
        Incluye barra de navegación*/
    include("partials/nav.php"); ?>
<section>
    <div class="container ecc">
        <div class="row border">
            <div class="col-md-7 col-sm-7 col-xs-12 border-left pd">
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

<?php /*Includes footer and javascript |
        Incluye footer y el javascript*/
    include("partials/footer.php"); ?>