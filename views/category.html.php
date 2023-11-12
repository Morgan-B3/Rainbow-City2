<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/liste.css">
    <title>Liste <?= $category['title'];?></title>
</head>

    <!-- *********** -->
  <!-- Header  -->
<!-- *********** -->
  <header>
    <!-- Navbar  -->
    <a href="index.html"><img src="./images/logo.png" height="90px" alt="Rainbow City logo" class="rainbowlogo"></a>
    <div class="flexcol">
      <nav class="flexrow">
        <div class="meteo"><a href="./meteo.html" class="header-text" id="meteo"></a><a href="./meteo.html"
            class="header-text"><img src="images/sun.png" alt="soleil" class="soleil"></a> </div>
        <div>
          <a href="./presentation.html" class="header-text">Qui sommes-nous ?</a>
          <a href="./connexion.html" class="header-text">Connexion</a>
          <a href="./pageprofil.html" class="header-text">Mon profil<img src="./images/icone.png" alt="icone"
              class="icone"></a>
          <!-- <a href="./favoris.html" class="header-text">Favoris</a><img src="./images/favoris.png" alt="favoris"
             class="favoris"> -->
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg container d-inline-flex justify-content-end">
        <div class="container nav-taille">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                         <a class="nav-link active header-text" aria-current="page" href="#">Accueil</a>
                     </li> -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active header-text" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Découvrir la ville
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item header-text" href="presentation.html">Son histoire</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item header-text" href="listeDivertissement.html">Sa culture</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item header-text" href="resident.html">Devenez Resident</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active header-text" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Explorez
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item header-text" href="./tresor.html">Chasse au trésor</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item header-text" href="rainbowland.html">RainbowLand</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item header-text" href="liste.html">Lieux incontournables</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item header-text" href="nurserie.html">Formez-vous !</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active header-text" onclick="hasard()" href="#">Lieu au hasard !</a>
              </li>
            </ul>
          </div>
        </div>
        <form action="action_page.php">
          <input type="search" placeholder="Chercher sur le site" required id="search" list="recherche"><datalist id="recherche"><option value="Ecole"><option value="Rainbowland"><option value="Meteo"><option value="Chasse au tresor"><option value="Mairie"><option value="Cinema"></datalist><input class="buttonClass"
            type="button" value="OK">
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
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
                <li><a class="dropdown-item" href="listeNature.html">Nature</a></li>
                <li><a class="dropdown-item" href="listeGastronomie.html">Gastronomie</a></li>
                <li><a class="dropdown-item" href="listeDivertissement.html">Divertissement</a></li>
                <li><a class="dropdown-item" href="listeHistoire.html">Histoire</a></li>
                <li><a class="dropdown-item" href="listeSport.html">Sport</a></li>
                <li><a class="dropdown-item" href="listeInsolite.html">Insolite</a></li>
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
                <li><a class="dropdown-item" href="listeResident.html">Résident</a></li>
                <li><a class="dropdown-item" href="listeFamille.html">En famille</a></li>
                <li><a class="dropdown-item" href="listeAmis.html">Entre amis</a></li>
                <li><a class="dropdown-item" href="listeAmoureux.html">En amoureux</a></li>
                <li><a class="dropdown-item" href="listeSolo.html">Seul</a></li>
                <li><a class="dropdown-item" href="listeSport.html">Sportif</a></li>
                <li><a class="dropdown-item" href="listeSenior.html">Sénior</a></li>
                <li><a class="dropdown-item" href="listeCollegues.html">Entre collègues</a></li>
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
              <a class="nav-link active" href="listePMR.html">Accès PMR</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="presentation.html">Qui sommes-nous ?</a>
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
                <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter" style="color: #ffffff"></i></a>
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
  <!-- ************** -->
  <!-- Fin du Header  -->
  <!-- ************** -->


<!-- Corps du texte  -->
<div class="corps">
   <!-- Bouton retour en haut -->
   <div id="scrollUp" class="transition-opacity">
    <a href="#top"><img src="./images/totop.png" class="totop" data-bs-container="body" data-bs-toggle="popover"
        data-bs-placement="left" data-bs-content="Retour vers le haut" data-bs-trigger="hover"
        data-bs-custom-class="custom-popover" /></a>
  </div>
    <!-- <div id="headerbody"> -->
    <h1><?= $category['name']; ?></h1>
    <div class="cartes d-flex flexcol">
        <?php foreach($places as $place) {
            if($place['category']== $category['name']) { ?>
        <div class="card flexrow ">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="<?= $place['image'];?>" class="card-img-top" alt="<?= $place['title'];?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $place['title'];?> : "<?= $place['name']?>"</h5>
                        <p class="card-text"><?= $place['description-mini'];?></p>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="card-body">
                        <a href="./lieuBar.html" class="btn btn-primary">GO</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } }?>
    </div>

<!-- ********* -->
<!--  Footer  -->
<!-- ********* -->
<footer>
    <span class="header-text"><a href="./mentionsLegales.html" class="header-text">Mentions légales</a></span>
    <div class="footrow">
      <div class="footcolumn">
        <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter" style="color: #a16737"></i></a>
      </div>
      <div class="footcolumn">
        <a href="https://instagram.com/" target="_blank"><i class="bi bi-instagram" style="color: #a16737"></i></a>
      </div>
      <div class="footcolumn">
        <a href="https://facebook.com/" target="_blank"><i class="bi bi-facebook" style="color: #a16737"></i></a>
      </div>
    </div>
  </footer>
<!-- ********* -->
<!-- Fin du Footer -->
<!-- ********* -->
</div> <!-- div du body -->

<!-- script JS pour bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
<script src="./js/header.js"></script>
<script>
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })
</script>
</body>

</html>