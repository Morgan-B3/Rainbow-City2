<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/lieu.css">
    <title><?= $title?></title>
</head>

<body>
    <!-- Header  -->
    <header>
        <!-- Navbar  -->
        <a href="index.html"><img src="./images/logo.png" height="90px" alt="Rainbow City logo" class="rainbowlogo"></a>
        <div class="flexcol">
            <nav class="flexrow">
                <div class="meteo"><a href="./meteo.html" class="header-text" id="meteo"></a><a href="./meteo.html" class="header-text"><img
                    src="images/sun.png" alt="soleil" class="soleil"></a> </div>
        <div>
                    <a href="./nous.html" class="header-text">Qui sommes-nous ?</a>
                    <a href="./connexion.html" class="header-text">Connexion</a>
                    <a href="./connexion.html" class="header-text">Mon profil<img src="./images/icone.png" alt="icone"
                            class="icone"></a>
                    <!-- <a href="./favoris.html" class="header-text">Favoris</a><img src="./images/favoris.png" alt="favoris"
             class="favoris"> -->
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg container d-inline-flex justify-content-end">
                <div class="container nav-taille">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">
                         <a class="nav-link active header-text" aria-current="page" href="#">Accueil</a>
                     </li> -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active header-text" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Découvrir la ville
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item header-text" href="#">Son histoire</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item header-text" href="#">Sa culture</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item header-text" href="#">Devenez Resident</a></li>
                                </ul>  
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active header-text" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Explorez
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item header-text" href="./tresor.html">Chasse au trésor</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item header-text" href="#">RainbowLand</a></li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item header-text" href="#">Lieux inmanquables</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active header-text" onclick="hasard()" href="#">Lieu au hasard !</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="action_page.php">
                    <input type="search" placeholder="Chercher sur le site" required id="search"><input class="buttonClass"
                        type="submit" value="OK">
                </form>
            </nav>
        </div>
    </header>

    <!-- Menu burger  -->
    <nav class="navbar fixed-top offbouton ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.html">Accueil</a>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Activités
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Nature</a></li>
                                <li><a class="dropdown-item" href="#">Gastronomie</a></li>
                                <li><a class="dropdown-item" href="#">Divertissement</a></li>
                                <li><a class="dropdown-item" href="#">Histoire</a></li>
                                <li><a class="dropdown-item" href="#">Sport</a></li>
                                <li><a class="dropdown-item" href="#">Insolite</a></li>
                            </ul>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Vous êtes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Résident</a></li>
                                <li><a class="dropdown-item" href="#">En famille</a></li>
                                <li><a class="dropdown-item" href="#">Entre amis</a></li>
                                <li><a class="dropdown-item" href="#">En amoureux</a></li>
                                <li><a class="dropdown-item" href="#">Seul</a></li>
                                <li><a class="dropdown-item" href="#">Sportif</a></li>
                                <li><a class="dropdown-item" href="#">Sénior</a></li>
                                <li><a class="dropdown-item" href="#">Entre collègues</a></li>
                            </ul>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="./tresor.html">Chasse au trésor</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="./rainbowland.html">RainbowLand</a>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Ecotourisme</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Accès PMR</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" onclick="hasard()" href="#">Lieu au hasard !</a>
                        </li>
                        <li>
                            <hr class="divider">
                        </li>
                        <div class="d-flex iconemenu">
                            <!-- <div class="footcolumn header-text">Retrouvez-nous sur :</div> -->
                            <div>
                                <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter"
                                        style="color: #ffffff"></i></a>
                            </div>
                            <div>
                                <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"
                                        style="color: #ffffff"></i></a>
                            </div>
                            <div>
                                <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook"
                                        style="color: #ffffff"></i></a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


<!-- Corps du texte  -->
<!-- <div class="corps"> -->
<div id="headerbody">
    <div class="d-flex flexcol lieu">
        <div class="row g-0 titre">
            <div class="col-md-6 image">
                <img src="./images/places/<?= $image;?>" alt="<?= $title;?>">
            </div>
            <div class="col-md-6">
                <div class="row g-0">
                    <h1><?= $titre; ?><br><?= $name; ?></h1>
                </div>
                <div class="row g-0 lieutxt">
                    <p><?= $description ?></p>
                </div>
                <div class="row g-0 lieutxt2">
                    <div class="col-md-6">
                        <p>Avis : <?= $sum; ?></p>
                    </div>
                    <div class="col-md-6">
                        <p> <a href="#" class="btn">Ajouter aux favoris</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 ">
            <div class="row g-0 commentaires">
                <h2>Avis et commentaires</h2>
            </div>
            <div class="row g-0">
                <div class="cartes d-flex flexcol">
                    <?php foreach($comments as $comment){?>
                    <div class="card flexrow ">
                        <div class="row g-0">
                            <div class="col-md-1">
                                <img src=".images/comments/<?= $comment['image']?>" class="card-img-top" alt="<?= $comment['title'] ?>">
                            </div>
                            <div class="col-md-11">
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <h5><?= $comment['name']." (".$comment['date'].")"?></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Avis : <?= $comment['rating']?></h5>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <p class="card-text"><?= $comment['comment']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row g-0 ">
            <div class="row g-0 commentaires">
                <h3>Laissez-nous votre avis</h3>
            </div>
            <form method="get">
                <div class="row g-0">
                    <div class="cartes d-flex flexcol">
                        <div class="card flexrow ">
                            <div class="row g-0">
                                <div class="col-md-1">
                                    <img src="./images/icone.png" class="card-img-top" alt="lego">
                                </div>
                                <div class="col-md-11">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-md-10">
                                                <div class="row g-0">
                                                    <div class="col-md-8">
                                                        <h5>Super_Syl (30/06/2023)</h5>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Avis : <input type="radio" name="avis" id="avis1" required><!-- <label for="avis1"><img src="./images/favoris.png" class="etoile"></label> --><input type="radio" name="avis" id="avis2" required><input type="radio" name="avis" id="avis3" required><input type="radio" name="avis" id="avis4" required><input type="radio" name="avis" id="avis5"required ></p>
                                                    </div>
                                                </div>
                                                <div class="row g-0 ">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Votre commentaire" cols="30" rows="3"
                                                            class="w-100"required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 comment">
                                                <button type="submit" href="#" class="btn">Envoyer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <footer>
        <span class="header-text">Plan du site</span>
        <div class="footrow">
            <!-- <div class="footcolumn header-text">Retrouvez-nous sur :</div> -->
            <div class="footcolumn">
                <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter" style="color: #a16737"></i></a>
            </div>
            <div class="footcolumn">
                <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram"
                        style="color: #a16737"></i></a>
            </div>
            <div class="footcolumn">
                <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook"
                        style="color: #a16737"></i></a>
            </div>
        </div>
    </footer>
</div> <!-- div du body -->

<!-- script JS pour bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script src="./js/header.js"></script>
</body>

</html>