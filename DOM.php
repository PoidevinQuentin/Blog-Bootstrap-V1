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
                    <img src="https://simplesnippets.tech/wp-content/uploads/2018/10/what-is-document-object-model-in-JS-featured-image.jpg"
                        class="card-img-top" alt="JavaScript-DOM">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript DOM</h5>
                        <p class="card-text">DOM : Document Objet Model</p>
                        <br>
                        <hr>

                        <p class="card-text">Il permet de manipuler tous les objets qui sont inclus dans le documents
                            HTML (images, textes, formulaires...)</p>
                        <br>
                        <br>
                        <hr>
                        <p class="card-text">document.getElementById()</p>
                        <p class="card-text">Elle va rechercher un élément grace à son "id".<br>
                            c'est la seule qui nous permette de retrouver un seul élément précis.</p>
                        <p class="card-text">Exemple : getElementById("id")</p>
                        <br>
                        <br>
                        <hr>
                        <p class="card-text">document.getElementByClassName()</p>
                        <p class="card-text">Elle va rechercher un élément grace à sa "class".<br>
                            Peut contenir plusieurs éléments avec la meme classe.</p>
                        <p class="card-text">Exemple : getElementByClassName("class")</p>
                        <br>
                        <br>
                        <hr>
                        <p class="card-text">document.getElementByTagName()</p>
                        <p class="card-text">Elle va rechercher tous les élément avec la meme balise.<br>
                            Par exemple elle va chercher tous les éléments avec la balise "a" ou "button" ou "input"</p>
                        <p class="card-text">Exemple : getElementByTagName("button")</p>
                        <br>
                        <br>
                        <hr>
                        <p class="card-text">document.querySelector()</p>
                        <p class="card-text">Cette méthode est plus complexe, mais aussi beaucoup plus puissante car elle permet de faire une recherche complexe dans le DOM, en mélangeant plusieurs procédés. Il s'agit en fait d'un sélecteur qui permet de cibler certains éléments.</p><br>

                        <p>Par exemple,  document.querySelector("#myId p.article > a")  fera une recherche dans l'élément ayant pour id  #myId , les éléments de type  "p"  qui ont pour classe  "article" , afin de récupérer le lien (  "a"  ) qui est un enfant direct (pas des enfants de ses enfants).</p>
                        <p class="card-text">Exemple : document.querySelector("#myId p.article > a")</p>
                        <br>
                        <br>
                        <hr>
                        <p class="card-text">document.getElementByTagName()</p>
                        <p class="card-text">Elle va rechercher tous les élément avec la meme balise.<br>
                            Par exemple elle va chercher tous les éléments avec la balise "a" ou "button" ou "input"</p>
                        <p class="card-text">Exemple : getElementByTagName("button")</p>






















                        <p class="card-text"><small class="text-muted">Le 23/11/2022</small></p>
                        <!-- <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Accéder au lien</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>













</body>

</html>