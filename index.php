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
   <!-- 11 lignes, header et footer inclus-->
<!-- emet:section*9+TAB-->


<header class="flex">
        
    <nav class="navbar navbar-expand-md fixed-top">
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
                <a href=index.php class="nav-link active"> Accueil</a>
            </li>
            <li class="nav-item">
                <a href=about.php class="nav-link">A propos</a>
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
    <?php
        echo "<p>Aujourd'hui, nous sommes le " . date("d/m/Y") . ".</p>";
    ?>
    <section id="slider" class="flex overlay">
        <h1> Artisans d'ici et d'ailleurs</h1>
        <h2> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore  illo quas maiores.</h2>
<button class="btn btn-primary"> Rechercher un produit</button>
    </section>

    <section id="presentation" class="flex">
         <div>
        <h4> Présentation</h4>
         <h3> L'innovation est notre passion</h3>
         <button class="btn btn-primary"> Contact </button>
            </div>
            <div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>
             </div>

    </section>

    <section id="produits" class="flex">
<article>
    <img src="images/interior-with-antuques-small.jpg">
    <h3> Produit n°1 </h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>

</article>

<article>
    <img src="images/ceramic-craft-ware-small.jpg">
    <h3> Produit n°2 </h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>

    </article>

    <article>
        <img src="images/close-up-interior-of-modern-fashion-showroom-small.jpg">
        <h3> Produit n°3 </h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>
    
    </article>

        <article>
            <img src="images/jewelry-and-bijouterie-small.jpg">
            <h3> Produit n°4 </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>
        
        </article>

            <article>
                <img src="images/leather-crafting-tools-small.jpg">
                <h3> Produit n°5 </h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>
            
            </article>

                <article>
                    <img src="images/close-up-of-male-hand-of-potter-examining-clay-cup-small.jpg">
                    <h3> Produit n°6 </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur odio fugit nisi quas quis fugiat aliquid aut suscipit laboriosam expedita sint enim at repudiandae, maiores, esse explicabo eos corporis?</p>
                
                    </article>

    </section>

    <section id=services>
        <h4>Pourquoi nous choisir ?</h4>

<div id=services-article class="flex">
<article>
    <img src="images/Icon-Idea-osj6biskjmfmkqdbepwnbc3cuylf6pparnzforpngk.png">
    <h3> objectif 1</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
</article>

        <article>
            <img src="images/Icon-quality-osj6zgqkmp7kb5lalkhjbsl1lal095r5q67ori7mys.png">
            <h3> objectif 2 </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </article>

        <article>
            <img src="images/Icon-speed-osj726hsdgxdulnaqqqqj3wzdd76hoj8rm26oa6ozo.png">
            <h3> objectif 3</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </article>

        <article>
            <img src="images/Icon-graphic-osj79c1ke2py7r96yu2iiaxa4xxr2qxp30t863ktms.png">
            <h3> objectif 4</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
        </article>

        <article>
            <img src="images/Icon-world-osj7b22wx52vi0r2wkvw2v9pcdfz6rrzbjv9ud0u84.png">
            <h3> objectif 5</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit </p>
        </article>


        <article>
            <img src="images/Icon-packaging-osj7cnf2i19d68fslro4systkvld8b3lvfnw48ntok.png">
            <h3> objectif 6</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
        </article>
        
            </section>

            <section id=concept class="flex">
                <div>
                    <img src=images/woman-rolling-out-material-for-craft-small.jpg alt="">

                </div>

                <div> 
                <h4> Parlons de Concept</h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nesciunt eius nihil dignissimos, natus repellendus id atque harum magnam. Debitis repellendus omnis quaerat impedit, aut corporis natus culpa amet. Corrupti.</p>
                <button>Details</button>
                 </div>
    
                </section>

    <section id=boutique class="flex">

        <div> 
            <img src="images/paper-waste-for-recycle-small-768x1024.jpg">
        </div>
        <div class="align-self-center"> 
        <h4>Lorem</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nesciunt eius nihil dignissimos, natus repellendus id atque harum magnam.</p>
        </div>
        <div> 
            <img src="images/shopping-leather-handmade-crafts-shop-bags-craftsmanship-small-768x1024.jpg">
        </div>


    </section>
    <section id="temoignages" class="overlay">

<h4> Les témoignages</h4>
<div class="flex">
    <article>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque neque sint impedit tempore nesciunt voluptates doloribus assumenda asperiores.</p>
        <div class="flex1">
            <div class="photo">
                <img src="images/testimonial-1.jpg">
            </div>
            <div class="identite">
                <h5>Nom prénom</h5>
                <h6>Métier</h6>
            </div>
        </div>
    </article>
    
    <article>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque neque sint impedit tempore nesciunt voluptates
            doloribus assumenda asperiores.</p>
        <div class="flex1">
            <div class="photo">
                <img src="images/testimonial-1.jpg">
            </div>
            <div class="identite">
                <h5>Nom prénom</h5>
                <h6>Métier</h6>
            </div>
        </div>
    </article>
    <article>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque neque sint impedit tempore nesciunt voluptates
            doloribus assumenda asperiores.</p>
        <div class="flex1">
            <div class="photo">
                <img src="images/testimonial-2.jpg">
            </div>
            <div class="identite">
                <h5>Nom prénom</h5>
                <h6>Métier</h6>
            </div>
        </div>
    </article>
    <article>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque neque sint impedit tempore nesciunt voluptates
            doloribus assumenda asperiores.</p>
        <div class="flex1">
            <div class="photo">
                <img src="images/testimonial-2.jpg">
            </div>
            <div class="identite">
                <h5>Nom prénom</h5>
                <h6>Métier</h6>
            </div>
        </div>
    </article>
</div>

</section>
<section id="action" class="flex">
    <div>
    <h4>Comment adhérer à nos offres</h4>
    <p>Contactez-nous</p>
    </div>
    <div clas="btn-contact"> 
        <a href="contact.php" class="btn btn-primary">Contact</a>
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
