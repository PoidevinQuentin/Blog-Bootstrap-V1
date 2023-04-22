<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('includes/head.php'); ?>
</head>

<body>

    <header>
        <?php include('includes/navbar.php'); ?>
    </header>




    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <strong>Comment cibler un élément en Javascript</strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                          <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Exemple et description
                        </button>
                    </p>
                    <code>getElementById(),</code> sélection par attribut HTML <strong>ID.</strong><br>
              
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        La méthode javascript getElementById() de l'objet Document permet de sélectionner une balise ayant un attribut id (je précise que la valeur de l'id doit être unique dans votre page HTML).<br>
                            <i>document.getElementById('monId');</i>
                        </div>
                    </div>
                    <code>getElementsByName(),</code> sélection par attribut HTML <strong>NAME.</strong><br>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        La méthode Javascript getElementsByName() de l'objet Document permet de sélectionner une balise par sa valeur d'attribut name.<br>
                        <i>document.getElementsByName('attribut-name');</i>
                        </div>
                    </div>
                    <code>getElementsByTagName(),</code> sélection par nom de balise <strong>HTML</strong><br>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        La méthode javascript getElementsByTagName() de l'objet Document ou Element permet de sélectionner une balise par son nom (tagName).<br>
                        <i>document.getElementsByTagName('SPAN');</i>
                        </div>
                    </div>
                    <code>getElementsByClassName(),</code> sélecteur par identifiant présent dans attribut HTML
                    <strong>CLASS.</strong><br>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        La méthode Javascript getElementsByClassName() de l'objet Document ou Element permet de sélectionner une balise par un identifiant de class CSS contenu dans l'attribut HTML (class).<br>
                        <i>document.getElementsByClassName('MaClass')</i>
                        </div>
                    </div>
                    <code>querySelector()</code> et <code>querySelectorAll(),</code> sélecteurs par sélecteurs
                    <strong>CSS</strong> .<br>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        La méthode Javascript querySelector() de l'objet Document ou Element permet de sélectionner une balise grâce à un sélecteur CSS.<br>
                        <i>document.querySelector('BODY > TABLE .MaClass');</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                    overflow.

                </div>
            </div>
        </div>
    </div>










<!-- 
    <code>.accordion-body</code>
    <strong>This is the first item's accordion body.</strong> -->
</body>

</html>