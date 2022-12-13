<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include "includes/head.php"; ?>
    <link rel="stylesheet" href="developpement/JavaScript/Jeux/morpion/style.css">

</head>

<body>

    <header>
        <?php include "includes/navbar.php"; ?>
    </header>

    <h1>Tic Tac Toe</h1>

    <h2></h2>
    <button id="recommencer" class="btn btn-success btn-lg active">Recommencer</button>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <section id="jeu">
                        <div data-index="0" class="case"></div>
                        <div data-index="1" class="case"></div>
                        <div data-index="2" class="case"></div>
                        <div data-index="3" class="case"></div>
                        <div data-index="4" class="case"></div>
                        <div data-index="5" class="case"></div>
                        <div data-index="6" class="case"></div>
                        <div data-index="7" class="case"></div>
                        <div data-index="8" class="case"></div>
                    </section>
                    <div class="card-body">
                        <h5 class="card-title">Jeux du Morpion</h5>
                        <p class="card-text">Jeux du Morpion aussi appeler Tic Tac Toe en JavaScript</p>
                        <p class="card-text"><small class="text-muted">Le 20/11/2022</small></p>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="developpement/JavaScript/Jeux/morpion/script.js"></script>
</body>

</html>