<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('includes/head.php'); ?>
</head>

<body>

    <header>
        <?php include('includes/navbar.php'); ?>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <img src="https://youcanlearnhowtocode.com/wp-content/uploads/2017/10/interactive-javascript-example.jpg"
                        class="card-img-top" alt="JavaScript-DOM">
                    <div class="card-body">
                        <h5 class="card-title text-center">Modifier le style d'un élément HTML/CSS en JavaScript</h5>
                        <p class="card-text"></p>
                        <br>
                        <p class="card-text">consiste à modifier en JavaScript l'attribut style d'un élément HTML/CSS.</p>
                        <hr>
                        <br>
                        <p class="card-text">Exemple :<br>
                            elts[1].<strong>style</strong>.color = 'red';<br>
                            secondHand.<strong>style</strong>.transform = `rotate(${secondsDegrees}deg)`;<br>
                            minsHand.<strong>style</strong>.transform = `rotate(${minsDegrees}deg)`;<br>
                            hourHand.<strong>style</strong>.transform = `rotate(${hourDegrees}deg)`;</p>
                        <br>
                        <br>
                        <hr>
                        <p class="card-text">Vous auriez pu avoir besoin de mettre une bordure et vouloir utiliser les
                            propriétés CSS border-color , border-width et border-style. <br>
                            Dans ce cas pour retrouver le nom de la propriété CSS en JavaScript il suffit de coller le
                            deuxième mot en lui mettant une majuscule ce qui donne borderColor, borderWidth et
                            borderStyle.</p>

                        <br>
                        <br>
                        <hr>

                        <p class="card-text"><small class="text-muted">Le 23/11/2022</small></p>
                        <!-- <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Accéder au lien</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>