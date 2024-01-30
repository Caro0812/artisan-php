<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
     <!-- Affichage par rapport à la taille de l'écran'-->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>balise qui s'affiche en haut dans le navigateur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? family=Mooli&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="stylesheet" href="code/css/style.css">
<link rel="stylesheet" href="code/css/responsive.css">

</head>
<body>

    <header class="flex">
     
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <!--marque = lien-->
                <a href="index.php">
                <h4> ARTISANS </h4>
                </a>
                    <!--bouton-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--menu-->


          <div id="navSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active"> Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">A propos</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"> Contact</a>
                </li>
            </ul>
            </div>
            
        </nav>
        <!--icone recherche-->
        <form role="search">
            <input type="search" placeholder="Mots clés" class=" ">
            <button type="submit" class="btn btn-outline-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
              </svg></button>
        </form>
    </div>
        <div>Icon</div>
    </header>

<main class="container-fluid">
    <?php
        echo "<p>Aujourd'hui, nous sommes le " . date("d/m/Y") . ".</p>";
    ?>
    <section class="row bg-dark text-danger overlay align-items-center mask1" id="presentation-about">
        <h1 class="text-center">A propos de nous</h1>
    </section>
    <section class="row">
        <!--espace = 2 colonnes-->

        <div class="col-md-4 offset-md-2">
        <h3 class="h5">Lorem, ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est aut consequuntur iste velit dignissimos excepturi, aperiam quo, sequi reiciendis a fugiat ab aliquam. Culpa pariatur alias a eveniet, accusantium nemo.</p>
        </div>

        <div class="col-md-2">
            <h3 class="h5">Lorem, ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est aut consequuntur iste velit dignissimos excepturi, aperiam quo, sequi reiciendis a fugiat ab aliquam. Culpa pariatur alias a eveniet, accusantium nemo.</p>
        </div>

        <div class="col-md-2">
            <h3 class="h5">Lorem, ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est aut consequuntur iste velit dignissimos excepturi, aperiam quo, sequi reiciendis a fugiat ab aliquam. Culpa pariatur alias a eveniet, accusantium nemo.</p>
        </div>
         <!--espace vide : 2 colonnes restantes qui n'ont pas été attribuées-->


    </section>
    <section class="row">
        <!--12 colonnes-->
        <div class="col-md-4 offset-md-2 p-0">
            
            <img src="images/living-room.jpg"
        alt="mots cles" class="img-fluid">
        </div>
        <div class="col-md-4 ps-5 bg-light d-flex flex-column justify-content-center">
            <small>Nouveautés</small>
            <h4 class="py-4">Lorem ipsum Dolor</h4>
            <button class="btn btn-primary col-3">Détails</button>
        </div>
        <!--12 colonnes-->

        <div class="col-md-4 offset-md-2 ps-5 bg-light d-flex flex-column justify-content-center">
            <small>Nouveautés</small>
            <h4 class="py-4">Lorem ipsum Dolor</h4>
            <button class="btn btn-primary col-3">Détails</button>
        </div>
        <div class="col-md-4 p-0">
            <img src="images/clothes-shop.jpg" 
            alt="mots cles" class="img-fluid">
        </div>

    </section>

    <section class="row">
        <div class="col-md-3 offset-md-2">
            <h6>Notre boutique</h6>
            <h2>Soyons créatif<br>ensemble ! </h2>

        </div>
        <div class="col-md-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolor veniam delectus impedit nemo porro? Necessitatibus eveniet, magnam nulla eum repellendus sit, omnis cumque optio laboriosam harum, atque dolor impedit.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolor veniam delectus impedit nemo porro? Necessitatibus eveniet, magnam nulla eum repellendus sit, omnis cumque optio laboriosam harum, atque dolor impedit. </p>
        </div>
        <!--2 colonnes vides-->
    </section>

    <section class="row overlay" id="compteur">
        <div class="col-md-2 offset-md-2 py-5">
            <span> 10</span>
        </div>
        <div class="col-md-2 py-5">
            <span>123</span>
        </div>
        <div class="col-md-2 py-5">
            <span>8</span>
        </div>
        <div class="col-md-2 py-5">
            <span>77</span>
        </div>
        <!--2 colonnes vides-->
    </section>

    <section class="row align-items-center" id="about-action">
        <div class="col-md-4 offset-md-2">
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary">Contact</button>
        </div>
        <!--2 colonnes vides-->

    </section>

</main>


        <footer>
            <p>Copyright 2023 Formation 31 - Mentions légales</p>       
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      
</body>
</html>
        