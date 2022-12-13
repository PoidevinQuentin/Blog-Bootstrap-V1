<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('includes/head.php'); ?>
</head>

<body>

    <header>
        <?php include('includes/navbar.php'); ?>
    </header>


    <!-- partie principale -->
    <div class="container container1">
        <div class="row">

            <!-- Card d'article sur page accueil -->
            <div class="col-md-8">

                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2016/05/01/21/20/earth-1365995_1280.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <button class="btn btn-success">Accéder</button>
                    </div>
                </div>

            </div>
            <!-- fin de CARD d'article sur page accueil - -->

            <!-- petite CARD sur le coté droit de l'écran -->
            <div class="col-12 col-md-4">
                <!-- CARD a propos -->
                <div class="card">
                    <div class="card-body">
                        <h5>A propos des auteurs</h5>
                        <hr>
                        <p>2 passionnées autodidactes qui expose leurs passions et savoir pour but de les partager.
                        </p>
                    </div>
                </div>
                <!-- fin de CARD a propos -->
                <br>
                <!-- CARD avec bouton cliquable -->
                <div class="card">
                    <div class="card-body">
                        <h5>Formation</h5>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        </p>
                        <hr>
                        <button type="button" class="btn btn-light">Payantes</button>
                        <button type="button" class="btn btn-dark">Gratuites</button>
                    </div>
                </div>
                <!-- fin de CARD avec boutton cliquable -->
                <br>
                <!-- CARD avec vidéo youtube -->
                <div class="card">
                    <div class="card-body">
                        <h5>A propos de l'auteur</h5>
                        <hr>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- fin de CARD avec vidéo youtube --> -->
            </div>
            <!-- fin de toutes les CARD -->

        </div>
    </div>
    <!-- fin de la partie principale -->


    <!-- CARD pour 1 articles  -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2016/05/01/21/20/earth-1365995_1280.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Accéder au lien</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de CARD pour 1 articles -->


</body>

</html>