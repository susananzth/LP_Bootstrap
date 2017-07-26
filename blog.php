<?php /*Includes meta tags, links and page title |
        Incluye etiquetas meta, links y título de la página */
include("partials/top_page.php"); ?>
<?php /*Includes navigation bar |
        Incluye barra de navegación*/
include("partials/nav.php"); ?>

    <section>
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-md-8 col-sm-8 col-xs-9 post">
                    <h1 class="page-header">Mi blog</h1>
                    <div class="entry">
                        <a href="#" class="blog-title">Blog 01</a>
                        <p>
                            by <a href="#">Tu madre</a>
                            <span class="glyphicon glyphicon-time"></span>
                            Publicado el 28 de julio de 2017 a las 06:00 PM
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="img-responsive" src="img/03.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore,
                                    veritatis, tempora, necessitatibus inventore nisi quam quia
                                    repellat ut tempore laborum possimus eum dicta id animi corrupti
                                    debitis ipsum officiis rerum.</p>
                                <a class="btn btn-default" href="#">Seguir leyendo
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="entry">
                        <a href="#" class="blog-title">Blog 02</a>
                        <p>
                            by <a href="#">Tu madre</a>
                            <span class="glyphicon glyphicon-time"></span>
                            Publicado el 26 de julio de 2017 a las 09:00 PM
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="img-responsive" src="img/05.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore,
                                    veritatis, tempora, necessitatibus inventore nisi quam quia
                                    repellat ut tempore laborum possimus eum dicta id animi corrupti
                                    debitis ipsum officiis rerum.</p>
                                <a class="btn btn-default" href="#">Seguir leyendo
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="entry">
                        <a href="#" class="blog-title">Blog 03</a>
                        <p>
                            by <a href="#">Tu madre</a>
                            <span class="glyphicon glyphicon-time"></span>
                            Publicado el 22 de julio de 2017 a las 10:00 AM
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="img-responsive" src="img/06.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore,
                                    veritatis, tempora, necessitatibus inventore nisi quam quia
                                    repellat ut tempore laborum possimus eum dicta id animi corrupti
                                    debitis ipsum officiis rerum.</p>
                                <a class="btn btn-default" href="#">Seguir leyendo
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination | Paginadores -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4 col-sm-4 col-xs-3">
                    <!-- Blog Search | Buscador de blogs -->
                    <div class="widget">
                        <h4>Buscador de blogs</h4>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!-- Blog Categories | Categorías -->
                    <div class="widget">
                        <h4>Categorías del blog</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a></li>
                            <li><a href="#">Category Name</a></li>
                            <li><a href="#">Category Name</a></li>
                            <li><a href="#">Category Name</a></li>
                        </ul>
                    </div>
                    <!-- Side Widget Well -->
                    <div class="widget">
                        <h4>Side Widget Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Inventore, perspiciatis adipisci accusamus laudantium odit
                            aliquam repellat tempore quos aspernatur vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php /*Includes footer and javascript |
        Incluye footer y el javascript*/
include("partials/footer.php"); ?>