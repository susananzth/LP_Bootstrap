<?php /*Includes meta tags, links and page title |
        Incluye etiquetas meta, links y título de la página */
include("../partials/top_page.php"); ?>
<?php /*Includes navigation bar |
        Incluye barra de navegación*/
include("../partials/nav.php"); ?>

<section>
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 ">

                <!-- Title -->
                <h1>Blog 01</h1>
                <!-- Author -->
                <p>
                    by <a href="#">Tu madre</a>
                    <span class="glyphicon glyphicon-time"></span>
                    Publicado el 28 de julio de 2017 a las 06:00 PM
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="../img/03.jpg" alt="">

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe
                    quibusdam sit excepturi nam quia corporis eligendi eos magni
                    recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut,
                    tenetur natus doloremque laborum quos iste ipsum rerum obcaecati
                    impedit odit illo dolorum ab tempora nihil dicta earum fugiat.
                    Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                    doloribus, dolorem iusto blanditiis unde eius illum consequuntur
                    neque dicta incidunt ullam ea hic porro optio ratione repellat
                    perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error,
                    nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi
                    nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum,
                    dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore
                    quidem voluptates cupiditate voluptas illo saepe quaerat numquam
                    recusandae? Qui, necessitatibus, est!</p>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Escribe un comentario:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Posted Comments -->
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
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
        <!-- /.row -->

</section>

<?php /*Includes footer and javascript |
        Incluye footer y el javascript*/
include("../partials/footer.php"); ?>