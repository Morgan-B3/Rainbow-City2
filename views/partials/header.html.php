<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/index.css" />

    <title>Rainbow City</title>
  </head>

  <body>
    <!-- *********** -->
    <!-- Header  -->
    <!-- *********** -->
    <header class="flex justify-around lg:justify-evenly xl:justify-around items-center">
      <!-- Navbar  -->
      <a href="index.html"
        ><img
          src="./images/logo.png"
          alt="Rainbow City logo"
          class="rainbowlogo h-[90px]"
      /></a>
      <div
        class="h-full lg:flex flex-col hidden lg:w-1/2 xl:w-[60%] justify-around"
      >
        <nav class="flex justify-between w-full">
          <div></div>
          <a
            href="./meteo.html"
            class="meteo hidden xl:flex header-text items-center gap-x-2"
          >
            <div id="meteo"></div>
            <img src="images/sun.png" alt="soleil" class="soleil"
          /></a>

          <div class="flex gap-x-8">
            <a href="./presentation.html" class="header-text"
              >Qui sommes-nous ?</a
            >
            <a href="./connexion.html" class="header-text">Connexion</a>
            <a href="./pageprofil.html" class="header-text flex"
              >Mon profil<img
                src="./images/icone.png"
                alt="icone"
                class="icone"
            /></a>
          </div>
        </nav>
        <nav class="flex justify-end xl:justify-between w-full">
          <div class="flex justify-between gap-x-8 hidden xl:flex items-center">
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown button
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown button
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
            <div class="nav-item">
              <a class="header-text navi-link active" onclick="hasard()" href="#"
                >Lieu au hasard !</a
              >
            </div>
          </div>
          <form action="action_page.php" class="flex hidden lg:block">
            <input
              type="search"
              placeholder="Chercher sur le site"
              required
              id="search"
              list="recherche"
            /><datalist id="recherche">
              <option value="Ecole"></option>
              <option value="Rainbowland"></option>
              <option value="Meteo"></option>
              <option value="Chasse au tresor"></option>
              <option value="Mairie"></option>
              <option value="Cinema"></option></datalist
            ><input class="buttonClass" type="button" value="OK" />
          </form>
        </nav>
      </div>
      <div class="lg:hidden"></div>
    </header>

    <!-- Menu burger  -->
    <div class="w-full flex justify-evenly items-center">
      <div class="md:w-1/2 w-4/5 h-[110px]"></div>
      <nav class="navbar offbouton lg:hidden w-fit z-10">
        <div class="burger">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a
                    class="navi-link active"
                    aria-current="page"
                    href="./index.html"
                    >Accueil</a
                  >
                </li>
                <li>
                  <hr class="divider" />
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="navi-link dropdown-toggle active"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Activités
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="listeNature.html"
                        >Nature</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeGastronomie.html"
                        >Gastronomie</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeDivertissement.html"
                        >Divertissement</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeHistoire.html"
                        >Histoire</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeSport.html">Sport</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeInsolite.html"
                        >Insolite</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <hr class="divider" />
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="navi-link dropdown-toggle active"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Vous êtes
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="listeResident.html"
                        >Résident</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeFamille.html"
                        >En famille</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeAmis.html"
                        >Entre amis</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeAmoureux.html"
                        >En amoureux</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeSolo.html">Seul</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeSport.html"
                        >Sportif</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeSenior.html"
                        >Sénior</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="listeCollegues.html"
                        >Entre collègues</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <hr class="divider" />
                </li>
                <li class="nav-item">
                  <a class="navi-link active" href="./tresor.html"
                    >Chasse au trésor</a
                  >
                </li>
                <li class="nav-item">
                  <a class="navi-link active" href="./rainbowland.html"
                    >RainbowLand</a
                  >
                </li>
                <li>
                  <hr class="divider" />
                </li>
                <li class="nav-item">
                  <a class="navi-link active" href="listePMR.html">Accès PMR</a>
                </li>
                <li class="nav-item">
                  <a class="navi-link active" href="presentation.html"
                    >Qui sommes-nous ?</a
                  >
                </li>
                <li class="nav-item">
                  <a class="navi-link active" onclick="hasard()" href="#"
                    >Lieu au hasard !</a
                  >
                </li>
                <li>
                  <hr class="divider" />
                </li>
                <div class="d-flex iconemenu">
                  <!-- <div class="footcolumn header-text">Retrouvez-nous sur :</div> -->
                  <div>
                    <a href="https://twitter.com/" target="_blank"
                      ><i class="bi bi-twitter" style="color: #ffffff"></i
                    ></a>
                  </div>
                  <div>
                    <a href="https://instagram.com/" target="_blank"
                      ><i class="bi bi-instagram" style="color: #ffffff"></i
                    ></a>
                  </div>
                  <div>
                    <a href="https://facebook.com/" target="_blank"
                      ><i class="bi bi-facebook" style="color: #ffffff"></i
                    ></a>
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- ************** -->
    <!-- Fin du Header  -->
    <!-- ************** -->

    <div class="corps">