document.write('\\
<!-- Header  -->
    <header>
        <!-- Navbar  -->
        <a href="index.html"><img src="./images/logo.png" height="90px" alt="Rainbow City logo" class="rainbowlogo"></a>
        <div class="flexcol">
            <nav class="flexrow">
                <div class="meteo"><a href="./meteo.html" class="header-text">Vendredi 30/06/2023<img
                            src="images/soleil.png" alt="soleil" class="soleil"></a> </div>
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
                                    <li><a class="dropdown-item header-text" href="#">Monuments</a></li>
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
                                    <li><a class="dropdown-item header-text" href="#">Parcours thématiques</a></li>
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
                                Découvrir la ville
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Son histoire</a></li>
                                <li><a class="dropdown-item" href="#">Monuments</a></li>
                                <li><a class="dropdown-item" href="#">Gastronomie</a></li>
                                <li><a class="dropdown-item" href="#">Divertissements</a></li>
                                <li><a class="dropdown-item" href="#">Sport</a></li>
                                <li><a class="dropdown-item" href="#">Bucolique</a></li>
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
                                <li><a class="dropdown-item" href="#">En couple</a></li>
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

        <p> <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem ipsum <br>Lorem
            ipsum
            <br>
        </p>
        </div>\\');