<section id="registerView">
    <h1>Inscription</h1>
    <form action="/inscription" method="post">

        <fieldset>
            <legend>Informations de connexion</legend>

            <div>
                <label class="nameFont" for="username">Pseudo</label>
                <input type="text" name="username" id="username" placeholder="Ex: Globox">
                <?php if (isset($formErrors['username'])) { ?>
                <p class="errorColor"><?= $formErrors['username'] ?></p>
            <?php } ?>
            </div>

            <div>
                <label for="birthdate">Date de naissance</label>
                <input type="date" name="birthdate" id="birthdate">
                <?php if (isset($formErrors['birthdate'])) { ?>
                <p class="errorColor"><?= $formErrors['birthdate'] ?></p>
            <?php } ?>
            </div>

            <div>
                <label for="email">Adresse mail</label>
                <input type="email" name="email" id="email" placeholder="Ex: jean.dupont@mail.com">
                <?php if (isset($formErrors['email'])) { ?>
                    <p class="errorColor"><?= $formErrors['email'] ?></p>
                <?php } ?>
            </div>

            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="*********">
                <?php if (isset($formErrors['password'])) { ?>
                <p class="errorColor"><?= $formErrors['password'] ?></p>
            <?php } ?>
            </div>

            <div>
                <label for="passwordConfirm">Confirmation du mot de passe</label>
                <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="*********">
                <?php if (isset($formErrors['passwordConfirm'])) { ?>
                <p class="errorColor"><?= $formErrors['passwordConfirm'] ?></p>
            <?php } ?>
            </div>
        </fieldset>

        <div class="buttonsBox">
            <input type="submit" name="send" value="Inscription">
            <button id="cancel"><a href="/accueil">Annuler</a></button>
        </div>
    </form>
</section>