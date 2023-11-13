<?php require 'partials/header.html.php'; ?>


      <!-- Bouton retour en haut -->
      <div id="scrollUp" class="hidden lg:block transition-opacity hover:bounceOrig">
        <a href="#top"
          ><img
            src="./images/totop.png"
            class="totop"
            data-bs-container="body"
            data-bs-toggle="popover"
            data-bs-placement="left"
            data-bs-content="Retour vers le haut"
            data-bs-trigger="hover"
            data-bs-custom-class="custom-popover"
        /></a>
      </div>

      <!-- Carousel -->
      <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="carousel-button active"
            aria-current="true"
            aria-label="Slide 1"
          >
            <img src="./images/lego2_2.png" class="d-block zoom2" alt="lego" />
          </button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            class="carousel-button"
            aria-label="Slide 2"
          >
            <img
              src="./images/histoire0.png"
              class="d-block zoom2"
              alt="lego"
            />
          </button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            class="carousel-button"
            aria-label="Slide 3"
          >
            <img src="./images/tresor0.png" class="d-block zoom2" alt="lego" />
          </button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            class="carousel-button"
            aria-label="Slide 4"
          >
            <img
              src="./images/rainbowland0.png"
              class="d-block zoom2"
              alt="lego"
            />
          </button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            class="carousel-button"
            aria-label="Slide 5"
          >
            <img
              src="./images/resident0.png"
              class="d-block zoom2"
              alt="lego"
            />
          </button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="5"
            class="carousel-button"
            aria-label="Slide 0"
          >
            <img src="./images/brique0.png" class="d-block zoom2" alt="lego" />
          </button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/lego2_2.png" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <a href="./presentation.html"
              ><img src="./images/histoire0.png" class="d-block w-100"
            /></a>
          </div>
          <div class="carousel-item">
            <a href="./tresor.html"
              ><img src="./images/tresor0.png" class="d-block w-100"
            /></a>
          </div>
          <div class="carousel-item">
            <a href="./rainbowland.html"
              ><img src="./images/rainbowland0.png" class="d-block w-100"
            /></a>
          </div>
          <div class="carousel-item">
            <a href="./resident.html"
              ><img src="./images/resident0.png" class="d-block w-100"
            /></a>
          </div>
          <div class="carousel-item">
            <a href="./nurserie.html"
              ><img src="./images/brique0.png" class="d-block w-100"
            /></a>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
        <!-- Gallery -->
    <h2>Vous êtes ...</h2>
      <div class="w-75 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
      <?php foreach($categories as $category) {
            if ($category['category'] == 'status' || is_array($category['category'])){
                if (is_array($category['category'])){
                $category['category_name'] = $category['category_name'][0];
                $category['title'] = $category['category_name'];
                } ?>
        <a href="/catégorie" class="">
          <figure class="movie" >
            <img src="./images/category/<?=$category['title']?>.jpg" class="" />
            <figcaption><div class="px-5"><?= $category['category_name']?></div></figcaption>
          </figure>
        </a>
        <?php } } ?>
      </div>

      <h2>Vous préferez ...</h2>
      <div class="w-75 grid grid-cols-3 gap-10">
      <?php foreach($categories as $category) {
            if ($category['category'] == 'activity' || is_array($category['category'])){
                if (is_array($category['category'])){
                $category['category_name'] = $category['category_name'][0];
                $category['title'] = $category['category_name'];
                } ?>
        <a href="/catégorie" class="">
          <figure class="movie" >
            <img src="./images/category/<?=$category['title']?>.jpg" class="" />
            <figcaption><div class="px-5"><?= $category['category_name']?></div></figcaption>
          </figure>
        </a>
        <?php } } ?>
      </div>

<?php require 'partials/footer.html.php'; ?>
