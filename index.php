<?php require_once 'views/parts/header.php'?>
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
            <a href="/citations">Créer une citation</a>
        </div>
        <div class="btn-read">
            <a href="/quotes" name="btnQuote">Lire des citations</a>
        </div>
    </div>
</header>
<main>
<?php
    foreach ($quotes as $quote) { ?>
        <div class="quoteCard" style="background-image: url(/<?= $quote->image; ?>);">
        <a class="lienCitation" href="modifier?idUpdate=<?= $quote->id ?>">
            <blockquote>
                <p class="textQuote"> <?= $quote->content ?></p>
                <cite> <?= $quote->username ?> </cite>
            </blockquote>
        </a>
        </div>
    <?php
    }
    ?>
</main>

<?php require_once 'views/parts/footer.php'?>