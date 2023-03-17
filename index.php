<?php session_start(); ?>
<?php require_once 'views/parts/header.php' ?>
<?php require_once 'views/parts/footer.php' ?>
<figcaption class="container">
    <blockquote class="quoteContainer">
        <?php
        foreach ($quotes as $quote) {
        ?>
            <q><?= $quote->content ?></q>
            <img class="imgQuote" src="assets/img/<?= $quote->image; ?>" </p>
        <?php
        }
        ?>
    </blockquote>
</figcaption>