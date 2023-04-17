<section id="login">
    <div class="formLogin">
        <form action="/connexion" method="POST">
            <h1 class="connection">Se connecter</h1>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Ex: Globox">
            <?php if (isset($formErrors['username'])) { ?>
                <p class="errorColor"><?= $formErrors['username'] ?></p>
            <?php } ?>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="********">
            <?php if (isset($formErrors['password'])) { ?>
                <p class="errorColor"><?= $formErrors['password'] ?></p>
            <?php } ?>
            <input class="btn-submit" type="submit" value="Connexion">
        </form>
    </div>
</section>