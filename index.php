<?php require_once './views/parts/header.php'?>
<?php require_once './controllers/quotesController.php'?>
<header class="introQuote">
    <div class="title">
        <h1>Bienvenue sur Quote</h1>
    </div>
    <div class="firstTitle">
        <h2>Lisez et Créez vos citations</h2>
    </div>
    <div class="secondTitle">
        <h3>Quote est un site basé sur la lecture et écriture de citations, répertoriée par catégories et auteur</h3>
    </div>
    <div class="btn-quote">
        <div class="btn-create">
            <a href="#">Créer une citation</a>
        </div>
        <div class="btn-read">
            <a href="#">Lire des citations</a>
        </div>
    </div>
</header>
<main class="quoteMain">
    <?php
    foreach ($quotes as $quote) { ?>
        <div class="quoteCard" style="background-image: url(assets/img/<?= $quote->nI; ?>);">
            <blockquote>
                <p> <?= $quote->content ?></p>
                <cite> <?= $quote->nA ?> </cite>
            </blockquote>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un commentaire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="col-form-label">Pseudo</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="msgComment" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="msgComment" name="msgComment"><?= isset($_POST['btncomment']) && isset($formErrors['msgComment']) ? $_POST['comment'] : '' ?></textarea>
                                    <?php if (isset($formErrors['msgComment'])) { ?>
                                        <p><?= $formErrors['msgComment'] ?></p>
                                    <?php } ?>
                                </div>
                                <button type="submit" class="btn btn-primary" name="btnComment">Envoyer mon commentaire</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-send btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Commenter</button>
        </div>
    <?php
    }
    ?>
</main>
<?php require_once 'views/parts/footer.php'?>