<?php
if (isset($_GET['idUpdate'])) {
    $idupdate = $_GET['idUpdate'];
    echo 'Modifier citation n°'.$idupdate;

} else {
    echo 'Aucune citation de modifier';
}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier la citation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <!-- <div class="mb-3">
                            <input type="text" placeholder="Nom utilisateur" name="username" /><br />
                            <?php if (isset($formErrors)) { ?>
                                <p><?= $formErrors ?></p>
                            <?php } ?>
                        </div> -->
                    <div class="mb-3">
                        <select name="categories" id="categories">
                            <option selected disabled>Catégorie du post</option>
                            <?php foreach ($postCategoriesList as $pc) { ?>
                                <option value="<?= $pc->id ?>"><?= $pc->name ?></option>
                            <?php } ?>
                        </select>

                        <textarea placeholder="Votre citation" cols="30" rows="10" name="content"></textarea>
                        <?php if (isset($formErrors['content'])) { ?>
                            <p class="errorColor"><?= $formErrors['content'] ?></p>
                        <?php } ?>
                        <input type="file" id="image" name="image">
                        <?php if (isset($formErrors['image'])) { ?>
                            <p class="errorColor"><?= $formErrors['image'] ?></p>
                        <?php } ?>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Poster la citation">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn-send2 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Modifier une citation</button>
</div>

<?php
if (isset($error)) {
    echo $error;
}
?>