<?php require 'partials/header.html.php'; ?>


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

            <?php // if(pas de commentaire) => laissez-nous votre avis
                    // else => modifier / supprimer votre avis ?>

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


<?php require 'partials/footer.html.php'; ?>