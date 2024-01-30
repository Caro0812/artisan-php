<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <!-- Affichage par rapport à la taille de l'écran -->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>Formulaire de contact</title>

    <!-- Polices Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="code/css/style.css">
    <link rel="stylesheet" href="code/css/responsive.css">
</head>
<main>

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
                    <a href="about.php " class="nav-link">A propos</a>
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
      
    
    <section class="row bg-dark text-danger overlay align-items-center mask1" id="presentation-about">
        <h1 class="text-center">CONTACTEZ NOUS</h1>
    </section>

  <!--Contenu de la page contact-->

<section class="row">
    <div class="col-md-4 offset-md-2 text-center">
        <img src="images/jewelry-and-bijouterie-small.jpg" class="img-fluid rounded-top-pill vignette">
    </div>
   
    <div class="col-md-4">
                <h2>Lorem ipsum dolor</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatem cum,</p>

                <!-- Formulaire de traitement -->
                <form action="submit_contact.php" method="POST">
                    <!-- Champs du formulaire -->
                    <div class="mb-3"> 
                        <input type="text" name="name" placeholder="Votre nom" required class="form-control">
                    </div>
                    <div class="mb-3"> 
                        <input type="email" name="email" placeholder="Votre email" required class="form-control">
                    </div>
                    <div class="mb-3"> 
                        <textarea placeholder="Votre message" name="message" class="form-control"></textarea>
                    </div>
                    <div class="text-center ">
                        <input type="submit" value="Envoyer" class="btn btn-primary form-control">
                    </div>
                </form>
            </div>
        </section>


    <section class="row">
        <div class="col-md-3 offset-md-2"> 
        <h4>sous titre</h4>
        <h4>titre</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum libero distinctio</p>
        </div>
        <div class="col-md-3"> 
            <h4>Coordonnées</h4>
            <p>Rue</p>
            <p>ville</p>
            <p>code postal</p> 
        </div>
        <div class="col-md-3"> 
            <h4>Coordonnées</h4>
            <p>Rue</p>
            <p>ville</p>
            <p>code postal</p> 
        </div>
          
</section>



<section id="infos" class="flex">
    <div> 
    <h4>A propos</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum libero distinctio velit beatae officia magni ipsam quas quaerat natus consequuntur, deleniti tenetur. Omnis alias error, facere magni quaerat ipsa.</p>
    </div>
    <div> 
        <h4>Suivez-nous</h4>

        <a href="#instagram">
            <i class="fa-brands fa-instagram fa-2xl"></i>
        </a>
        <a href="#facebook"> 
        </a>
        <a href="#twitter">
        <i class="fa-brands fa-twitter fa-2xl"></i>
        </a>
        <a href="#pinterest">
        <i class="fa-brands fa-pinterest fa-2xl"></i>
        </a>
    </div>
    <div> 
        <h4>S'abonner</h4>
        <p>Inscrivez vous afin de recevoir nos offres exclusives!</p>

        <form action="" method=""> 
            <input type="email" placeholder="Votre email" required class="form-control">
            <br>
            <input type="submit" value="S'abonner" class="btn btn-primary">
        </form>
    </div>
</section>

<footer>
    <p>Copyright 2023 Formation 31 - Mentions légales</p>       
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>