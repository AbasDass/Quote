<main class="quoteMain2">
    <?php
    foreach ($quotes as $quote) { ?>
        <div class="quoteCard2" style="background-image: url(assets/img/<?= $quote->nI; ?>);">
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
                                    <label for="content" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="content" name="content"></textarea>
                                    <?php if (isset($formErrors['comment'])) { ?>
                                        <p><?= $formErrors['comment'] ?></p>
                                    <?php } ?>
                                </div>
                                <button type="submit" class="btn btn-primary" name="msgComment">Envoyer mon commentaire</button>
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